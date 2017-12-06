<?php 

/** 
* Generated at: 2017-10-19T10:40:46+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- name [input]
- image [image]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopManufacturer\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopManufacturer\Listing getByImage ($value, $limit = 0) 
*/

class CoreShopManufacturer extends Concrete {

public $o_classId = 31;
public $o_className = "CoreShopManufacturer";
public $name;
public $image;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopManufacturer
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
* @return \Pimcore\Model\DataObject\CoreShopManufacturer
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage () {
	$preValue = $this->preGetValue("image"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->image;
	return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image $image
* @return \Pimcore\Model\DataObject\CoreShopManufacturer
*/
public function setImage ($image) {
	$this->image = $image;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

