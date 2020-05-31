<?php


namespace MatmomoReport\Request;


trait QueryParams
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

    protected $label = '';

    protected $idSubtable = '';

    protected $filterSortOrder = '';

    protected $filterOffset = '';

    protected $filterLimit = 100;

    protected $abandonedCarts = '';

    protected $filterSortColumn = '';

    protected $flat = 1;

    public function getAllParams(): array
    {
        return [
            'module' => $this->module,
            'method' => $this->method,
            'format' => $this->format,
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

    public function getFilterLimit()
    {
        return $this->filterLimit;
    }
}