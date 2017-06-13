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

class Order {
  const DECREASE = 0;
  const INCREASE = 1;
  static public $__names = array(
    0 => 'DECREASE',
    1 => 'INCREASE',
  );
}