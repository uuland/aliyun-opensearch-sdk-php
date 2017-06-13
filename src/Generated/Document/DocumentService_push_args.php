<?php
namespace OpenSearch\Generated\Document;

use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class DocumentService_push_args {
  static $_TSPEC;

  /**
   * @var string
   */
  public $docsJson = null;
  /**
   * @var string
   */
  public $appName = null;
  /**
   * @var string
   */
  public $tableName = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'docsJson',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'appName',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'tableName',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['docsJson'])) {
        $this->docsJson = $vals['docsJson'];
      }
      if (isset($vals['appName'])) {
        $this->appName = $vals['appName'];
      }
      if (isset($vals['tableName'])) {
        $this->tableName = $vals['tableName'];
      }
    }
  }

  public function getName() {
    return 'DocumentService_push_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->docsJson);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->appName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tableName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('DocumentService_push_args');
    if ($this->docsJson !== null) {
      $xfer += $output->writeFieldBegin('docsJson', TType::STRING, 1);
      $xfer += $output->writeString($this->docsJson);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->appName !== null) {
      $xfer += $output->writeFieldBegin('appName', TType::STRING, 2);
      $xfer += $output->writeString($this->appName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tableName !== null) {
      $xfer += $output->writeFieldBegin('tableName', TType::STRING, 3);
      $xfer += $output->writeString($this->tableName);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}