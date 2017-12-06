<?php 

/** 
* Generated at: 2017-10-19T10:41:39+03:00
* IP: 81.18.148.142


Fields Summary: 
 - name [input]
 - rate [numeric]
 - amount [coreShopMoney]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class CoreShopTaxItem extends \CoreShop\Component\Taxation\Model\TaxItem  {

public $type = "CoreShopTaxItem";
public $name;
public $rate;
public $amount;


/**
* Get name - Name
* @return string
*/
public function getName () {
	$data = $this->name;
	 return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\CoreShopTaxItem
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get rate - Rate
* @return float
*/
public function getRate () {
	$data = $this->rate;
	 return $data;
}

/**
* Set rate - Rate
* @param float $rate
* @return \Pimcore\Model\DataObject\CoreShopTaxItem
*/
public function setRate ($rate) {
	$this->rate = $rate;
	return $this;
}

/**
* Get amount - Amount
* @return int
*/
public function getAmount () {
	$data = $this->amount;
	 return $data;
}

/**
* Set amount - Amount
* @param int $amount
* @return \Pimcore\Model\DataObject\CoreShopTaxItem
*/
public function setAmount ($amount) {
	$this->amount = $amount;
	return $this;
}

}

