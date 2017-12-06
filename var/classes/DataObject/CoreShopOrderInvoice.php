<?php 

/** 
* Generated at: 2017-10-19T10:40:44+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- order [href]
- invoiceDate [date]
- invoiceNumber [input]
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
- discountTax [coreShopMoney]
- paymentFeeNet [coreShopMoney]
- paymentFeeGross [coreShopMoney]
- paymentFeeTax [coreShopMoney]
- paymentFeeTaxRate [numeric]
- taxes [fieldcollections]
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
- baseDiscountTax [coreShopMoney]
- basePaymentFeeNet [coreShopMoney]
- basePaymentFeeGross [coreShopMoney]
- basePaymentFeeTax [coreShopMoney]
- baseTaxes [fieldcollections]
- items [multihref]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByOrder ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByInvoiceDate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByInvoiceNumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByTotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getBySubtotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getBySubtotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getBySubtotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByShippingNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByShippingGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByShippingTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByShippingTaxRate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByDiscountNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByDiscountGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByDiscountTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByPaymentFeeNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByPaymentFeeGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByPaymentFeeTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByPaymentFeeTaxRate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByTaxes ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseTotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseSubtotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseSubtotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseSubtotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseShippingNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseShippingGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseShippingTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseDiscountNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseDiscountGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseDiscountTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBasePaymentFeeNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBasePaymentFeeGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBasePaymentFeeTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByBaseTaxes ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopOrderInvoice\Listing getByItems ($value, $limit = 0) 
*/

class CoreShopOrderInvoice extends \CoreShop\Component\Order\Model\OrderInvoice {

public $o_classId = 23;
public $o_className = "CoreShopOrderInvoice";
public $order;
public $invoiceDate;
public $invoiceNumber;
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
public $discountTax;
public $paymentFeeNet;
public $paymentFeeGross;
public $paymentFeeTax;
public $paymentFeeTaxRate;
public $taxes;
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
public $baseDiscountTax;
public $basePaymentFeeNet;
public $basePaymentFeeGross;
public $basePaymentFeeTax;
public $baseTaxes;
public $items;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setOrder ($order) {
	$this->order = $this->getClass()->getFieldDefinition("order")->preSetData($this, $order);
	return $this;
}

/**
* Get invoiceDate - Invoice Date
* @return \Carbon\Carbon
*/
public function getInvoiceDate () {
	$preValue = $this->preGetValue("invoiceDate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->invoiceDate;
	return $data;
}

/**
* Set invoiceDate - Invoice Date
* @param \Carbon\Carbon $invoiceDate
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setInvoiceDate ($invoiceDate) {
	$this->invoiceDate = $invoiceDate;
	return $this;
}

/**
* Get invoiceNumber - Invoice Number
* @return string
*/
public function getInvoiceNumber () {
	$preValue = $this->preGetValue("invoiceNumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->invoiceNumber;
	return $data;
}

/**
* Set invoiceNumber - Invoice Number
* @param string $invoiceNumber
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setInvoiceNumber ($invoiceNumber) {
	$this->invoiceNumber = $invoiceNumber;
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setSubtotalNet ($subtotalNet) {
	$this->subtotalNet = $subtotalNet;
	return $this;
}

/**
* Get subtotalGross - Subtotal Gross
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
* Set subtotalGross - Subtotal Gross
* @param int $subtotalGross
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setDiscountGross ($discountGross) {
	$this->discountGross = $discountGross;
	return $this;
}

/**
* Get discountTax - Discount Tax
* @return int
*/
public function getDiscountTax () {
	$preValue = $this->preGetValue("discountTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discountTax;
	return $data;
}

/**
* Set discountTax - Discount Tax
* @param int $discountTax
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setDiscountTax ($discountTax) {
	$this->discountTax = $discountTax;
	return $this;
}

/**
* Get paymentFeeNet - Payment Net
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
* Set paymentFeeNet - Payment Net
* @param int $paymentFeeNet
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setPaymentFeeNet ($paymentFeeNet) {
	$this->paymentFeeNet = $paymentFeeNet;
	return $this;
}

/**
* Get paymentFeeGross - Payment Gross
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
* Set paymentFeeGross - Payment Gross
* @param int $paymentFeeGross
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setPaymentFeeGross ($paymentFeeGross) {
	$this->paymentFeeGross = $paymentFeeGross;
	return $this;
}

/**
* Get paymentFeeTax - Payment Tax
* @return int
*/
public function getPaymentFeeTax () {
	$preValue = $this->preGetValue("paymentFeeTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->paymentFeeTax;
	return $data;
}

/**
* Set paymentFeeTax - Payment Tax
* @param int $paymentFeeTax
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setPaymentFeeTax ($paymentFeeTax) {
	$this->paymentFeeTax = $paymentFeeTax;
	return $this;
}

/**
* Get paymentFeeTaxRate - Payment Tax Rate
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
* Set paymentFeeTaxRate - Payment Tax Rate
* @param float $paymentFeeTaxRate
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setBaseShippingTax ($baseShippingTax) {
	$this->baseShippingTax = $baseShippingTax;
	return $this;
}

/**
* Get baseDiscountNet - Discount Net
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
* Set baseDiscountNet - Discount Net
* @param int $baseDiscountNet
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setBaseDiscountNet ($baseDiscountNet) {
	$this->baseDiscountNet = $baseDiscountNet;
	return $this;
}

/**
* Get baseDiscountGross - Discount Gross
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
* Set baseDiscountGross - Discount Gross
* @param int $baseDiscountGross
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setBaseDiscountGross ($baseDiscountGross) {
	$this->baseDiscountGross = $baseDiscountGross;
	return $this;
}

/**
* Get baseDiscountTax - Base Discount Tax
* @return int
*/
public function getBaseDiscountTax () {
	$preValue = $this->preGetValue("baseDiscountTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseDiscountTax;
	return $data;
}

/**
* Set baseDiscountTax - Base Discount Tax
* @param int $baseDiscountTax
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setBaseDiscountTax ($baseDiscountTax) {
	$this->baseDiscountTax = $baseDiscountTax;
	return $this;
}

/**
* Get basePaymentFeeNet - Payment Net
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
* Set basePaymentFeeNet - Payment Net
* @param int $basePaymentFeeNet
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setBasePaymentFeeNet ($basePaymentFeeNet) {
	$this->basePaymentFeeNet = $basePaymentFeeNet;
	return $this;
}

/**
* Get basePaymentFeeGross - Payment Gross
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
* Set basePaymentFeeGross - Payment Gross
* @param int $basePaymentFeeGross
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setBasePaymentFeeGross ($basePaymentFeeGross) {
	$this->basePaymentFeeGross = $basePaymentFeeGross;
	return $this;
}

/**
* Get basePaymentFeeTax - Base Payment Tax
* @return int
*/
public function getBasePaymentFeeTax () {
	$preValue = $this->preGetValue("basePaymentFeeTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->basePaymentFeeTax;
	return $data;
}

/**
* Set basePaymentFeeTax - Base Payment Tax
* @param int $basePaymentFeeTax
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setBasePaymentFeeTax ($basePaymentFeeTax) {
	$this->basePaymentFeeTax = $basePaymentFeeTax;
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
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
*/
public function setBaseTaxes ($baseTaxes) {
	$this->baseTaxes = $this->getClass()->getFieldDefinition("baseTaxes")->preSetData($this, $baseTaxes);
	return $this;
}

/**
* Get items - Items
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem[]
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
* @param \Pimcore\Model\DataObject\CoreShopOrderInvoiceItem[] $items
* @return \Pimcore\Model\DataObject\CoreShopOrderInvoice
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
  1 => 'taxes',
  2 => 'baseTaxes',
  3 => 'items',
);

}

