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

class OpenSearchSearcherServiceProcessor extends \OpenSearch\Generated\GeneralSearcher\GeneralSearcherServiceProcessor {
  public function __construct($handler) {
    parent::__construct($handler);
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

  protected function process_execute($seqid, $input, $output) {
    $args = new \OpenSearch\Generated\Search\OpenSearchSearcherService_execute_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \OpenSearch\Generated\Search\OpenSearchSearcherService_execute_result();
    try {
      $result->success = $this->handler_->execute($args->searchParams);
    } catch (\OpenSearch\Generated\Common\OpenSearchException $error) {
      $result->error = $error;
        } catch (\OpenSearch\Generated\Common\OpenSearchClientException $e) {
      $result->e = $e;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'execute', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('execute', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
}