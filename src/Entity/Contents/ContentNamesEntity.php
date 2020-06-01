<?php


namespace MatomoReport\Entity\Contents;


class ContentNamesEntity
{
    private $label;

    private $nb_visits;

    private $nb_impressions;

    private $nb_interactions;

    private $sum_daily_nb_uniq_visitors;

    private $interaction_rate;

    private $segment;

    private $idsubdatatable;

    private $nb_uniq_visitors;

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getNbVisits()
    {
        return $this->nb_visits;
    }

    /**
     * @param mixed $nb_visits
     */
    public function setNbVisits($nb_visits)
    {
        $this->nb_visits = $nb_visits;
    }

    /**
     * @return mixed
     */
    public function getNbImpressions()
    {
        return $this->nb_impressions;
    }

    /**
     * @param mixed $nb_impressions
     */
    public function setNbImpressions($nb_impressions)
    {
        $this->nb_impressions = $nb_impressions;
    }

    /**
     * @return mixed
     */
    public function getNbInteractions()
    {
        return $this->nb_interactions;
    }

    /**
     * @param mixed $nb_interactions
     */
    public function setNbInteractions($nb_interactions)
    {
        $this->nb_interactions = $nb_interactions;
    }

    /**
     * @return mixed
     */
    public function getSumDailyNbUniqVisitors()
    {
        return $this->sum_daily_nb_uniq_visitors;
    }

    /**
     * @param mixed $sum_daily_nb_uniq_visitors
     */
    public function setSumDailyNbUniqVisitors($sum_daily_nb_uniq_visitors)
    {
        $this->sum_daily_nb_uniq_visitors = $sum_daily_nb_uniq_visitors;
    }

    /**
     * @return mixed
     */
    public function getInteractionRate()
    {
        return $this->interaction_rate;
    }

    /**
     * @param mixed $interaction_rate
     */
    public function setInteractionRate($interaction_rate)
    {
        $this->interaction_rate = $interaction_rate;
    }

    /**
     * @return mixed
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * @param mixed $segment
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;
    }

    /**
     * @return mixed
     */
    public function getIdsubdatatable()
    {
        return $this->idsubdatatable;
    }

    /**
     * @param mixed $idsubdatatable
     */
    public function setIdsubdatatable($idsubdatatable)
    {
        $this->idsubdatatable = $idsubdatatable;
    }

    /**
     * @return mixed
     */
    public function getNbUniqVisitors()
    {
        return $this->nb_uniq_visitors;
    }

    /**
     * @param mixed $nb_uniq_visitors
     */
    public function setNbUniqVisitors($nb_uniq_visitors)
    {
        $this->nb_uniq_visitors = $nb_uniq_visitors;
    }



}