<?php
namespace OpenSearch\Generated\Search;

use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class DeepPaging {
  static $_TSPEC;

  /**
   * 设置scroll请求的有效期
   * 
   * @param expire 指定的scroll请求有效期 默认 1m 表示一分钟，支持的时间单位包括：w=Week, d=Day, h=Hour, m=minute, s=second
   * 
   * @var string
   */
  public $scrollExpire = "1m";
  /**
   * @var string
   */
  public $scrollId = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'scrollExpire',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'scrollId',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['scrollExpire'])) {
        $this->scrollExpire = $vals['scrollExpire'];
      }
      if (isset($vals['scrollId'])) {
        $this->scrollId = $vals['scrollId'];
      }
    }
  }

  public function getName() {
    return 'DeepPaging';
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
            $xfer += $input->readString($this->scrollExpire);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->scrollId);
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
    $xfer += $output->writeStructBegin('DeepPaging');
    if ($this->scrollExpire !== null) {
      $xfer += $output->writeFieldBegin('scrollExpire', TType::STRING, 1);
      $xfer += $output->writeString($this->scrollExpire);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->scrollId !== null) {
      $xfer += $output->writeFieldBegin('scrollId', TType::STRING, 3);
      $xfer += $output->writeString($this->scrollId);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}