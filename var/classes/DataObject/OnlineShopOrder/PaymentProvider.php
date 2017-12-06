<?php 

namespace Pimcore\Model\DataObject\OnlineShopOrder;

class PaymentProvider extends \Pimcore\Model\DataObject\Objectbrick {



protected $brickGetters = array('PaymentProviderQpay','PaymentProviderDatatrans','PaymentProviderPayPal');


public $PaymentProviderQpay = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function getPaymentProviderQpay() { 
   return $this->PaymentProviderQpay; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay $PaymentProviderQpay
* @return void
*/
public function setPaymentProviderQpay ($PaymentProviderQpay) {
	$this->PaymentProviderQpay = $PaymentProviderQpay;
	return $this;;
}

public $PaymentProviderDatatrans = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function getPaymentProviderDatatrans() { 
   return $this->PaymentProviderDatatrans; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans $PaymentProviderDatatrans
* @return void
*/
public function setPaymentProviderDatatrans ($PaymentProviderDatatrans) {
	$this->PaymentProviderDatatrans = $PaymentProviderDatatrans;
	return $this;;
}

public $PaymentProviderPayPal = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPal
*/
public function getPaymentProviderPayPal() { 
   return $this->PaymentProviderPayPal; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPal $PaymentProviderPayPal
* @return void
*/
public function setPaymentProviderPayPal ($PaymentProviderPayPal) {
	$this->PaymentProviderPayPal = $PaymentProviderPayPal;
	return $this;;
}

}

