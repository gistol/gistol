<?php 

/** 
* Generated at: 2017-10-19T10:40:44+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- orderItem [href]
- quantity [coreShopMoney]
- totalNet [coreShopMoney]
- totalGross [coreShopMoney]
- totalTax [coreShopMoney]
- taxes [fieldcollections]
- baseTotalNet [coreShopMoney]
- baseTotalGross [coreShopMoney]
- baseTotalTax [coreShopMoney]
- baseTaxes [fieldcollections]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByOrderItem ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByQuantity ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByTotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByTaxes ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByBaseTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByBaseTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByBaseTotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem\Listing getByBaseTaxes ($value, $limit = 0) 
*/

class CoreShopOrderInvoiceItem extends \CoreShop\Component\Order\Model\OrderInvoiceItem {

public $o_classId = 24;
public $o_className = "CoreShopOrderInvoiceItem";
public $orderItem;
public $quantity;
public $totalNet;
public $totalGross;
public $totalTax;
public $taxes;
public $baseTotalNet;
public $baseTotalGross;
public $baseTotalTax;
public $baseTaxes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
*/
public function setOrderItem ($orderItem) {
	$this->orderItem = $this->getClass()->getFieldDefinition("orderItem")->preSetData($this, $orderItem);
	return $this;
}

/**
* Get quantity - Quantity
* @return int
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
* @param int $quantity
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
*/
public function setTotalGross ($totalGross) {
	$this->totalGross = $totalGross;
	return $this;
}

/**
* Get totalTax - Total Tax
* @return int
*/
public function getTotalTax () {
	$preValue = $this->preGetValue("totalTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalTax;
	return $data;
}

/**
* Set totalTax - Total Tax
* @param int $totalTax
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
*/
public function setTotalTax ($totalTax) {
	$this->totalTax = $totalTax;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getTaxes () {
	$preValue = $this->preGetValue("taxes"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("taxes")->preGetData($this);
	 return $data;
}

/**
* Set taxes - Taxes
* @param \Pimcore\Model\DataObject\Fieldcollection $taxes
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
*/
public function setTaxes ($taxes) {
	$this->taxes = $this->getClass()->getFieldDefinition("taxes")->preSetData($this, $taxes);
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
*/
public function setBaseTotalGross ($baseTotalGross) {
	$this->baseTotalGross = $baseTotalGross;
	return $this;
}

/**
* Get baseTotalTax - Base Total Tax
* @return int
*/
public function getBaseTotalTax () {
	$preValue = $this->preGetValue("baseTotalTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseTotalTax;
	return $data;
}

/**
* Set baseTotalTax - Base Total Tax
* @param int $baseTotalTax
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
*/
public function setBaseTotalTax ($baseTotalTax) {
	$this->baseTotalTax = $baseTotalTax;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getBaseTaxes () {
	$preValue = $this->preGetValue("baseTaxes"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("baseTaxes")->preGetData($this);
	 return $data;
}

/**
* Set baseTaxes - Base Taxes
* @param \Pimcore\Model\DataObject\Fieldcollection $baseTaxes
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem
*/
public function setBaseTaxes ($baseTaxes) {
	$this->baseTaxes = $this->getClass()->getFieldDefinition("baseTaxes")->preSetData($this, $baseTaxes);
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
  1 => 'taxes',
  2 => 'baseTaxes',
);

}

