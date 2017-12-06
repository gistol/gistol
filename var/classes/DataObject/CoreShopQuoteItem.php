<?php 

/** 
* Generated at: 2017-10-19T10:40:45+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- isGiftItem [checkbox]
- quantity [numeric]
- product [href]
- itemWeight [numeric]
- totalWeight [numeric]
- itemWholesalePrice [coreShopMoney]
- itemPriceNet [coreShopMoney]
- itemPriceGross [coreShopMoney]
- itemRetailPriceNet [coreShopMoney]
- itemRetailPriceGross [coreShopMoney]
- totalNet [coreShopMoney]
- totalGross [coreShopMoney]
- itemTax [coreShopMoney]
- totalTax [coreShopMoney]
- taxes [fieldcollections]
- baseItemPriceNet [coreShopMoney]
- baseItemPriceGross [coreShopMoney]
- baseItemRetailPriceNet [coreShopMoney]
- baseItemRetailPriceGross [coreShopMoney]
- baseTotalNet [coreShopMoney]
- baseTotalGross [coreShopMoney]
- baseItemTax [coreShopMoney]
- baseTotalTax [coreShopMoney]
- baseTaxes [fieldcollections]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByIsGiftItem ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByQuantity ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByProduct ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByItemWeight ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByTotalWeight ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByItemWholesalePrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByItemPriceNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByItemPriceGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByItemRetailPriceNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByItemRetailPriceGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByItemTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByTotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByTaxes ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseItemPriceNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseItemPriceGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseItemRetailPriceNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseItemRetailPriceGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseTotalNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseTotalGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseItemTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseTotalTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopQuoteItem\Listing getByBaseTaxes ($value, $limit = 0) 
*/

class CoreShopQuoteItem extends \CoreShop\Component\Order\Model\QuoteItem {

public $o_classId = 26;
public $o_className = "CoreShopQuoteItem";
public $isGiftItem;
public $quantity;
public $product;
public $itemWeight;
public $totalWeight;
public $itemWholesalePrice;
public $itemPriceNet;
public $itemPriceGross;
public $itemRetailPriceNet;
public $itemRetailPriceGross;
public $totalNet;
public $totalGross;
public $itemTax;
public $totalTax;
public $taxes;
public $baseItemPriceNet;
public $baseItemPriceGross;
public $baseItemRetailPriceNet;
public $baseItemRetailPriceGross;
public $baseTotalNet;
public $baseTotalGross;
public $baseItemTax;
public $baseTotalTax;
public $baseTaxes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get isGiftItem - Is Gift Item
* @return boolean
*/
public function getIsGiftItem () {
	$preValue = $this->preGetValue("isGiftItem"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->isGiftItem;
	return $data;
}

/**
* Set isGiftItem - Is Gift Item
* @param boolean $isGiftItem
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setIsGiftItem ($isGiftItem) {
	$this->isGiftItem = $isGiftItem;
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setQuantity ($quantity) {
	$this->quantity = $quantity;
	return $this;
}

/**
* Get product - Product
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function getProduct () {
	$preValue = $this->preGetValue("product"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("product")->preGetData($this);
	return $data;
}

/**
* Set product - Product
* @param \Pimcore\Model\DataObject\CoreShopProduct $product
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setProduct ($product) {
	$this->product = $this->getClass()->getFieldDefinition("product")->preSetData($this, $product);
	return $this;
}

/**
* Get itemWeight - Item Weight
* @return float
*/
public function getItemWeight () {
	$preValue = $this->preGetValue("itemWeight"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->itemWeight;
	return $data;
}

/**
* Set itemWeight - Item Weight
* @param float $itemWeight
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setItemWeight ($itemWeight) {
	$this->itemWeight = $itemWeight;
	return $this;
}

/**
* Get totalWeight - Total Weight
* @return float
*/
public function getTotalWeight () {
	$preValue = $this->preGetValue("totalWeight"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalWeight;
	return $data;
}

/**
* Set totalWeight - Total Weight
* @param float $totalWeight
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setTotalWeight ($totalWeight) {
	$this->totalWeight = $totalWeight;
	return $this;
}

/**
* Get itemWholesalePrice - Item Wholesale Price
* @return int
*/
public function getItemWholesalePrice () {
	$preValue = $this->preGetValue("itemWholesalePrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->itemWholesalePrice;
	return $data;
}

/**
* Set itemWholesalePrice - Item Wholesale Price
* @param int $itemWholesalePrice
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setItemWholesalePrice ($itemWholesalePrice) {
	$this->itemWholesalePrice = $itemWholesalePrice;
	return $this;
}

/**
* Get itemPriceNet - Item Price Net
* @return int
*/
public function getItemPriceNet () {
	$preValue = $this->preGetValue("itemPriceNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->itemPriceNet;
	return $data;
}

/**
* Set itemPriceNet - Item Price Net
* @param int $itemPriceNet
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setItemPriceNet ($itemPriceNet) {
	$this->itemPriceNet = $itemPriceNet;
	return $this;
}

/**
* Get itemPriceGross - Item Price Gross
* @return int
*/
public function getItemPriceGross () {
	$preValue = $this->preGetValue("itemPriceGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->itemPriceGross;
	return $data;
}

/**
* Set itemPriceGross - Item Price Gross
* @param int $itemPriceGross
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setItemPriceGross ($itemPriceGross) {
	$this->itemPriceGross = $itemPriceGross;
	return $this;
}

/**
* Get itemRetailPriceNet - Item Retail Price Net
* @return int
*/
public function getItemRetailPriceNet () {
	$preValue = $this->preGetValue("itemRetailPriceNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->itemRetailPriceNet;
	return $data;
}

/**
* Set itemRetailPriceNet - Item Retail Price Net
* @param int $itemRetailPriceNet
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setItemRetailPriceNet ($itemRetailPriceNet) {
	$this->itemRetailPriceNet = $itemRetailPriceNet;
	return $this;
}

/**
* Get itemRetailPriceGross - Item Retail Price Gross
* @return int
*/
public function getItemRetailPriceGross () {
	$preValue = $this->preGetValue("itemRetailPriceGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->itemRetailPriceGross;
	return $data;
}

/**
* Set itemRetailPriceGross - Item Retail Price Gross
* @param int $itemRetailPriceGross
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setItemRetailPriceGross ($itemRetailPriceGross) {
	$this->itemRetailPriceGross = $itemRetailPriceGross;
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setTotalGross ($totalGross) {
	$this->totalGross = $totalGross;
	return $this;
}

/**
* Get itemTax - Item Tax
* @return int
*/
public function getItemTax () {
	$preValue = $this->preGetValue("itemTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->itemTax;
	return $data;
}

/**
* Set itemTax - Item Tax
* @param int $itemTax
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setItemTax ($itemTax) {
	$this->itemTax = $itemTax;
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setTaxes ($taxes) {
	$this->taxes = $this->getClass()->getFieldDefinition("taxes")->preSetData($this, $taxes);
	return $this;
}

/**
* Get baseItemPriceNet - Base Item Price Net
* @return int
*/
public function getBaseItemPriceNet () {
	$preValue = $this->preGetValue("baseItemPriceNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseItemPriceNet;
	return $data;
}

/**
* Set baseItemPriceNet - Base Item Price Net
* @param int $baseItemPriceNet
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setBaseItemPriceNet ($baseItemPriceNet) {
	$this->baseItemPriceNet = $baseItemPriceNet;
	return $this;
}

/**
* Get baseItemPriceGross - Base Item Price Gross
* @return int
*/
public function getBaseItemPriceGross () {
	$preValue = $this->preGetValue("baseItemPriceGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseItemPriceGross;
	return $data;
}

/**
* Set baseItemPriceGross - Base Item Price Gross
* @param int $baseItemPriceGross
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setBaseItemPriceGross ($baseItemPriceGross) {
	$this->baseItemPriceGross = $baseItemPriceGross;
	return $this;
}

/**
* Get baseItemRetailPriceNet - Base Item Retail Price Net
* @return int
*/
public function getBaseItemRetailPriceNet () {
	$preValue = $this->preGetValue("baseItemRetailPriceNet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseItemRetailPriceNet;
	return $data;
}

/**
* Set baseItemRetailPriceNet - Base Item Retail Price Net
* @param int $baseItemRetailPriceNet
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setBaseItemRetailPriceNet ($baseItemRetailPriceNet) {
	$this->baseItemRetailPriceNet = $baseItemRetailPriceNet;
	return $this;
}

/**
* Get baseItemRetailPriceGross - Base Item Retail Price Gross
* @return int
*/
public function getBaseItemRetailPriceGross () {
	$preValue = $this->preGetValue("baseItemRetailPriceGross"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseItemRetailPriceGross;
	return $data;
}

/**
* Set baseItemRetailPriceGross - Base Item Retail Price Gross
* @param int $baseItemRetailPriceGross
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setBaseItemRetailPriceGross ($baseItemRetailPriceGross) {
	$this->baseItemRetailPriceGross = $baseItemRetailPriceGross;
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setBaseTotalGross ($baseTotalGross) {
	$this->baseTotalGross = $baseTotalGross;
	return $this;
}

/**
* Get baseItemTax - Base Item Tax
* @return int
*/
public function getBaseItemTax () {
	$preValue = $this->preGetValue("baseItemTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->baseItemTax;
	return $data;
}

/**
* Set baseItemTax - Base Item Tax
* @param int $baseItemTax
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setBaseItemTax ($baseItemTax) {
	$this->baseItemTax = $baseItemTax;
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
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
* @return \Pimcore\Model\DataObject\CoreShopQuoteItem
*/
public function setBaseTaxes ($baseTaxes) {
	$this->baseTaxes = $this->getClass()->getFieldDefinition("baseTaxes")->preSetData($this, $baseTaxes);
	return $this;
}

protected static $_relationFields = array (
  'product' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'product',
  1 => 'taxes',
  2 => 'baseTaxes',
);

}

