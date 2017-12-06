<?php 

/** 
* Generated at: 2017-10-19T10:40:45+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- firstname [firstname]
- lastname [lastname]
- email [email]
- password [password]
- newsletterActive [newsletterActive]
- newsletterConfirmed [newsletterConfirmed]
- isGuest [checkbox]
- gender [gender]
- passwordResetHash [input]
- addresses [multihref]
- customerGroups [multihref]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByFirstname ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByLastname ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByEmail ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByPassword ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByNewsletterActive ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByNewsletterConfirmed ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByIsGuest ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByGender ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByPasswordResetHash ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByAddresses ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CoreShopCustomer\Listing getByCustomerGroups ($value, $limit = 0) 
*/

class CoreShopCustomer extends \CoreShop\Component\Core\Model\Customer {

public $o_classId = 28;
public $o_className = "CoreShopCustomer";
public $firstname;
public $lastname;
public $email;
public $password;
public $newsletterActive;
public $newsletterConfirmed;
public $isGuest;
public $gender;
public $passwordResetHash;
public $addresses;
public $customerGroups;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CoreShopCustomer
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
* @return \Pimcore\Model\DataObject\CoreShopCustomer
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
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setLastname ($lastname) {
	$this->lastname = $lastname;
	return $this;
}

/**
* Get email - Email
* @return string
*/
public function getEmail () {
	$preValue = $this->preGetValue("email"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->email;
	return $data;
}

/**
* Set email - Email
* @param string $email
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setEmail ($email) {
	$this->email = $email;
	return $this;
}

/**
* Get password - Password
* @return string
*/
public function getPassword () {
	$preValue = $this->preGetValue("password"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->password;
	return $data;
}

/**
* Set password - Password
* @param string $password
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setPassword ($password) {
	$this->password = $password;
	return $this;
}

/**
* Get newsletterActive - Newsletter Active
* @return boolean
*/
public function getNewsletterActive () {
	$preValue = $this->preGetValue("newsletterActive"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->newsletterActive;
	return $data;
}

/**
* Set newsletterActive - Newsletter Active
* @param boolean $newsletterActive
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setNewsletterActive ($newsletterActive) {
	$this->newsletterActive = $newsletterActive;
	return $this;
}

/**
* Get newsletterConfirmed - Newsletter Confirmed
* @return boolean
*/
public function getNewsletterConfirmed () {
	$preValue = $this->preGetValue("newsletterConfirmed"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->newsletterConfirmed;
	return $data;
}

/**
* Set newsletterConfirmed - Newsletter Confirmed
* @param boolean $newsletterConfirmed
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setNewsletterConfirmed ($newsletterConfirmed) {
	$this->newsletterConfirmed = $newsletterConfirmed;
	return $this;
}

/**
* Get isGuest - Is Guest
* @return boolean
*/
public function getIsGuest () {
	$preValue = $this->preGetValue("isGuest"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->isGuest;
	return $data;
}

/**
* Set isGuest - Is Guest
* @param boolean $isGuest
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setIsGuest ($isGuest) {
	$this->isGuest = $isGuest;
	return $this;
}

/**
* Get gender - Gender
* @return string
*/
public function getGender () {
	$preValue = $this->preGetValue("gender"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->gender;
	return $data;
}

/**
* Set gender - Gender
* @param string $gender
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setGender ($gender) {
	$this->gender = $gender;
	return $this;
}

/**
* Get passwordResetHash - Reset Password Hash
* @return string
*/
public function getPasswordResetHash () {
	$preValue = $this->preGetValue("passwordResetHash"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->passwordResetHash;
	return $data;
}

/**
* Set passwordResetHash - Reset Password Hash
* @param string $passwordResetHash
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setPasswordResetHash ($passwordResetHash) {
	$this->passwordResetHash = $passwordResetHash;
	return $this;
}

/**
* Get addresses - Addresses
* @return \Pimcore\Model\DataObject\CoreShopAddress[]
*/
public function getAddresses () {
	$preValue = $this->preGetValue("addresses"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("addresses")->preGetData($this);
	return $data;
}

/**
* Set addresses - Addresses
* @param \Pimcore\Model\DataObject\CoreShopAddress[] $addresses
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setAddresses ($addresses) {
	$this->addresses = $this->getClass()->getFieldDefinition("addresses")->preSetData($this, $addresses);
	return $this;
}

/**
* Get customerGroups - Customer Groups
* @return \Pimcore\Model\DataObject\CoreShopCustomerGroup[]
*/
public function getCustomerGroups () {
	$preValue = $this->preGetValue("customerGroups"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("customerGroups")->preGetData($this);
	return $data;
}

/**
* Set customerGroups - Customer Groups
* @param \Pimcore\Model\DataObject\CoreShopCustomerGroup[] $customerGroups
* @return \Pimcore\Model\DataObject\CoreShopCustomer
*/
public function setCustomerGroups ($customerGroups) {
	$this->customerGroups = $this->getClass()->getFieldDefinition("customerGroups")->preSetData($this, $customerGroups);
	return $this;
}

protected static $_relationFields = array (
  'addresses' => 
  array (
    'type' => 'multihref',
  ),
  'customerGroups' => 
  array (
    'type' => 'multihref',
  ),
);

public $lazyLoadedFields = array (
  0 => 'customerGroups',
);

}

