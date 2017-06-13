<?php
namespace OpenSearch\Generated\SecondRank;

use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

interface SecondRankServiceIf {
  /**
   * @param \OpenSearch\Generated\SecondRank\SecondRank $secondRank
   * @return \OpenSearch\Generated\SecondRank\SecondRank
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function save(\OpenSearch\Generated\SecondRank\SecondRank $secondRank);
  /**
   * @return \OpenSearch\Generated\SecondRank\SecondRank[]
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function listAll();
  /**
   * @param string $id
   * @return \OpenSearch\Generated\SecondRank\SecondRank
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function getById($id);
  /**
   * @param string $appId
   * @param string $name
   * @return \OpenSearch\Generated\SecondRank\SecondRank[]
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function listByAppIdAndName($appId, $name);
  /**
   * @param string $id
   * @param \OpenSearch\Generated\SecondRank\SecondRank $secondRank
   * @return \OpenSearch\Generated\SecondRank\SecondRank
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function updateById($id, \OpenSearch\Generated\SecondRank\SecondRank $secondRank);
  /**
   * @param string $id
   * @return \OpenSearch\Generated\SecondRank\SecondRank
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function removeById($id);
}