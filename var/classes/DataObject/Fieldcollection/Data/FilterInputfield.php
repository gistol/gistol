<?php 

/** 
* Generated at: 2017-10-11T11:17:20+02:00
* IP: 81.18.148.142


Fields Summary: 
 - label [input]
 - field [indexFieldSelectionCombo]
 - preSelect [input]
 - scriptPath [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterInputfield extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractFilterDefinitionType  {

public $type = "FilterInputfield";
public $label;
public $field;
public $preSelect;
public $scriptPath;


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
* @return \Pimcore\Model\DataObject\FilterInputfield
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get field - Field
* @return string
*/
public function getField () {
	$data = $this->field;
	 return $data;
}

/**
* Set field - Field
* @param string $field
* @return \Pimcore\Model\DataObject\FilterInputfield
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get preSelect - PreSelect
* @return string
*/
public function getPreSelect () {
	$data = $this->preSelect;
	 return $data;
}

/**
* Set preSelect - PreSelect
* @param string $preSelect
* @return \Pimcore\Model\DataObject\FilterInputfield
*/
public function setPreSelect ($preSelect) {
	$this->preSelect = $preSelect;
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
* @return \Pimcore\Model\DataObject\FilterInputfield
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

}

