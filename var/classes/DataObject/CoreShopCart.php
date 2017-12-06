<?php 

/** 
* Generated at: 2017-10-19T10:40:39+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- name [input]
- customIdentifier [input]
- store [coreShopStore]
- carrier [coreShopCarrier]
- paymentProvider [coreShopPaymentProvider]
- order [href]
- currency [coreShopCurrency]
- priceRuleItems [fieldcollections]
- items [multihref]
- customer [href]
- shippingAddress [href]
- invoiceAddress [href]
- paymentFeeGross [coreShopMoney]
- paymentFeeNet [coreShopMoney]
- discountNet [coreShopMoney]
- discountGross [coreShopMoney]
- shippingNet [coreShopMoney]
- shippingGross [coreShopMoney]
- shippingTaxRate [coreShopMoney]
- taxes [fieldcollections]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByCustomIdentifier ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByStore ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByCarrier ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByPaymentProvider ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByOrder ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByCurrency ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByPriceRuleItems ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByItems ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByCustomer ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByShippingAddress ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByInvoiceAddress ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByPaymentFeeGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByPaymentFeeNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByDiscountNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByDiscountGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByShippingNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByShippingGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByShippingTaxRate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCart\Listing getByTaxes ($value, $limit = 0) 
*/

class CoreShopCart extends \CoreShop\Component\Core\Model\Cart {

public $o_classId = 17;
public $o_className = "CoreShopCart";
public $name;
public $customIdentifier;
public $store;
public $carrier;
public $paymentProvider;
public $order;
public $currency;
public $priceRuleItems;
public $items;
public $customer;
public $shippingAddress;
public $invoiceAddress;
public $paymentFeeGross;
public $paymentFeeNet;
public $discountNet;
public $discountGross;
public $shippingNet;
public $shippingGross;
public $shippingTaxRate;
public $taxes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get customIdentifier - Custom Identifier
* @return string
*/
public function getCustomIdentifier () {
	$preValue = $this->preGetValue("customIdentifier"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customIdentifier;
	return $data;
}

/**
* Set customIdentifier - Custom Identifier
* @param string $customIdentifier
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setCustomIdentifier ($customIdentifier) {
	$this->customIdentifier = $customIdentifier;
	return $this;
}

/**
* Get store - Store
* @return string
*/
public function getStore () {
	$preValue = $this->preGetValue("store"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("store")->preGetData($this);
	return $data;
}

/**
* Set store - Store
* @param string $store
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setStore ($store) {
	$this->store = $this->getClass()->getFieldDefinition("store")->preSetData($this, $store);
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
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setCarrier ($carrier) {
	$this->carrier = $this->getClass()->getFieldDefinition("carrier")->preSetData($this, $carrier);
	return $this;
}

/**
* Get paymentProvider - Payment Provider
* @return CoreShop\Component\Payment\Model\PaymentProvider
*/
public function getPaymentProvider () {
	$preValue = $this->preGetValue("paymentProvider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("paymentProvider")->preGetData($this);
	return $data;
}

/**
* Set paymentProvider - Payment Provider
* @param CoreShop\Component\Payment\Model\PaymentProvider $paymentProvider
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setPaymentProvider ($paymentProvider) {
	$this->paymentProvider = $this->getClass()->getFieldDefinition("paymentProvider")->preSetData($this, $paymentProvider);
	return $this;
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
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setOrder ($order) {
	$this->order = $this->getClass()->getFieldDefinition("order")->preSetData($this, $order);
	return $this;
}

/**
* Get currency - Currency
* @return string
*/
public function getCurrency () {
	$preValue = $this->preGetValue("currency"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("currency")->preGetData($this);
	return $data;
}

/**
* Set currency - Currency
* @param string $currency
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setCurrency ($currency) {
	$this->currency = $this->getClass()->getFieldDefinition("currency")->preSetData($this, $currency);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getPriceRuleItems () {
	$preValue = $this->preGetValue("priceRuleItems"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("priceRuleItems")->preGetData($this);
	 return $data;
}

/**
* Set priceRuleItems - Rules
* @param \Pimcore\Model\DataObject\Fieldcollection $priceRuleItems
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setPriceRuleItems ($priceRuleItems) {
	$this->priceRuleItems = $this->getClass()->getFieldDefinition("priceRuleItems")->preSetData($this, $priceRuleItems);
	return $this;
}

/**
* Get items - Items
* @return \Pimcore\Model\DataObject\CoreShopCartItem[]
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
* @param \Pimcore\Model\DataObject\CoreShopCartItem[] $items
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setItems ($items) {
	$this->items = $this->getClass()->getFieldDefinition("items")->preSetData($this, $items);
	return $this;
}

/**
* Get customer - Customer
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function getCustomer () {
	$preValue = $this->preGetValue("customer"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("customer")->preGetData($this);
	return $data;
}

/**
* Set customer - Customer
* @param \Pimcore\Model\DataObject\CoreShopCustomer $customer
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setCustomer ($customer) {
	$this->customer = $this->getClass()->getFieldDefinition("customer")->preSetData($this, $customer);
	return $this;
}

/**
* Get shippingAddress - Shipping Address
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function getShippingAddress () {
	$preValue = $this->preGetValue("shippingAddress"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("shippingAddress")->preGetData($this);
	return $data;
}

/**
* Set shippingAddress - Shipping Address
* @param \Pimcore\Model\DataObject\CoreShopAddress $shippingAddress
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setShippingAddress ($shippingAddress) {
	$this->shippingAddress = $this->getClass()->getFieldDefinition("shippingAddress")->preSetData($this, $shippingAddress);
	return $this;
}

/**
* Get invoiceAddress - Invoice Address
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function getInvoiceAddress () {
	$preValue = $this->preGetValue("invoiceAddress"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("invoiceAddress")->preGetData($this);
	return $data;
}

/**
* Set invoiceAddress - Invoice Address
* @param \Pimcore\Model\DataObject\CoreShopAddress $invoiceAddress
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setInvoiceAddress ($invoiceAddress) {
	$this->invoiceAddress = $this->getClass()->getFieldDefinition("invoiceAddress")->preSetData($this, $invoiceAddress);
	return $this;
}

/**
* Get paymentFeeGross - Payment Fee Gross
* @return int
*/
public function getPaymentFeeGross () {
	$preValue = $this->preGetValue("paymentFeeGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->paymentFeeGross;
	return $data;
}

/**
* Set paymentFeeGross - Payment Fee Gross
* @param int $paymentFeeGross
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setPaymentFeeGross ($paymentFeeGross) {
	$this->paymentFeeGross = $paymentFeeGross;
	return $this;
}

/**
* Get paymentFeeNet - Payment Fee Net
* @return int
*/
public function getPaymentFeeNet () {
	$preValue = $this->preGetValue("paymentFeeNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->paymentFeeNet;
	return $data;
}

/**
* Set paymentFeeNet - Payment Fee Net
* @param int $paymentFeeNet
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setPaymentFeeNet ($paymentFeeNet) {
	$this->paymentFeeNet = $paymentFeeNet;
	return $this;
}

/**
* Get discountNet - Discount Net
* @return int
*/
public function getDiscountNet () {
	$preValue = $this->preGetValue("discountNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discountNet;
	return $data;
}

/**
* Set discountNet - Discount Net
* @param int $discountNet
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setDiscountNet ($discountNet) {
	$this->discountNet = $discountNet;
	return $this;
}

/**
* Get discountGross - Discount Gross
* @return int
*/
public function getDiscountGross () {
	$preValue = $this->preGetValue("discountGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discountGross;
	return $data;
}

/**
* Set discountGross - Discount Gross
* @param int $discountGross
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setDiscountGross ($discountGross) {
	$this->discountGross = $discountGross;
	return $this;
}

/**
* Get shippingNet - Shipping Net
* @return int
*/
public function getShippingNet () {
	$preValue = $this->preGetValue("shippingNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shippingNet;
	return $data;
}

/**
* Set shippingNet - Shipping Net
* @param int $shippingNet
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setShippingNet ($shippingNet) {
	$this->shippingNet = $shippingNet;
	return $this;
}

/**
* Get shippingGross - Shipping Gross
* @return int
*/
public function getShippingGross () {
	$preValue = $this->preGetValue("shippingGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shippingGross;
	return $data;
}

/**
* Set shippingGross - Shipping Gross
* @param int $shippingGross
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setShippingGross ($shippingGross) {
	$this->shippingGross = $shippingGross;
	return $this;
}

/**
* Get shippingTaxRate - Shipping Tax Rate
* @return int
*/
public function getShippingTaxRate () {
	$preValue = $this->preGetValue("shippingTaxRate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shippingTaxRate;
	return $data;
}

/**
* Set shippingTaxRate - Shipping Tax Rate
* @param int $shippingTaxRate
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setShippingTaxRate ($shippingTaxRate) {
	$this->shippingTaxRate = $shippingTaxRate;
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
* @return \Pimcore\Model\DataObject\CoreShopCart
*/
public function setTaxes ($taxes) {
	$this->taxes = $this->getClass()->getFieldDefinition("taxes")->preSetData($this, $taxes);
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
  'customer' => 
  array (
    'type' => 'href',
  ),
  'shippingAddress' => 
  array (
    'type' => 'href',
  ),
  'invoiceAddress' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'taxes',
);

}

