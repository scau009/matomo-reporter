<?php
namespace MatomoReport\Exception;


class InvalidRequestException extends BaseException
{
    protected $code = "40001";

    protected $message = "不合法的请求";

    public function __construct()
    {
        parent::__construct($this->message, $this->code, null);
    }
}