<?php
namespace MatomoReport\Request;

use GuzzleHttp\Client;

abstract class BaseRequest implements IRequest
{
    use QueryParams;

    /**
     * @var int $pageTotal 一个总记录数
     */
    protected $pageTotal = 0;

    /**
     * @var int $recordTotal 请求记录数 (累加)
     */
    protected $recordTotal = 0;

    public function next(): IRequest
    {
        $this->filterOffset = $this->recordTotal;
        $this->pageTotal = 0;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageTotal(): int
    {
        return $this->pageTotal;
    }

    /**
     * @param int $pageTotal
     */
    public function setPageTotal(int $pageTotal)
    {
        $this->pageTotal = $pageTotal;
    }

    /**
     * @return int
     */
    public function getRecordTotal(): int
    {
        return $this->recordTotal;
    }

    /**
     * @param int $recordTotal
     */
    public function setRecordTotal(int $recordTotal)
    {
        $this->recordTotal = $recordTotal;
    }
}