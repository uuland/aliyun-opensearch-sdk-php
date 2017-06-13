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

interface OpenSearchSearcherServiceIf extends \OpenSearch\Generated\GeneralSearcher\GeneralSearcherServiceIf {
  /**
   * @param \OpenSearch\Generated\Search\SearchParams $searchParams
   * @return \OpenSearch\Generated\GeneralSearcher\SearchResult
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function execute(\OpenSearch\Generated\Search\SearchParams $searchParams);
}