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

class Constant extends \Thrift\Type\TConstant {
  static protected $DOC_KEY_CMD;
  static protected $DOC_KEY_FIELDS;

  static protected function init_DOC_KEY_CMD() {
    return "cmd";
  }

  static protected function init_DOC_KEY_FIELDS() {
    return "fields";
  }
}