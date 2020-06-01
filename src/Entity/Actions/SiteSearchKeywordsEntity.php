<?php
namespace MatomoReport\Entity\Actions;

class SiteSearchKeywordsEntity
{
    private $label;

    private $nb_visits;

    private $nb_hits;

    private $sum_time_spent;

    private $exit_nb_visits;

    private $nb_pages_per_search;

    private $avg_time_on_page;

    private $bounce_rate;

    private $exit_rate;

    private $segment;

    private $Actions_Keyword;

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return mixed
     */
    public function getNbVisits()
    {
        return $this->nb_visits;
    }

    /**
     * @return mixed
     */
    public function getNbHits()
    {
        return $this->nb_hits;
    }

    /**
     * @return mixed
     */
    public function getSumTimeSpent()
    {
        return $this->sum_time_spent;
    }

    /**
     * @return mixed
     */
    public function getExitNbVisits()
    {
        return $this->exit_nb_visits;
    }

    /**
     * @return mixed
     */
    public function getNbPagesPerSearch()
    {
        return $this->nb_pages_per_search;
    }

    /**
     * @return mixed
     */
    public function getAvgTimeOnPage()
    {
        return $this->avg_time_on_page;
    }

    /**
     * @return mixed
     */
    public function getBounceRate()
    {
        return $this->bounce_rate;
    }

    /**
     * @return mixed
     */
    public function getExitRate()
    {
        return $this->exit_rate;
    }

    /**
     * @return mixed
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * @return mixed
     */
    public function getActionsKeyword()
    {
        return $this->Actions_Keyword;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @param mixed $nb_visits
     */
    public function setNbVisits($nb_visits)
    {
        $this->nb_visits = $nb_visits;
    }

    /**
     * @param mixed $nb_hits
     */
    public function setNbHits($nb_hits)
    {
        $this->nb_hits = $nb_hits;
    }

    /**
     * @param mixed $sum_time_spent
     */
    public function setSumTimeSpent($sum_time_spent)
    {
        $this->sum_time_spent = $sum_time_spent;
    }

    /**
     * @param mixed $exit_nb_visits
     */
    public function setExitNbVisits($exit_nb_visits)
    {
        $this->exit_nb_visits = $exit_nb_visits;
    }

    /**
     * @param mixed $nb_pages_per_search
     */
    public function setNbPagesPerSearch($nb_pages_per_search)
    {
        $this->nb_pages_per_search = $nb_pages_per_search;
    }

    /**
     * @param mixed $avg_time_on_page
     */
    public function setAvgTimeOnPage($avg_time_on_page)
    {
        $this->avg_time_on_page = $avg_time_on_page;
    }

    /**
     * @param mixed $bounce_rate
     */
    public function setBounceRate($bounce_rate)
    {
        $this->bounce_rate = $bounce_rate;
    }

    /**
     * @param mixed $exit_rate
     */
    public function setExitRate($exit_rate)
    {
        $this->exit_rate = $exit_rate;
    }

    /**
     * @param mixed $segment
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;
    }

    /**
     * @param mixed $Actions_Keyword
     */
    public function setActionsKeyword($Actions_Keyword)
    {
        $this->Actions_Keyword = $Actions_Keyword;
    }


}