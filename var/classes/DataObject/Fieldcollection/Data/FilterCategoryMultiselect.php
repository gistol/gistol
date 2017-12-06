<?php 

/** 
* Generated at: 2017-10-11T11:17:20+02:00
* IP: 81.18.148.142


Fields Summary: 
 - label [input]
 - preSelect [objects]
 - useAndCondition [checkbox]
 - includeParentCategories [checkbox]
 - scriptPath [input]
 - availableCategories [objects]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterCategoryMultiselect extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\CategoryFilterDefinitionType  {

public $type = "FilterCategoryMultiselect";
public $label;
public $preSelect;
public $useAndCondition;
public $includeParentCategories;
public $scriptPath;
public $availableCategories;


/**
* Get label - Label
* @return string
*/
public function getLabel () {
	$data = $this->label;
	 return $data;
}

/**
* Set label - Label
* @param string $label
* @return \Pimcore\Model\DataObject\FilterCategoryMultiselect
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get preSelect - Pre Select
* @return \Pimcore\Model\DataObject\ProductCategory[]
*/
public function getPreSelect () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("preSelect");
	$data = $fd->preGetData($container);
	 return $data;
}

/**
* Set preSelect - Pre Select
* @param \Pimcore\Model\DataObject\ProductCategory[] $preSelect
* @return \Pimcore\Model\DataObject\FilterCategoryMultiselect
*/
public function setPreSelect ($preSelect) {
	$this->preSelect = $this->getDefinition()->getFieldDefinition("preSelect")->preSetData($this, $preSelect);
	return $this;
}

/**
* Get useAndCondition - Use And Condition
* @return boolean
*/
public function getUseAndCondition () {
	$data = $this->useAndCondition;
	 return $data;
}

/**
* Set useAndCondition - Use And Condition
* @param boolean $useAndCondition
* @return \Pimcore\Model\DataObject\FilterCategoryMultiselect
*/
public function setUseAndCondition ($useAndCondition) {
	$this->useAndCondition = $useAndCondition;
	return $this;
}

/**
* Get includeParentCategories - Include SubCategories
* @return boolean
*/
public function getIncludeParentCategories () {
	$data = $this->includeParentCategories;
	 return $data;
}

/**
* Set includeParentCategories - Include SubCategories
* @param boolean $includeParentCategories
* @return \Pimcore\Model\DataObject\FilterCategoryMultiselect
*/
public function setIncludeParentCategories ($includeParentCategories) {
	$this->includeParentCategories = $includeParentCategories;
	return $this;
}

/**
* Get scriptPath - Script Path
* @return string
*/
public function getScriptPath () {
	$data = $this->scriptPath;
	 return $data;
}

/**
* Set scriptPath - Script Path
* @param string $scriptPath
* @return \Pimcore\Model\DataObject\FilterCategoryMultiselect
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get availableCategories - Available Categories
* @return \Pimcore\Model\DataObject\ProductCategory[]
*/
public function getAvailableCategories () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("availableCategories");
	$data = $fd->preGetData($container);
	 return $data;
}

/**
* Set availableCategories - Available Categories
* @param \Pimcore\Model\DataObject\ProductCategory[] $availableCategories
* @return \Pimcore\Model\DataObject\FilterCategoryMultiselect
*/
public function setAvailableCategories ($availableCategories) {
	$this->availableCategories = $this->getDefinition()->getFieldDefinition("availableCategories")->preSetData($this, $availableCategories);
	return $this;
}

}

