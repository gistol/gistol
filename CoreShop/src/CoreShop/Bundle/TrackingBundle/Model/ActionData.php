<?php

namespace CoreShop\Bundle\TrackingBundle\Model;

class ActionData extends AbstractData
{
    /**
     * @var string
     */
    public $affiliation;

    /**
     * @var float
     */
    public $revenue;

    /**
     * @var float
     */
    public $tax;

    /**
     * @var float
     */
    public $shipping;

    /**
     * @var string
     */
    public $coupon;

    /**
     * @var string
     */
    public $list;

    /**
     * @var int
     */
    public $step;

    /**
     * @var string
     */
    public $option;

    /**
     * @return string
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * @param string $affiliation
     */
    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;
    }

    /**
     * @return float
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @param float $revenue
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return float
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param float $shipping
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @return string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param string $coupon
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
    }

    /**
     * @return string
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param string $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }

    /**
     * @return int
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param int $step
     */
    public function setStep($step)
    {
        $this->step = $step;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }
}
