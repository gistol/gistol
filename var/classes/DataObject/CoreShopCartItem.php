<?php 

/** 
* Generated at: 2017-10-19T10:40:39+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- product [href]
- quantity [numeric]
- isGiftItem [checkbox]
- itemPriceNet [coreShopMoney]
- itemPriceGross [coreShopMoney]
- itemRetailPriceNet [coreShopMoney]
- itemRetailPriceGross [coreShopMoney]
- itemWholesalePrice [coreShopMoney]
- itemTax [coreShopMoney]
- taxes [fieldcollections]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByProduct ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByQuantity ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByIsGiftItem ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByItemPriceNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByItemPriceGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByItemRetailPriceNet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByItemRetailPriceGross ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByItemWholesalePrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByItemTax ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCartItem\Listing getByTaxes ($value, $limit = 0) 
*/

class CoreShopCartItem extends \CoreShop\Component\Core\Model\CartItem {

public $o_classId = 18;
public $o_className = "CoreShopCartItem";
public $product;
public $quantity;
public $isGiftItem;
public $itemPriceNet;
public $itemPriceGross;
public $itemRetailPriceNet;
public $itemRetailPriceGross;
public $itemWholesalePrice;
public $itemTax;
public $taxes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
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
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setProduct ($product) {
	$this->product = $this->getClass()->getFieldDefinition("product")->preSetData($this, $product);
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
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setQuantity ($quantity) {
	$this->quantity = $quantity;
	return $this;
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
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setIsGiftItem ($isGiftItem) {
	$this->isGiftItem = $isGiftItem;
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
* @return \Pimcore\Model\DataObject\CoreShopCartItem
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
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setItemPriceGross ($itemPriceGross) {
	$this->itemPriceGross = $itemPriceGross;
	return $this;
}

/**
* Get itemRetailPriceNet - Retail Price Net
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
* Set itemRetailPriceNet - Retail Price Net
* @param int $itemRetailPriceNet
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setItemRetailPriceNet ($itemRetailPriceNet) {
	$this->itemRetailPriceNet = $itemRetailPriceNet;
	return $this;
}

/**
* Get itemRetailPriceGross - Retail Price Gross
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
* Set itemRetailPriceGross - Retail Price Gross
* @param int $itemRetailPriceGross
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setItemRetailPriceGross ($itemRetailPriceGross) {
	$this->itemRetailPriceGross = $itemRetailPriceGross;
	return $this;
}

/**
* Get itemWholesalePrice - Wholesale Price
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
* Set itemWholesalePrice - Wholesale Price
* @param int $itemWholesalePrice
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setItemWholesalePrice ($itemWholesalePrice) {
	$this->itemWholesalePrice = $itemWholesalePrice;
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
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setItemTax ($itemTax) {
	$this->itemTax = $itemTax;
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
* @return \Pimcore\Model\DataObject\CoreShopCartItem
*/
public function setTaxes ($taxes) {
	$this->taxes = $this->getClass()->getFieldDefinition("taxes")->preSetData($this, $taxes);
	return $this;
}

protected static $_relationFields = array (
  'product' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'taxes',
);

}

