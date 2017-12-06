<?php 

/** 
* Generated at: 2017-10-19T10:40:47+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- firstname [input]
- lastname [input]
- company [input]
- street [input]
- number [input]
- postcode [input]
- city [input]
- country [coreShopCountry]
- state [coreShopState]
- phoneNumber [input]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByFirstname ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByLastname ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByCompany ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByStreet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByNumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByPostcode ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByCity ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByCountry ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByState ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopAddress\Listing getByPhoneNumber ($value, $limit = 0) 
*/

class CoreShopAddress extends \CoreShop\Component\Address\Model\Address {

public $o_classId = 32;
public $o_className = "CoreShopAddress";
public $firstname;
public $lastname;
public $company;
public $street;
public $number;
public $postcode;
public $city;
public $country;
public $state;
public $phoneNumber;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get firstname - Firstname
* @return string
*/
public function getFirstname () {
	$preValue = $this->preGetValue("firstname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->firstname;
	return $data;
}

/**
* Set firstname - Firstname
* @param string $firstname
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setFirstname ($firstname) {
	$this->firstname = $firstname;
	return $this;
}

/**
* Get lastname - Lastname
* @return string
*/
public function getLastname () {
	$preValue = $this->preGetValue("lastname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lastname;
	return $data;
}

/**
* Set lastname - Lastname
* @param string $lastname
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setLastname ($lastname) {
	$this->lastname = $lastname;
	return $this;
}

/**
* Get company - Company
* @return string
*/
public function getCompany () {
	$preValue = $this->preGetValue("company"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->company;
	return $data;
}

/**
* Set company - Company
* @param string $company
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setCompany ($company) {
	$this->company = $company;
	return $this;
}

/**
* Get street - Street
* @return string
*/
public function getStreet () {
	$preValue = $this->preGetValue("street"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->street;
	return $data;
}

/**
* Set street - Street
* @param string $street
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setStreet ($street) {
	$this->street = $street;
	return $this;
}

/**
* Get number - Number
* @return string
*/
public function getNumber () {
	$preValue = $this->preGetValue("number"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->number;
	return $data;
}

/**
* Set number - Number
* @param string $number
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setNumber ($number) {
	$this->number = $number;
	return $this;
}

/**
* Get postcode - Postcode
* @return string
*/
public function getPostcode () {
	$preValue = $this->preGetValue("postcode"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->postcode;
	return $data;
}

/**
* Set postcode - Postcode
* @param string $postcode
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setPostcode ($postcode) {
	$this->postcode = $postcode;
	return $this;
}

/**
* Get city - City
* @return string
*/
public function getCity () {
	$preValue = $this->preGetValue("city"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->city;
	return $data;
}

/**
* Set city - City
* @param string $city
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setCity ($city) {
	$this->city = $city;
	return $this;
}

/**
* Get country - Country
* @return string
*/
public function getCountry () {
	$preValue = $this->preGetValue("country"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("country")->preGetData($this);
	return $data;
}

/**
* Set country - Country
* @param string $country
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setCountry ($country) {
	$this->country = $this->getClass()->getFieldDefinition("country")->preSetData($this, $country);
	return $this;
}

/**
* Get state - State
* @return string
*/
public function getState () {
	$preValue = $this->preGetValue("state"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("state")->preGetData($this);
	return $data;
}

/**
* Set state - State
* @param string $state
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setState ($state) {
	$this->state = $this->getClass()->getFieldDefinition("state")->preSetData($this, $state);
	return $this;
}

/**
* Get phoneNumber - Phone Number
* @return string
*/
public function getPhoneNumber () {
	$preValue = $this->preGetValue("phoneNumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->phoneNumber;
	return $data;
}

/**
* Set phoneNumber - Phone Number
* @param string $phoneNumber
* @return \Pimcore\Model\DataObject\CoreShopAddress
*/
public function setPhoneNumber ($phoneNumber) {
	$this->phoneNumber = $phoneNumber;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

