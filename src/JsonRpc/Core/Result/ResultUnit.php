<?php

namespace JsonRpc\Core\Result;

class ResultUnit extends AbstractResult
{
    /**
     * @var mixed
     */
    private $id;

    /**
     * @var mixed
     */
    private $result;

    /**
     * RpcResult constructor.
     *
     * @param mixed $id
     * @param mixed $result
     */
    public function __construct($id, $result)
    {
        $this->id     = $id;
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}
