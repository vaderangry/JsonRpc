<?php

namespace JsonRpc\Error;

class ParseErrorException extends JsonRpcException
{
    /**
     * @inheritdoc
     */
    public function getJsonRpcCode(): int
    {
        return self::PARSE_ERROR;
    }
}
