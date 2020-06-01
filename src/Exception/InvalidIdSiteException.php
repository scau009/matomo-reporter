<?php
namespace MatomoReport\Exception;


class InvalidIdSiteException extends BaseException
{
    protected $code = "40001";

    protected $message = "不合法的idSite";

    public function __construct()
    {
        parent::__construct($this->message, $this->code, null);
    }
}