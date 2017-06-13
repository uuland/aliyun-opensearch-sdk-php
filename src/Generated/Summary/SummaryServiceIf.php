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

interface SummaryServiceIf {
  /**
   * @param string $appId
   * @param string $group
   * @return \OpenSearch\Generated\Summary\Summary[]
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function listByAppIdAndGroup($appId, $group);
}