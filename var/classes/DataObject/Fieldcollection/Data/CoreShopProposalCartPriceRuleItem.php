<?php 

/** 
* Generated at: 2017-10-19T10:41:39+03:00
* IP: 81.18.148.142


Fields Summary: 
 - cartPriceRule [coreShopCartPriceRule]
 - voucherCode [input]
 - discountNet [coreShopMoney]
 - discountGross [coreShopMoney]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class CoreShopProposalCartPriceRuleItem extends \CoreShop\Component\Order\Model\ProposalCartPriceRuleItem  {

public $type = "CoreShopProposalCartPriceRuleItem";
public $cartPriceRule;
public $voucherCode;
public $discountNet;
public $discountGross;


/**
* Get cartPriceRule - Price Rule
* @return CoreShop\Component\Order\Model\CartPriceRule
*/
public function getCartPriceRule () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("cartPriceRule");
	$data = $fd->preGetData($container);
	 return $data;
}

/**
* Set cartPriceRule - Price Rule
* @param CoreShop\Component\Order\Model\CartPriceRule $cartPriceRule
* @return \Pimcore\Model\DataObject\CoreShopProposalCartPriceRuleItem
*/
public function setCartPriceRule ($cartPriceRule) {
	$this->cartPriceRule = $this->getDefinition()->getFieldDefinition("cartPriceRule")->preSetData($this, $cartPriceRule);
	return $this;
}

/**
* Get voucherCode - voucherCode
* @return string
*/
public function getVoucherCode () {
	$data = $this->voucherCode;
	 return $data;
}

/**
* Set voucherCode - voucherCode
* @param string $voucherCode
* @return \Pimcore\Model\DataObject\CoreShopProposalCartPriceRuleItem
*/
public function setVoucherCode ($voucherCode) {
	$this->voucherCode = $voucherCode;
	return $this;
}

/**
* Get discountNet - Discount Net
* @return int
*/
public function getDiscountNet () {
	$data = $this->discountNet;
	 return $data;
}

/**
* Set discountNet - Discount Net
* @param int $discountNet
* @return \Pimcore\Model\DataObject\CoreShopProposalCartPriceRuleItem
*/
public function setDiscountNet ($discountNet) {
	$this->discountNet = $discountNet;
	return $this;
}

/**
* Get discountGross - Discount Gross
* @return int
*/
public function getDiscountGross () {
	$data = $this->discountGross;
	 return $data;
}

/**
* Set discountGross - Discount Gross
* @param int $discountGross
* @return \Pimcore\Model\DataObject\CoreShopProposalCartPriceRuleItem
*/
public function setDiscountGross ($discountGross) {
	$this->discountGross = $discountGross;
	return $this;
}

}

