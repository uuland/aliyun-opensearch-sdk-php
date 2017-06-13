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

class FirstRankServiceClient implements \OpenSearch\Generated\FirstRank\FirstRankServiceIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function save(\OpenSearch\Generated\FirstRank\FirstRank $firstRank)
  {
    $this->send_save($firstRank);
    return $this->recv_save();
  }

  public function send_save(\OpenSearch\Generated\FirstRank\FirstRank $firstRank)
  {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_save_args();
    $args->firstRank = $firstRank;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'save', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('save', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_save()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\OpenSearch\Generated\FirstRank\FirstRankService_save_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \OpenSearch\Generated\FirstRank\FirstRankService_save_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->error !== null) {
      throw $result->error;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("save failed: unknown result");
  }

  public function getById($identity)
  {
    $this->send_getById($identity);
    return $this->recv_getById();
  }

  public function send_getById($identity)
  {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_getById_args();
    $args->identity = $identity;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getById', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getById', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getById()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\OpenSearch\Generated\FirstRank\FirstRankService_getById_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \OpenSearch\Generated\FirstRank\FirstRankService_getById_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->error !== null) {
      throw $result->error;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("getById failed: unknown result");
  }

  public function listAll()
  {
    $this->send_listAll();
    return $this->recv_listAll();
  }

  public function send_listAll()
  {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_listAll_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'listAll', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('listAll', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_listAll()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\OpenSearch\Generated\FirstRank\FirstRankService_listAll_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \OpenSearch\Generated\FirstRank\FirstRankService_listAll_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->error !== null) {
      throw $result->error;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("listAll failed: unknown result");
  }

  public function listByAppId($appId)
  {
    $this->send_listByAppId($appId);
    return $this->recv_listByAppId();
  }

  public function send_listByAppId($appId)
  {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_listByAppId_args();
    $args->appId = $appId;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'listByAppId', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('listByAppId', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_listByAppId()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\OpenSearch\Generated\FirstRank\FirstRankService_listByAppId_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \OpenSearch\Generated\FirstRank\FirstRankService_listByAppId_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->error !== null) {
      throw $result->error;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("listByAppId failed: unknown result");
  }

  public function listByAppIdAndName($appId, $name)
  {
    $this->send_listByAppIdAndName($appId, $name);
    return $this->recv_listByAppIdAndName();
  }

  public function send_listByAppIdAndName($appId, $name)
  {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_listByAppIdAndName_args();
    $args->appId = $appId;
    $args->name = $name;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'listByAppIdAndName', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('listByAppIdAndName', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_listByAppIdAndName()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\OpenSearch\Generated\FirstRank\FirstRankService_listByAppIdAndName_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \OpenSearch\Generated\FirstRank\FirstRankService_listByAppIdAndName_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->error !== null) {
      throw $result->error;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("listByAppIdAndName failed: unknown result");
  }

  public function updateById($identity, \OpenSearch\Generated\FirstRank\FirstRank $firstRank)
  {
    $this->send_updateById($identity, $firstRank);
    return $this->recv_updateById();
  }

  public function send_updateById($identity, \OpenSearch\Generated\FirstRank\FirstRank $firstRank)
  {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_updateById_args();
    $args->identity = $identity;
    $args->firstRank = $firstRank;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'updateById', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('updateById', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_updateById()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\OpenSearch\Generated\FirstRank\FirstRankService_updateById_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \OpenSearch\Generated\FirstRank\FirstRankService_updateById_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->error !== null) {
      throw $result->error;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("updateById failed: unknown result");
  }

  public function validateUpdateById($identity, \OpenSearch\Generated\FirstRank\FirstRank $firstRank)
  {
    $this->send_validateUpdateById($identity, $firstRank);
    return $this->recv_validateUpdateById();
  }

  public function send_validateUpdateById($identity, \OpenSearch\Generated\FirstRank\FirstRank $firstRank)
  {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_validateUpdateById_args();
    $args->identity = $identity;
    $args->firstRank = $firstRank;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'validateUpdateById', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('validateUpdateById', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_validateUpdateById()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\OpenSearch\Generated\FirstRank\FirstRankService_validateUpdateById_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \OpenSearch\Generated\FirstRank\FirstRankService_validateUpdateById_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->error !== null) {
      throw $result->error;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("validateUpdateById failed: unknown result");
  }

  public function removeById($identity)
  {
    $this->send_removeById($identity);
    return $this->recv_removeById();
  }

  public function send_removeById($identity)
  {
    $args = new \OpenSearch\Generated\FirstRank\FirstRankService_removeById_args();
    $args->identity = $identity;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'removeById', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('removeById', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_removeById()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\OpenSearch\Generated\FirstRank\FirstRankService_removeById_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \OpenSearch\Generated\FirstRank\FirstRankService_removeById_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->error !== null) {
      throw $result->error;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("removeById failed: unknown result");
  }

}