<?php
namespace MatmomoReport\Request;

use GuzzleHttp\Client;
use MatmomoReport\Exception\InvalidIdSiteException;
use MatmomoReport\Exception\InvalidRequestException;
use MatmomoReport\Exception\InvalidTokenException;
use MatmomoReport\ReportFetcher;

abstract class BaseRequest implements IRequest
{

    /**
     * @var Client $client
     */
    private $client;

    /**
     * @var string $queryMethod
     */
    protected $queryMethod = "GET";

    /**
     * @var string $module
     */
    protected $module = "API";

    /**
     * @var string $method
     */
    protected $method = "";

    /**
     * @var string $idSite
     */
    protected $idSite = "";

    /**
     * @var string $period
     */
    protected $period = "day";

    /**
     * @var string $date
     */
    protected $date = "today";

    /**
     * @var string $segment
     */
    protected $segment = "";

    protected $format = "JSON";

    protected $tokenAuth = '';

    protected $label = '';

    protected $idSubtable = '';

    protected $filterSortOrder = '';

    protected $filterOffset = '';

    protected $filterLimit = 100;

    protected $abandonedCarts = '';

    protected $filterSortColumn = '';

    protected $flat = 1;

    /**
     * @var int $pageTotal 一个总记录数
     */
    protected $pageTotal = 0;

    /**
     * @var int $recordTotal 请求记录数 (累加)
     */
    protected $recordTotal = 0;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getAllParams(): array
    {
        return [
            'module' => $this->module,
            'method' => $this->method,
            'format' => $this->format,
            'token_auth' => $this->tokenAuth,
            'idSite' => $this->idSite,
            'period' => $this->period,
            'date' => $this->date,
            'label' => $this->label,
            'idSubtable' => $this->idSubtable,
            'filter_sort_order' => $this->filterSortOrder,
            'filter_offset' => $this->filterOffset,
            'segment' => $this->segment,
            'filter_limit' => $this->filterLimit,
            'abandonedCarts' => $this->abandonedCarts,
            'filter_sort_column' => $this->filterSortColumn,
            'flat' => $this->flat,
        ];
    }

    public function getRequestMethod(): string
    {
        return $this->queryMethod;
    }

    /**
     * @return string
     */
    public function setIdSite(string $idSite): self
    {
        $this->idSite = $idSite;
        return $this;
    }

    /**
     * @return string
     */
    public function setTokenAuth(string $tokenAuth): self
    {
        $this->tokenAuth = $tokenAuth;
        return $this;
    }

    public function getFilterLimit()
    {
        return $this->filterLimit;
    }

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

    /**
     * @param ReportFetcher $reportFetcher
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function fetch(ReportFetcher $reportFetcher)
    {
        $response = $this->client->request($this->getRequestMethod(),$reportFetcher->getRequestHost(),[
            'query' => $this->getAllParams(),
        ]);
        $content = $response->getBody()->getContents();
        if (empty($content)) {
            return $this->getResponse();
        }else{
            $result = json_decode($content);
            $this->setPageTotal(count($result));
            $this->setRecordTotal($this->getRecordTotal() + $this->getPageTotal());
            return $this->getResponse($result);
        }
    }
}