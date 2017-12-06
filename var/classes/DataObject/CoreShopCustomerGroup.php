<?php 

/** 
* Generated at: 2017-10-19T10:40:45+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- name [input]
- shops [coreShopStoreMultiselect]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopCustomerGroup\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomerGroup\Listing getByShops ($value, $limit = 0) 
*/

class CoreShopCustomerGroup extends \CoreShop\Component\Core\Model\CustomerGroup {

public $o_classId = 27;
public $o_className = "CoreShopCustomerGroup";
public $name;
public $shops;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopCustomerGroup
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
* @return \Pimcore\Model\DataObject\CoreShopCustomerGroup
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get shops - Shops
* @return array
*/
public function getShops () {
	$preValue = $this->preGetValue("shops"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("shops")->preGetData($this);
	return $data;
}

/**
* Set shops - Shops
* @param array $shops
* @return \Pimcore\Model\DataObject\CoreShopCustomerGroup
*/
public function setShops ($shops) {
	$this->shops = $shops;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

