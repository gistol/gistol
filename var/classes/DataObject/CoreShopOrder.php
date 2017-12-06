<?php 

/** 
* Generated at: 2017-10-19T10:40:40+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- orderNumber [input]
- orderDate [datetime]
- orderLanguage [language]
- carrier [coreShopCarrier]
- store [coreShopStore]
- paymentProvider [coreShopPaymentProvider]
- currency [coreShopCurrency]
- totalNet [coreShopMoney]
- totalGross [coreShopMoney]
- totalTax [coreShopMoney]
- subtotalNet [coreShopMoney]
- subtotalGross [coreShopMoney]
- subtotalTax [coreShopMoney]
- shippingNet [coreShopMoney]
- shippingGross [coreShopMoney]
- shippingTax [coreShopMoney]
- shippingTaxRate [numeric]
- discountNet [coreShopMoney]
- discountGross [coreShopMoney]
- paymentFeeNet [coreShopMoney]
- paymentFeeGross [coreShopMoney]
- paymentFeeTaxRate [numeric]
- taxes [fieldcollections]
- baseCurrency [coreShopCurrency]
- baseTotalNet [coreShopMoney]
- baseTotalGross [coreShopMoney]
- baseTotalTax [coreShopMoney]
- baseSubtotalNet [coreShopMoney]
- baseSubtotalGross [coreShopMoney]
- baseSubtotalTax [coreShopMoney]
- baseShippingNet [coreShopMoney]
- baseShippingGross [coreShopMoney]
- baseShippingTax [coreShopMoney]
- baseDiscountNet [coreShopMoney]
- baseDiscountGross [coreShopMoney]
- basePaymentFeeNet [coreShopMoney]
- basePaymentFeeGross [coreShopMoney]
- baseTaxes [fieldcollections]
- weight [numeric]
- priceRuleItems [fieldcollections]
- items [multihref]
- customer [href]
- shippingAddress [href]
- invoiceAddress [href]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByOrderNumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByOrderDate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByOrderLanguage ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByCarrier ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByStore ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByPaymentProvider ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByCurrency ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByTotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getBySubtotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getBySubtotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getBySubtotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByShippingNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByShippingGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByShippingTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByShippingTaxRate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByDiscountNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByDiscountGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByPaymentFeeNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByPaymentFeeGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByPaymentFeeTaxRate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByTaxes ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseCurrency ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseTotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseSubtotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseSubtotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseSubtotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseShippingNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseShippingGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseShippingTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseDiscountNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseDiscountGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBasePaymentFeeNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBasePaymentFeeGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByBaseTaxes ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByWeight ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByPriceRuleItems ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByItems ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByCustomer ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByShippingAddress ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrder\Listing getByInvoiceAddress ($value, $limit = 0) 
*/

class CoreShopOrder extends \CoreShop\Component\Core\Model\Order {

public $o_classId = 19;
public $o_className = "CoreShopOrder";
public $orderNumber;
public $orderDate;
public $orderLanguage;
public $carrier;
public $store;
public $paymentProvider;
public $currency;
public $totalNet;
public $totalGross;
public $totalTax;
public $subtotalNet;
public $subtotalGross;
public $subtotalTax;
public $shippingNet;
public $shippingGross;
public $shippingTax;
public $shippingTaxRate;
public $discountNet;
public $discountGross;
public $paymentFeeNet;
public $paymentFeeGross;
public $paymentFeeTaxRate;
public $taxes;
public $baseCurrency;
public $baseTotalNet;
public $baseTotalGross;
public $baseTotalTax;
public $baseSubtotalNet;
public $baseSubtotalGross;
public $baseSubtotalTax;
public $baseShippingNet;
public $baseShippingGross;
public $baseShippingTax;
public $baseDiscountNet;
public $baseDiscountGross;
public $basePaymentFeeNet;
public $basePaymentFeeGross;
public $baseTaxes;
public $weight;
public $priceRuleItems;
public $items;
public $customer;
public $shippingAddress;
public $invoiceAddress;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get orderNumber - Order Number
* @return string
*/
public function getOrderNumber () {
	$preValue = $this->preGetValue("orderNumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->orderNumber;
	return $data;
}

/**
* Set orderNumber - Order Number
* @param string $orderNumber
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setOrderNumber ($orderNumber) {
	$this->orderNumber = $orderNumber;
	return $this;
}

/**
* Get orderDate - Order Date
* @return \Carbon\Carbon
*/
public function getOrderDate () {
	$preValue = $this->preGetValue("orderDate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->orderDate;
	return $data;
}

/**
* Set orderDate - Order Date
* @param \Carbon\Carbon $orderDate
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setOrderDate ($orderDate) {
	$this->orderDate = $orderDate;
	return $this;
}

/**
* Get orderLanguage - Language
* @return string
*/
public function getOrderLanguage () {
	$preValue = $this->preGetValue("orderLanguage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->orderLanguage;
	return $data;
}

/**
* Set orderLanguage - Language
* @param string $orderLanguage
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setOrderLanguage ($orderLanguage) {
	$this->orderLanguage = $orderLanguage;
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setCarrier ($carrier) {
	$this->carrier = $this->getClass()->getFieldDefinition("carrier")->preSetData($this, $carrier);
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setStore ($store) {
	$this->store = $this->getClass()->getFieldDefinition("store")->preSetData($this, $store);
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setPaymentProvider ($paymentProvider) {
	$this->paymentProvider = $this->getClass()->getFieldDefinition("paymentProvider")->preSetData($this, $paymentProvider);
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setCurrency ($currency) {
	$this->currency = $this->getClass()->getFieldDefinition("currency")->preSetData($this, $currency);
	return $this;
}

/**
* Get totalNet - totalNet
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
* Set totalNet - totalNet
* @param int $totalNet
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setTotalTax ($totalTax) {
	$this->totalTax = $totalTax;
	return $this;
}

/**
* Get subtotalNet - Subtotal Net
* @return int
*/
public function getSubtotalNet () {
	$preValue = $this->preGetValue("subtotalNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->subtotalNet;
	return $data;
}

/**
* Set subtotalNet - Subtotal Net
* @param int $subtotalNet
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setSubtotalNet ($subtotalNet) {
	$this->subtotalNet = $subtotalNet;
	return $this;
}

/**
* Get subtotalGross - subtotal Gross
* @return int
*/
public function getSubtotalGross () {
	$preValue = $this->preGetValue("subtotalGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->subtotalGross;
	return $data;
}

/**
* Set subtotalGross - subtotal Gross
* @param int $subtotalGross
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setSubtotalGross ($subtotalGross) {
	$this->subtotalGross = $subtotalGross;
	return $this;
}

/**
* Get subtotalTax - Subtotal Tax
* @return int
*/
public function getSubtotalTax () {
	$preValue = $this->preGetValue("subtotalTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->subtotalTax;
	return $data;
}

/**
* Set subtotalTax - Subtotal Tax
* @param int $subtotalTax
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setSubtotalTax ($subtotalTax) {
	$this->subtotalTax = $subtotalTax;
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setShippingGross ($shippingGross) {
	$this->shippingGross = $shippingGross;
	return $this;
}

/**
* Get shippingTax - Shipping Tax
* @return int
*/
public function getShippingTax () {
	$preValue = $this->preGetValue("shippingTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shippingTax;
	return $data;
}

/**
* Set shippingTax - Shipping Tax
* @param int $shippingTax
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setShippingTax ($shippingTax) {
	$this->shippingTax = $shippingTax;
	return $this;
}

/**
* Get shippingTaxRate - Shipping Tax Rate
* @return float
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
* @param float $shippingTaxRate
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setShippingTaxRate ($shippingTaxRate) {
	$this->shippingTaxRate = $shippingTaxRate;
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setDiscountGross ($discountGross) {
	$this->discountGross = $discountGross;
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setPaymentFeeNet ($paymentFeeNet) {
	$this->paymentFeeNet = $paymentFeeNet;
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setPaymentFeeGross ($paymentFeeGross) {
	$this->paymentFeeGross = $paymentFeeGross;
	return $this;
}

/**
* Get paymentFeeTaxRate - Payment Fee Tax Rate
* @return float
*/
public function getPaymentFeeTaxRate () {
	$preValue = $this->preGetValue("paymentFeeTaxRate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->paymentFeeTaxRate;
	return $data;
}

/**
* Set paymentFeeTaxRate - Payment Fee Tax Rate
* @param float $paymentFeeTaxRate
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setPaymentFeeTaxRate ($paymentFeeTaxRate) {
	$this->paymentFeeTaxRate = $paymentFeeTaxRate;
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setTaxes ($taxes) {
	$this->taxes = $this->getClass()->getFieldDefinition("taxes")->preSetData($this, $taxes);
	return $this;
}

/**
* Get baseCurrency - Base Currency
* @return string
*/
public function getBaseCurrency () {
	$preValue = $this->preGetValue("baseCurrency"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("baseCurrency")->preGetData($this);
	return $data;
}

/**
* Set baseCurrency - Base Currency
* @param string $baseCurrency
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseCurrency ($baseCurrency) {
	$this->baseCurrency = $this->getClass()->getFieldDefinition("baseCurrency")->preSetData($this, $baseCurrency);
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseTotalTax ($baseTotalTax) {
	$this->baseTotalTax = $baseTotalTax;
	return $this;
}

/**
* Get baseSubtotalNet - Base Subtotal Net
* @return int
*/
public function getBaseSubtotalNet () {
	$preValue = $this->preGetValue("baseSubtotalNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseSubtotalNet;
	return $data;
}

/**
* Set baseSubtotalNet - Base Subtotal Net
* @param int $baseSubtotalNet
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseSubtotalNet ($baseSubtotalNet) {
	$this->baseSubtotalNet = $baseSubtotalNet;
	return $this;
}

/**
* Get baseSubtotalGross - Base Subtotal Gross
* @return int
*/
public function getBaseSubtotalGross () {
	$preValue = $this->preGetValue("baseSubtotalGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseSubtotalGross;
	return $data;
}

/**
* Set baseSubtotalGross - Base Subtotal Gross
* @param int $baseSubtotalGross
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseSubtotalGross ($baseSubtotalGross) {
	$this->baseSubtotalGross = $baseSubtotalGross;
	return $this;
}

/**
* Get baseSubtotalTax - Base Subtotal Tax
* @return int
*/
public function getBaseSubtotalTax () {
	$preValue = $this->preGetValue("baseSubtotalTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseSubtotalTax;
	return $data;
}

/**
* Set baseSubtotalTax - Base Subtotal Tax
* @param int $baseSubtotalTax
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseSubtotalTax ($baseSubtotalTax) {
	$this->baseSubtotalTax = $baseSubtotalTax;
	return $this;
}

/**
* Get baseShippingNet - Base Shipping Net
* @return int
*/
public function getBaseShippingNet () {
	$preValue = $this->preGetValue("baseShippingNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseShippingNet;
	return $data;
}

/**
* Set baseShippingNet - Base Shipping Net
* @param int $baseShippingNet
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseShippingNet ($baseShippingNet) {
	$this->baseShippingNet = $baseShippingNet;
	return $this;
}

/**
* Get baseShippingGross - Base Shipping Gross
* @return int
*/
public function getBaseShippingGross () {
	$preValue = $this->preGetValue("baseShippingGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseShippingGross;
	return $data;
}

/**
* Set baseShippingGross - Base Shipping Gross
* @param int $baseShippingGross
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseShippingGross ($baseShippingGross) {
	$this->baseShippingGross = $baseShippingGross;
	return $this;
}

/**
* Get baseShippingTax - Base Shipping Tax
* @return int
*/
public function getBaseShippingTax () {
	$preValue = $this->preGetValue("baseShippingTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseShippingTax;
	return $data;
}

/**
* Set baseShippingTax - Base Shipping Tax
* @param int $baseShippingTax
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseShippingTax ($baseShippingTax) {
	$this->baseShippingTax = $baseShippingTax;
	return $this;
}

/**
* Get baseDiscountNet - Base Discount Net
* @return int
*/
public function getBaseDiscountNet () {
	$preValue = $this->preGetValue("baseDiscountNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseDiscountNet;
	return $data;
}

/**
* Set baseDiscountNet - Base Discount Net
* @param int $baseDiscountNet
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseDiscountNet ($baseDiscountNet) {
	$this->baseDiscountNet = $baseDiscountNet;
	return $this;
}

/**
* Get baseDiscountGross - Base Discount Gross
* @return int
*/
public function getBaseDiscountGross () {
	$preValue = $this->preGetValue("baseDiscountGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseDiscountGross;
	return $data;
}

/**
* Set baseDiscountGross - Base Discount Gross
* @param int $baseDiscountGross
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseDiscountGross ($baseDiscountGross) {
	$this->baseDiscountGross = $baseDiscountGross;
	return $this;
}

/**
* Get basePaymentFeeNet - Base Payment Fee Net
* @return int
*/
public function getBasePaymentFeeNet () {
	$preValue = $this->preGetValue("basePaymentFeeNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->basePaymentFeeNet;
	return $data;
}

/**
* Set basePaymentFeeNet - Base Payment Fee Net
* @param int $basePaymentFeeNet
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBasePaymentFeeNet ($basePaymentFeeNet) {
	$this->basePaymentFeeNet = $basePaymentFeeNet;
	return $this;
}

/**
* Get basePaymentFeeGross - Base Payment Fee Gross
* @return int
*/
public function getBasePaymentFeeGross () {
	$preValue = $this->preGetValue("basePaymentFeeGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->basePaymentFeeGross;
	return $data;
}

/**
* Set basePaymentFeeGross - Base Payment Fee Gross
* @param int $basePaymentFeeGross
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBasePaymentFeeGross ($basePaymentFeeGross) {
	$this->basePaymentFeeGross = $basePaymentFeeGross;
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
* Set baseTaxes - Taxes
* @param \Pimcore\Model\DataObject\Fieldcollection $baseTaxes
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setBaseTaxes ($baseTaxes) {
	$this->baseTaxes = $this->getClass()->getFieldDefinition("baseTaxes")->preSetData($this, $baseTaxes);
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setWeight ($weight) {
	$this->weight = $weight;
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
* Set priceRuleItems - Price Rule Items
* @param \Pimcore\Model\DataObject\Fieldcollection $priceRuleItems
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setPriceRuleItems ($priceRuleItems) {
	$this->priceRuleItems = $this->getClass()->getFieldDefinition("priceRuleItems")->preSetData($this, $priceRuleItems);
	return $this;
}

/**
* Get items - Items
* @return \Pimcore\Model\DataObject\CoreShopOrderItem[]
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
* @param \Pimcore\Model\DataObject\CoreShopOrderItem[] $items
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
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
* @return \Pimcore\Model\DataObject\CoreShopOrder
*/
public function setInvoiceAddress ($invoiceAddress) {
	$this->invoiceAddress = $this->getClass()->getFieldDefinition("invoiceAddress")->preSetData($this, $invoiceAddress);
	return $this;
}

protected static $_relationFields = array (
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
  1 => 'baseTaxes',
  2 => 'priceRuleItems',
);

}

