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

interface DocumentServiceIf {
  /**
   * @param string $docsJson
   * @param string $appName
   * @param string $tableName
   * @return \OpenSearch\Generated\Common\OpenSearchResult
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function push($docsJson, $appName, $tableName);
}