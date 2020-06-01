<?php


namespace MatomoReport\Entity\Goals;


class ItemsSkuEntity
{
    private $label;

    private $revenue;

    private $quantity;

    private $abandoned_carts;

    private $avg_price;

    private $avg_quantity;

    private $conversion_rate;

    private $Ecommerce_ProductSku;

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
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @param mixed $revenue
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getAbandonedCarts()
    {
        return $this->abandoned_carts;
    }

    /**
     * @param mixed $abandoned_carts
     */
    public function setAbandonedCarts($abandoned_carts)
    {
        $this->abandoned_carts = $abandoned_carts;
    }

    /**
     * @return mixed
     */
    public function getAvgPrice()
    {
        return $this->avg_price;
    }

    /**
     * @param mixed $avg_price
     */
    public function setAvgPrice($avg_price)
    {
        $this->avg_price = $avg_price;
    }

    /**
     * @return mixed
     */
    public function getAvgQuantity()
    {
        return $this->avg_quantity;
    }

    /**
     * @param mixed $avg_quantity
     */
    public function setAvgQuantity($avg_quantity)
    {
        $this->avg_quantity = $avg_quantity;
    }

    /**
     * @return mixed
     */
    public function getConversionRate()
    {
        return $this->conversion_rate;
    }

    /**
     * @param mixed $conversion_rate
     */
    public function setConversionRate($conversion_rate)
    {
        $this->conversion_rate = $conversion_rate;
    }

    /**
     * @return mixed
     */
    public function getEcommerceProductSku()
    {
        return $this->Ecommerce_ProductSku;
    }

    /**
     * @param mixed $Ecommerce_ProductSku
     */
    public function setEcommerceProductSku($Ecommerce_ProductSku)
    {
        $this->Ecommerce_ProductSku = $Ecommerce_ProductSku;
    }


}