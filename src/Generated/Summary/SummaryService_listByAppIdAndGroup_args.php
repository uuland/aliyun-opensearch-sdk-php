<?php
namespace OpenSearch\Generated\Summary;

use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class SummaryService_listByAppIdAndGroup_args {
  static $_TSPEC;

  /**
   * @var string
   */
  public $appId = null;
  /**
   * @var string
   */
  public $group = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'appId',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'group',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['appId'])) {
        $this->appId = $vals['appId'];
      }
      if (isset($vals['group'])) {
        $this->group = $vals['group'];
      }
    }
  }

  public function getName() {
    return 'SummaryService_listByAppIdAndGroup_args';
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
            $xfer += $input->readString($this->appId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->group);
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
    $xfer += $output->writeStructBegin('SummaryService_listByAppIdAndGroup_args');
    if ($this->appId !== null) {
      $xfer += $output->writeFieldBegin('appId', TType::STRING, 1);
      $xfer += $output->writeString($this->appId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->group !== null) {
      $xfer += $output->writeFieldBegin('group', TType::STRING, 2);
      $xfer += $output->writeString($this->group);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}