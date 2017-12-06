<?php 

/** 
* Generated at: 2017-10-19T10:40:44+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- orderItem [href]
- quantity [numeric]
- totalNet [coreShopMoney]
- totalGross [coreShopMoney]
- baseTotalNet [coreShopMoney]
- baseTotalGross [coreShopMoney]
- weight [numeric]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipmentItem\Listing getByOrderItem ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipmentItem\Listing getByQuantity ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipmentItem\Listing getByTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipmentItem\Listing getByTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipmentItem\Listing getByBaseTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipmentItem\Listing getByBaseTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipmentItem\Listing getByWeight ($value, $limit = 0) 
*/

class CoreShopOrderShipmentItem extends \CoreShop\Component\Order\Model\OrderShipmentItem {

public $o_classId = 25;
public $o_className = "CoreShopOrderShipmentItem";
public $orderItem;
public $quantity;
public $totalNet;
public $totalGross;
public $baseTotalNet;
public $baseTotalGross;
public $weight;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get orderItem - Order Item
* @return \Pimcore\Model\DataObject\CoreShopOrderItem
*/
public function getOrderItem () {
	$preValue = $this->preGetValue("orderItem"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("orderItem")->preGetData($this);
	return $data;
}

/**
* Set orderItem - Order Item
* @param \Pimcore\Model\DataObject\CoreShopOrderItem $orderItem
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem
*/
public function setOrderItem ($orderItem) {
	$this->orderItem = $this->getClass()->getFieldDefinition("orderItem")->preSetData($this, $orderItem);
	return $this;
}

/**
* Get quantity - Quantity
* @return float
*/
public function getQuantity () {
	$preValue = $this->preGetValue("quantity"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->quantity;
	return $data;
}

/**
* Set quantity - Quantity
* @param float $quantity
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem
*/
public function setQuantity ($quantity) {
	$this->quantity = $quantity;
	return $this;
}

/**
* Get totalNet - Total Net
* @return int
*/
public function getTotalNet () {
	$preValue = $this->preGetValue("totalNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalNet;
	return $data;
}

/**
* Set totalNet - Total Net
* @param int $totalNet
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem
*/
public function setTotalNet ($totalNet) {
	$this->totalNet = $totalNet;
	return $this;
}

/**
* Get totalGross - Total Gross
* @return int
*/
public function getTotalGross () {
	$preValue = $this->preGetValue("totalGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalGross;
	return $data;
}

/**
* Set totalGross - Total Gross
* @param int $totalGross
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem
*/
public function setTotalGross ($totalGross) {
	$this->totalGross = $totalGross;
	return $this;
}

/**
* Get baseTotalNet - Base Total Net
* @return int
*/
public function getBaseTotalNet () {
	$preValue = $this->preGetValue("baseTotalNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseTotalNet;
	return $data;
}

/**
* Set baseTotalNet - Base Total Net
* @param int $baseTotalNet
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem
*/
public function setBaseTotalNet ($baseTotalNet) {
	$this->baseTotalNet = $baseTotalNet;
	return $this;
}

/**
* Get baseTotalGross - Base Total Gross
* @return int
*/
public function getBaseTotalGross () {
	$preValue = $this->preGetValue("baseTotalGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseTotalGross;
	return $data;
}

/**
* Set baseTotalGross - Base Total Gross
* @param int $baseTotalGross
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem
*/
public function setBaseTotalGross ($baseTotalGross) {
	$this->baseTotalGross = $baseTotalGross;
	return $this;
}

/**
* Get weight - Weight
* @return float
*/
public function getWeight () {
	$preValue = $this->preGetValue("weight"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->weight;
	return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

protected static $_relationFields = array (
  'orderItem' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'orderItem',
);

}

