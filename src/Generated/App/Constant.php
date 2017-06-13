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

class Constant extends \Thrift\Type\TConstant {
  static protected $TYPE_STANDARD;
  static protected $TYPE_ADVANCE;

  static protected function init_TYPE_STANDARD() {
    return "standard";
  }

  static protected function init_TYPE_ADVANCE() {
    return "advance";
  }
}