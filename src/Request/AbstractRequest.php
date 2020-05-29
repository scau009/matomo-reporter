<?php
namespace MatmomoReport\Request;

abstract class AbstractRequest implements IRequest
{
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
    protected $period = "";

    /**
     * @var string $date
     */
    protected $date = "";

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

    protected $filterLimit = '';

    protected $abandonedCarts = '';

    protected $filterSortColumn = '';

    protected $flat = 1;


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
}