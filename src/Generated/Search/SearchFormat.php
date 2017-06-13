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

class SearchFormat {
  const XML = 0;
  const JSON = 1;
  const FULLJSON = 2;
  const PROTOBUF = 3;
  static public $__names = array(
    0 => 'XML',
    1 => 'JSON',
    2 => 'FULLJSON',
    3 => 'PROTOBUF',
  );
}