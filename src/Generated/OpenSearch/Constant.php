<?php
namespace OpenSearch\Generated\OpenSearch;

use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class Constant extends \Thrift\Type\TConstant {
  static protected $VERSION;

  static protected function init_VERSION() {
    return "3.1.0";
  }
}