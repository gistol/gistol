<?php 

/** 
* Generated at: 2017-10-19T10:40:41+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- order [href]
- shipmentDate [date]
- shipmentNumber [input]
- carrier [coreShopCarrier]
- trackingCode [input]
- weight [numeric]
- items [multihref]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipment\Listing getByOrder ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipment\Listing getByShipmentDate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipment\Listing getByShipmentNumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipment\Listing getByCarrier ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipment\Listing getByTrackingCode ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipment\Listing getByWeight ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderShipment\Listing getByItems ($value, $limit = 0) 
*/

class CoreShopOrderShipment extends \CoreShop\Component\Core\Model\OrderShipment {

public $o_classId = 20;
public $o_className = "CoreShopOrderShipment";
public $order;
public $shipmentDate;
public $shipmentNumber;
public $carrier;
public $trackingCode;
public $weight;
public $items;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopOrderShipment
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get order - Order
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function getOrder () {
	$preValue = $this->preGetValue("order"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("order")->preGetData($this);
	return $data;
}

/**
* Set order - Order
* @param \Pimcore\Model\DataObject\CoreShopOrder $order
* @return \Pimcore\Model\DataObject\CoreShopOrderShipment
*/
public function setOrder ($order) {
	$this->order = $this->getClass()->getFieldDefinition("order")->preSetData($this, $order);
	return $this;
}

/**
* Get shipmentDate - Shipment Date
* @return \Carbon\Carbon
*/
public function getShipmentDate () {
	$preValue = $this->preGetValue("shipmentDate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shipmentDate;
	return $data;
}

/**
* Set shipmentDate - Shipment Date
* @param \Carbon\Carbon $shipmentDate
* @return \Pimcore\Model\DataObject\CoreShopOrderShipment
*/
public function setShipmentDate ($shipmentDate) {
	$this->shipmentDate = $shipmentDate;
	return $this;
}

/**
* Get shipmentNumber - Shipment Number
* @return string
*/
public function getShipmentNumber () {
	$preValue = $this->preGetValue("shipmentNumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shipmentNumber;
	return $data;
}

/**
* Set shipmentNumber - Shipment Number
* @param string $shipmentNumber
* @return \Pimcore\Model\DataObject\CoreShopOrderShipment
*/
public function setShipmentNumber ($shipmentNumber) {
	$this->shipmentNumber = $shipmentNumber;
	return $this;
}

/**
* Get carrier - Carrier
* @return CoreShop\Component\Shipping\Model\CarrierInterface
*/
public function getCarrier () {
	$preValue = $this->preGetValue("carrier"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("carrier")->preGetData($this);
	return $data;
}

/**
* Set carrier - Carrier
* @param CoreShop\Component\Shipping\Model\CarrierInterface $carrier
* @return \Pimcore\Model\DataObject\CoreShopOrderShipment
*/
public function setCarrier ($carrier) {
	$this->carrier = $this->getClass()->getFieldDefinition("carrier")->preSetData($this, $carrier);
	return $this;
}

/**
* Get trackingCode - Tracking Code
* @return string
*/
public function getTrackingCode () {
	$preValue = $this->preGetValue("trackingCode"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->trackingCode;
	return $data;
}

/**
* Set trackingCode - Tracking Code
* @param string $trackingCode
* @return \Pimcore\Model\DataObject\CoreShopOrderShipment
*/
public function setTrackingCode ($trackingCode) {
	$this->trackingCode = $trackingCode;
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
* @return \Pimcore\Model\DataObject\CoreShopOrderShipment
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Get items - Items
* @return \Pimcore\Model\DataObject\CoreShopOrderShipmentItem[]
*/
public function getItems () {
	$preValue = $this->preGetValue("items"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("items")->preGetData($this);
	return $data;
}

/**
* Set items - Items
* @param \Pimcore\Model\DataObject\CoreShopOrderShipmentItem[] $items
* @return \Pimcore\Model\DataObject\CoreShopOrderShipment
*/
public function setItems ($items) {
	$this->items = $this->getClass()->getFieldDefinition("items")->preSetData($this, $items);
	return $this;
}

protected static $_relationFields = array (
  'order' => 
  array (
    'type' => 'href',
  ),
  'items' => 
  array (
    'type' => 'multihref',
  ),
);

public $lazyLoadedFields = array (
  0 => 'order',
  1 => 'items',
);

}

