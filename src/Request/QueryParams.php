<?php


namespace MatomoReport\Request;


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

    protected $flat = 0;

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


    /**
     * @param string $period
     */
    public function setPeriod(string $period)
    {
        $this->period = $period;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date)
    {
        $this->date = $date;
    }

    /**
     * @param string $queryMethod
     */
    public function setQueryMethod(string $queryMethod)
    {
        $this->queryMethod = $queryMethod;
    }

    /**
     * @param string $module
     */
    public function setModule(string $module)
    {
        $this->module = $module;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    /**
     * @param string $segment
     */
    public function setSegment(string $segment)
    {
        $this->segment = $segment;
    }

    /**
     * @param string $format
     */
    public function setFormat(string $format)
    {
        $this->format = $format;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * @param string $idSubtable
     */
    public function setIdSubtable(string $idSubtable)
    {
        $this->idSubtable = $idSubtable;
    }

    /**
     * @param string $filterSortOrder
     */
    public function setFilterSortOrder(string $filterSortOrder)
    {
        $this->filterSortOrder = $filterSortOrder;
    }

    /**
     * @param string $filterOffset
     */
    public function setFilterOffset(string $filterOffset)
    {
        $this->filterOffset = $filterOffset;
    }

    /**
     * @param int $filterLimit
     */
    public function setFilterLimit(int $filterLimit)
    {
        $this->filterLimit = $filterLimit;
    }

    /**
     * @param string $abandonedCarts
     */
    public function setAbandonedCarts(string $abandonedCarts)
    {
        $this->abandonedCarts = $abandonedCarts;
    }

    /**
     * @param string $filterSortColumn
     */
    public function setFilterSortColumn(string $filterSortColumn)
    {
        $this->filterSortColumn = $filterSortColumn;
    }

    /**
     * @param int $flat
     */
    public function setFlat(int $flat)
    {
        $this->flat = $flat;
    }

}