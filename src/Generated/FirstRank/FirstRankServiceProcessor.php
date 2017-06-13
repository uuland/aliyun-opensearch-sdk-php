<?php
namespace OpenSearch\Generated\FirstRank;

use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class FirstRankServiceProcessor {
  protected $handler_ = null;
  public function __construct($handler) {
    $this->handler_ = $handler;
  }

  public function process($input, $output) {
    $rseqid = 0;
    $fname = null;
    $mtype = 0;

    $input->readMessageBegin($fname, $mtype, $rseqid);
    $methodname = 'process_'.$fname;
    if (!method_exists($this, $methodname)) {
      $input->skip(TType::STRUCT);
      $input->readMessageEnd();
      $x = new TApplicationException('Function '.$fname.' not implemented.', TApplicationException::UNKNOWN_METHOD);
      $output->writeMessageBegin($fname, TMessageType::EXCEPTION, $rseqid);
      $x->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
      return;
    }
    $this->$methodname($rseqid, $input, $output);
    return true;
  }

  protected function process_save($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_save_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\FirstRank\FirstRankService_save_result();
    try {
      $result->success = $this->handler_->save($args->firstRank);
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'save', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('save', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_getById($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_getById_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\FirstRank\FirstRankService_getById_result();
    try {
      $result->success = $this->handler_->getById($args->identity);
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'getById', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('getById', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_listAll($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_listAll_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\FirstRank\FirstRankService_listAll_result();
    try {
      $result->success = $this->handler_->listAll();
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'listAll', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('listAll', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_listByAppId($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_listByAppId_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\FirstRank\FirstRankService_listByAppId_result();
    try {
      $result->success = $this->handler_->listByAppId($args->appId);
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'listByAppId', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('listByAppId', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_listByAppIdAndName($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_listByAppIdAndName_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\FirstRank\FirstRankService_listByAppIdAndName_result();
    try {
      $result->success = $this->handler_->listByAppIdAndName($args->appId, $args->name);
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'listByAppIdAndName', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('listByAppIdAndName', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_updateById($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_updateById_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\FirstRank\FirstRankService_updateById_result();
    try {
      $result->success = $this->handler_->updateById($args->identity, $args->firstRank);
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'updateById', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('updateById', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_validateUpdateById($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_validateUpdateById_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\FirstRank\FirstRankService_validateUpdateById_result();
    try {
      $result->success = $this->handler_->validateUpdateById($args->identity, $args->firstRank);
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'validateUpdateById', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('validateUpdateById', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_removeById($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_removeById_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\FirstRank\FirstRankService_removeById_result();
    try {
      $result->success = $this->handler_->removeById($args->identity);
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'removeById', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('removeById', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
}