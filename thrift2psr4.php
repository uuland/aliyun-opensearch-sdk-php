<?php
/**
 * Convert thrift generated files to psr4 standard
 * @see https://gist.github.com/moolex/53168ac9d04fe52d5f0a47f14404391d
 * User: moyo
 * Date: 13/06/2017
 * Time: 3:25 PM
 */

$argc < 3 && exit('Usage: ./thrift2psr4.php srcFolder dstFolder');

$src = $argv[1];
$dst = $argv[2];

is_dir($src) || exit('Source folder not exists');
is_dir($dst) || mkdir($dst, 0744);

scanning(realpath($src), realpath($dst));

function scanning($src, $dst)
{
    $dirHandler = opendir($src);

    while (false != $fileName = readdir($dirHandler))
    {
        if (in_array($fileName, ['.', '..'])) continue;

        $filePath = "{$src}/{$fileName}";
        if (is_dir($filePath))
        {
            scanning($filePath, "{$dst}/{$fileName}");
        }
        else
        {
            converting($filePath, $dst);
        }
    }

    closedir($dirHandler);
}

function converting($file, $dst)
{
    if (substr($file, - 4) != '.php') return;

    $tokens = token_get_all(file_get_contents($file));

    $namespace = '';

    $use = $block = '';
    $uses = $blocks = [];

    $nsOpened = $useOpened = $inCoping = false;

    $blockName = '';
    $braceOpens = 0;

    foreach ($tokens as $token)
    {
        if (is_array($token))
        {
            list($type, $value) = $token;
            switch ($type)
            {
                case T_NAMESPACE:
                    $nsOpened = true;
                    break;
                case T_USE:
                    $useOpened = true;
                    break;
                case T_INTERFACE:
                case T_CLASS:
                    $inCoping = true;
                    $block .= $value;
                    break;
                case T_STRING:
                case T_NS_SEPARATOR:
                    $nsOpened && $namespace .= $value;
                    $useOpened && $use .= $value;
                    if ($inCoping)
                    {
                        $block .= $value;
                        if ($type === T_STRING)
                        {
                            $blockName || $blockName = $value;
                        }
                    }
                    break;
                default:
                    $inCoping && $block .= $value;
            }
        }
        else
        {
            if ($token == ';')
            {
                $nsOpened && $nsOpened = false;
                if ($useOpened)
                {
                    $useOpened = false;
                    $uses[] = $use;
                    $use = '';
                }
            }

            if ($inCoping)
            {
                $block .= $token;

                $token == '{' && $braceOpens ++;
                $token == '}' && $braceOpens --;

                if ($braceOpens == 0)
                {
                    $inCoping = false;
                    $blocks[$blockName] = $block;
                    $blockName = $block = '';
                }
            }
        }
    }

    foreach ($blocks as $name => $block)
    {
        $cLines = [];

        $cLines[] = '<?php';
        $cLines[] = "namespace {$namespace};";
        $cLines[] = '';
        array_walk($uses, function ($class) use (&$cLines) {
            $cLines[] = "use {$class};";
        });
        $cLines[] = '';
        $cLines[] = $block;

        writing("{$dst}/{$name}.php", implode("\n", $cLines));
    }
}

function writing($file, $content)
{
    $dir = dirname($file);
    is_dir($dir) || mkdir($dir, 0744, true);
    file_put_contents($file, $content);
}
