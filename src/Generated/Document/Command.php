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

class Command {
  const ADD = 0;
  const DELETE = 1;
  const UPDATE = 2;
  static public $__names = array(
    0 => 'ADD',
    1 => 'DELETE',
    2 => 'UPDATE',
  );
}