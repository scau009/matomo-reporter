<?php
namespace MatomoReport\Exception;


class InvalidTokenException extends BaseException
{
    protected $code = "40001";

    protected $message = "不合法的auth_token";

    public function __construct()
    {
        parent::__construct($this->message, $this->code, null);
    }
}