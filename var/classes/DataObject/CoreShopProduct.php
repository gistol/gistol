<?php 

/** 
* Generated at: 2017-10-19T10:40:46+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- localizedfields [localizedfields]
-- name [input]
-- shortDescription [textarea]
-- description [wysiwyg]
- sku [input]
- ean [input]
- active [checkbox]
- manufacturer [href]
- stores [coreShopStoreMultiselect]
- categories [multihref]
- images [multihref]
- quantity [numeric]
- isAvailableWhenOutOfStock [checkbox]
- storePrice [coreShopStorePrice]
- wholesalePrice [coreShopMoney]
- taxRule [coreShopTaxRuleGroup]
- specificPriceRules [coreShopProductSpecificPriceRules]
- weight [numeric]
- height [numeric]
- width [numeric]
- depth [numeric]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method \Pimcore\Model\DataObject\CoreShopProduct\Listing getByLocalizedfields ($field, $value, $locale = null, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getBySku ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByEan ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByActive ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByManufacturer ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByStores ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByCategories ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByImages ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByQuantity ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByIsAvailableWhenOutOfStock ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByStorePrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByWholesalePrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByTaxRule ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getBySpecificPriceRules ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByWeight ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByHeight ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByWidth ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopProduct\Listing getByDepth ($value, $limit = 0) 
*/

class CoreShopProduct extends \CoreShop\Component\Core\Model\Product {

public $o_classId = 30;
public $o_className = "CoreShopProduct";
public $localizedfields;
public $sku;
public $ean;
public $active;
public $manufacturer;
public $stores;
public $categories;
public $images;
public $quantity;
public $isAvailableWhenOutOfStock;
public $storePrice;
public $wholesalePrice;
public $taxRule;
public $specificPriceRules;
public $weight;
public $height;
public $width;
public $depth;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - 
* @return \Pimcore\Model\DataObject\Localizedfield
*/
public function getLocalizedfields () {
	$preValue = $this->preGetValue("localizedfields"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);
	return $data;
}

/**
* Get name - Name
* @return string
*/
public function getName ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("name", $language);
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	 return $data;
}

/**
* Get shortDescription - Short Description
* @return string
*/
public function getShortDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("shortDescription", $language);
	$preValue = $this->preGetValue("shortDescription"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	 return $data;
}

/**
* Get description - Description
* @return string
*/
public function getDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("description", $language);
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	 return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield $localizedfields
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Set shortDescription - Short Description
* @param string $shortDescription
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setShortDescription ($shortDescription, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("shortDescription", $shortDescription, $language);
	return $this;
}

/**
* Set description - Description
* @param string $description
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setDescription ($description, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("description", $description, $language);
	return $this;
}

/**
* Get sku - SKU
* @return string
*/
public function getSku () {
	$preValue = $this->preGetValue("sku"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->sku;
	return $data;
}

/**
* Set sku - SKU
* @param string $sku
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setSku ($sku) {
	$this->sku = $sku;
	return $this;
}

/**
* Get ean - EAN
* @return string
*/
public function getEan () {
	$preValue = $this->preGetValue("ean"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ean;
	return $data;
}

/**
* Set ean - EAN
* @param string $ean
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setEan ($ean) {
	$this->ean = $ean;
	return $this;
}

/**
* Get active - Active
* @return boolean
*/
public function getActive () {
	$preValue = $this->preGetValue("active"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->active;
	return $data;
}

/**
* Set active - Active
* @param boolean $active
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setActive ($active) {
	$this->active = $active;
	return $this;
}

/**
* Get manufacturer - Manufacturer
* @return \Pimcore\Model\DataObject\AbstractObject
*/
public function getManufacturer () {
	$preValue = $this->preGetValue("manufacturer"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("manufacturer")->preGetData($this);
	return $data;
}

/**
* Set manufacturer - Manufacturer
* @param \Pimcore\Model\DataObject\AbstractObject $manufacturer
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setManufacturer ($manufacturer) {
	$this->manufacturer = $this->getClass()->getFieldDefinition("manufacturer")->preSetData($this, $manufacturer);
	return $this;
}

/**
* Get stores - Stores
* @return array
*/
public function getStores () {
	$preValue = $this->preGetValue("stores"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("stores")->preGetData($this);
	return $data;
}

/**
* Set stores - Stores
* @param array $stores
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setStores ($stores) {
	$this->stores = $stores;
	return $this;
}

/**
* Get categories - Categories
* @return \Pimcore\Model\DataObject\CoreShopCategory[]
*/
public function getCategories () {
	$preValue = $this->preGetValue("categories"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("categories")->preGetData($this);
	return $data;
}

/**
* Set categories - Categories
* @param \Pimcore\Model\DataObject\CoreShopCategory[] $categories
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setCategories ($categories) {
	$this->categories = $this->getClass()->getFieldDefinition("categories")->preSetData($this, $categories);
	return $this;
}

/**
* Get images - Images
* @return \Pimcore\Model\Asset\image[]
*/
public function getImages () {
	$preValue = $this->preGetValue("images"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("images")->preGetData($this);
	return $data;
}

/**
* Set images - Images
* @param \Pimcore\Model\Asset\image[] $images
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setImages ($images) {
	$this->images = $this->getClass()->getFieldDefinition("images")->preSetData($this, $images);
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
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setQuantity ($quantity) {
	$this->quantity = $quantity;
	return $this;
}

/**
* Get isAvailableWhenOutOfStock - Is Available When Out of Stock
* @return boolean
*/
public function getIsAvailableWhenOutOfStock () {
	$preValue = $this->preGetValue("isAvailableWhenOutOfStock"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->isAvailableWhenOutOfStock;
	return $data;
}

/**
* Set isAvailableWhenOutOfStock - Is Available When Out of Stock
* @param boolean $isAvailableWhenOutOfStock
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setIsAvailableWhenOutOfStock ($isAvailableWhenOutOfStock) {
	$this->isAvailableWhenOutOfStock = $isAvailableWhenOutOfStock;
	return $this;
}

/**
* Get storePrice - Store Price
* @return array
*/
public function getStorePrice (\CoreShop\Component\Store\Model\StoreInterface $store = null) {
	if (is_null($store)) {
		return $this->storePrice;
	}
	$data = $this->storePrice;
	if (array_key_exists($store->getId(), $data) && is_numeric($data[$store->getId()])) {
		return intval($data[$store->getId()]);
	}
	 return null;
}

/**
* Get storePrice - Store Price
* @return array
*/
public function setStorePrice ($storePrice, \CoreShop\Component\Store\Model\StoreInterface $store = null) {
	if (is_array( $storePrice)) {
		$this->storePrice = $storePrice;
	}
	else {
		if (is_null($store)) {
			$store = \Pimcore::getContainer()->get('coreshop.context.store')->getStore();
		}
		$this->storePrice[$store->getId()] = $storePrice;
	}
	return $this;
}

/**
* Get wholesalePrice - Wholesale Price
* @return int
*/
public function getWholesalePrice () {
	$preValue = $this->preGetValue("wholesalePrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wholesalePrice;
	return $data;
}

/**
* Set wholesalePrice - Wholesale Price
* @param int $wholesalePrice
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setWholesalePrice ($wholesalePrice) {
	$this->wholesalePrice = $wholesalePrice;
	return $this;
}

/**
* Get taxRule - Tax Rule
* @return CoreShop\Component\Taxation\Model\TaxRuleGroupInterface
*/
public function getTaxRule () {
	$preValue = $this->preGetValue("taxRule"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("taxRule")->preGetData($this);
	return $data;
}

/**
* Set taxRule - Tax Rule
* @param CoreShop\Component\Taxation\Model\TaxRuleGroupInterface $taxRule
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setTaxRule ($taxRule) {
	$this->taxRule = $this->getClass()->getFieldDefinition("taxRule")->preSetData($this, $taxRule);
	return $this;
}

/**
* Get specificPriceRules - Specific Price Rules
* @return 
*/
public function getSpecificPriceRules () {
	$preValue = $this->preGetValue("specificPriceRules"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("specificPriceRules")->preGetData($this);
	return $data;
}

/**
* Set specificPriceRules - Specific Price Rules
* @param  $specificPriceRules
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setSpecificPriceRules ($specificPriceRules) {
	$this->specificPriceRules = $specificPriceRules;
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
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Get height - Height
* @return float
*/
public function getHeight () {
	$preValue = $this->preGetValue("height"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->height;
	return $data;
}

/**
* Set height - Height
* @param float $height
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setHeight ($height) {
	$this->height = $height;
	return $this;
}

/**
* Get width - Width
* @return float
*/
public function getWidth () {
	$preValue = $this->preGetValue("width"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->width;
	return $data;
}

/**
* Set width - Width
* @param float $width
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setWidth ($width) {
	$this->width = $width;
	return $this;
}

/**
* Get depth - Depth
* @return float
*/
public function getDepth () {
	$preValue = $this->preGetValue("depth"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->depth;
	return $data;
}

/**
* Set depth - Depth
* @param float $depth
* @return \Pimcore\Model\DataObject\CoreShopProduct
*/
public function setDepth ($depth) {
	$this->depth = $depth;
	return $this;
}

protected static $_relationFields = array (
  'manufacturer' => 
  array (
    'type' => 'href',
  ),
  'categories' => 
  array (
    'type' => 'multihref',
  ),
  'images' => 
  array (
    'type' => 'multihref',
  ),
);

public $lazyLoadedFields = array (
  0 => 'manufacturer',
  1 => 'images',
);

}

