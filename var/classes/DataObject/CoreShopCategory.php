<?php 

/** 
* Generated at: 2017-10-19T10:40:45+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- localizedfields [localizedfields]
-- name [input]
- filter [coreShopFilter]
- stores [coreShopStoreMultiselect]
- parentCategory [href]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method \Pimcore\Model\DataObject\CoreShopCategory\Listing getByLocalizedfields ($field, $value, $locale = null, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCategory\Listing getByFilter ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCategory\Listing getByStores ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCategory\Listing getByParentCategory ($value, $limit = 0) 
*/

class CoreShopCategory extends \CoreShop\Component\Core\Model\Category {

public $o_classId = 29;
public $o_className = "CoreShopCategory";
public $localizedfields;
public $filter;
public $stores;
public $parentCategory;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopCategory
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
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield $localizedfields
* @return \Pimcore\Model\DataObject\CoreShopCategory
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\CoreShopCategory
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Get filter - Filter
* @return CoreShop\Component\Index\Model\Filter
*/
public function getFilter () {
	$preValue = $this->preGetValue("filter"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("filter")->preGetData($this);
	return $data;
}

/**
* Set filter - Filter
* @param CoreShop\Component\Index\Model\Filter $filter
* @return \Pimcore\Model\DataObject\CoreShopCategory
*/
public function setFilter ($filter) {
	$this->filter = $this->getClass()->getFieldDefinition("filter")->preSetData($this, $filter);
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
* @return \Pimcore\Model\DataObject\CoreShopCategory
*/
public function setStores ($stores) {
	$this->stores = $stores;
	return $this;
}

/**
* Get parentCategory - Parent Category
* @return \Pimcore\Model\DataObject\CoreShopCategory
*/
public function getParentCategory () {
	$preValue = $this->preGetValue("parentCategory"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("parentCategory")->preGetData($this);
	return $data;
}

/**
* Set parentCategory - Parent Category
* @param \Pimcore\Model\DataObject\CoreShopCategory $parentCategory
* @return \Pimcore\Model\DataObject\CoreShopCategory
*/
public function setParentCategory ($parentCategory) {
	$this->parentCategory = $this->getClass()->getFieldDefinition("parentCategory")->preSetData($this, $parentCategory);
	return $this;
}

protected static $_relationFields = array (
  'parentCategory' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'parentCategory',
);

}

