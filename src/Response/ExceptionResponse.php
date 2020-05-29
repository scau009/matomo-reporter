<?php
namespace MatmomoReport\Response;


use MatmomoReport\Exception\BaseException;

class ExceptionResponse implements IResponse
{
    protected $exception;

    public function __construct(BaseException $exception)
    {
        $this->exception = $exception;
    }

    /**
     * @return BaseException
     */
    public function getException(): BaseException
    {
        return $this->exception;
    }


}