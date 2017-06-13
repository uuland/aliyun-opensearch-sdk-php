<?php
namespace OpenSearch\Generated\App;

use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class AppStatus {
  const AVAILABLE = 1;
  const PAUSE = 5;
  const FORBID = 6;
  const UNOPEN = 7;
  const CREATING = 8;
  const FAILED = 9;
  static public $__names = array(
    1 => 'AVAILABLE',
    5 => 'PAUSE',
    6 => 'FORBID',
    7 => 'UNOPEN',
    8 => 'CREATING',
    9 => 'FAILED',
  );
}