<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Bundle\OrderBundle\Controller;

use CoreShop\Bundle\MoneyBundle\CoreExtension\Money;
use CoreShop\Bundle\ResourceBundle\Controller\PimcoreController;
use CoreShop\Component\Address\Formatter\AddressFormatterInterface;
use CoreShop\Component\Address\Model\AddressInterface;
use CoreShop\Component\Address\Model\CountryInterface;
use CoreShop\Component\Customer\Model\CustomerInterface;
use CoreShop\Component\Currency\Model\CurrencyInterface;
use CoreShop\Component\Order\Model\CartPriceRuleInterface;
use CoreShop\Component\Order\Model\ProposalCartPriceRuleItemInterface;
use CoreShop\Component\Order\Model\PurchasableInterface;
use CoreShop\Component\Order\Model\SaleInterface;
use CoreShop\Component\Order\Model\SaleItemInterface;
use CoreShop\Component\Resource\Model\ResourceInterface;
use CoreShop\Component\Resource\Repository\PimcoreRepositoryInterface;
use CoreShop\Component\Store\Model\StoreInterface;
use CoreShop\Component\Taxation\Model\TaxItemInterface;
use Pimcore\Admin\Helper\QueryParams;
use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;

abstract class AbstractSaleDetailController extends AbstractSaleController
{
    /**
     * @return \Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse
     */
    public function getGridConfigurationAction()
    {
        $this->isGrantedOr403();

        $defaultConfiguration = [
            [
                'text' => 'coreshop_sale_id',
                'type' => 'string',
                'dataIndex' => 'o_id',
                'filter' => [
                    'type' => 'number',
                ],
                'hideable' => false,
                'draggable' => false,
            ],
            [
                'text' => 'coreshop_sale_number',
                'type' => 'string',
                'dataIndex' => 'saleNumber',
                'filter' => [
                    'type' => 'string',
                ],
            ],
            [
                'text' => 'name',
                'type' => 'string',
                'dataIndex' => 'customerName',
                'flex' => 1,
            ],
            [
                'text' => 'email',
                'type' => 'string',
                'dataIndex' => 'customerEmail',
                'width' => 200,
            ],
            [
                'text' => 'coreshop_total',
                'type' => 'float',
                'dataIndex' => 'total',
                'renderAs' => 'currency',
                'filter' => [
                    'type' => 'number',
                ],
                'align' => 'right',
            ],
            [
                'text' => 'coreshop_discount',
                'type' => 'float',
                'dataIndex' => 'discount',
                'renderAs' => 'currency',
                'align' => 'right',
                'hidden' => true,
            ],
            [
                'text' => 'coreshop_subtotal',
                'type' => 'float',
                'dataIndex' => 'subtotal',
                'renderAs' => 'currency',
                'align' => 'right',
                'hidden' => true,
            ],
            [
                'text' => 'coreshop_shipping',
                'type' => 'float',
                'dataIndex' => 'shipping',
                'renderAs' => 'currency',
                'align' => 'right',
                'hidden' => true,
            ],
            [
                'text' => 'coreshop_payment_fee',
                'type' => 'float',
                'dataIndex' => 'paymentFee',
                'renderAs' => 'currency',
                'align' => 'right',
                'hidden' => true,
            ],
            [
                'text' => 'coreshop_total_tax',
                'type' => 'float',
                'dataIndex' => 'totalTax',
                'renderAs' => 'currency',
                'align' => 'right',
                'hidden' => true,
            ],
            [
                'text' => 'coreshop_currency',
                'type' => 'string',
                'dataIndex' => 'currencyName',
                'align' => 'right',
                'hidden' => true,
            ],
            [
                'text' => 'coreshop_sale_date',
                'type' => 'date',
                'dataIndex' => 'saleDate',
                'filter' => [
                    'type' => 'date',
                ],
                'width' => 150,
            ],
            [
                'text' => 'coreshop_store',
                'type' => 'integer',
                'dataIndex' => 'store',
                'renderAs' => 'store',
                'filter' => [
                    'type' => 'number',
                ]
            ]
        ];

        $defaultConfiguration = array_merge($defaultConfiguration, $this->getGridColumns());
        $addressClassId = $this->getParameter('coreshop.model.address.pimcore_class_id');

        $addressClassDefinition = DataObject\ClassDefinition::getById($addressClassId);
        $addressFields = [];

        if ($addressClassDefinition instanceof DataObject\ClassDefinition) {
            $invalidFields = ['extra'];

            foreach ($addressClassDefinition->getFieldDefinitions() as $fieldDefinition) {
                if (in_array($fieldDefinition->getName(), $invalidFields)) {
                    continue;
                }

                $niceName = ucwords(str_replace('_', ' ', $fieldDefinition->getName()));

                $addressFields[] = [
                    'fieldName' => $niceName,
                    'type' => 'string',
                    'dataIndex' => $fieldDefinition->getName(),
                    'width' => 150,
                    'hidden' => true,
                ];
            }

            $addressFields[] = [
                'fieldName' => 'All',
                'type' => 'string',
                'dataIndex' => 'All',
                'width' => 150,
                'hidden' => true,
            ];
        }

        foreach (['shipping', 'invoice'] as $type) {
            foreach ($addressFields as $fieldElement) {
                $name = $fieldElement['fieldName'];
                $dataIndex = $fieldElement['dataIndex'];

                $fieldElement['text'] = 'coreshop_address_' . $type . '|[' . $name . ']';
                $fieldElement['dataIndex'] = 'address' . ucfirst($type) . ucfirst($dataIndex);

                $defaultConfiguration[] = $fieldElement;
            }
        }

        return $this->json(['success' => true, 'columns' => $defaultConfiguration]);

    }

    /**
     * @param Request $request
     * @return \Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse
     */
    public function listAction(Request $request)
    {
        $this->isGrantedOr403();

        $list = $this->getSalesList();
        $list->setLimit($request->get('limit', 30));
        $list->setOffset($request->get('page', 1) - 1);

        if ($request->get('filter', null)) {
            $conditionFilters = [];
            $conditionFilters[] = DataObject\Service::getFilterCondition($this->getParam('filter'), DataObject\ClassDefinition::getById($this->getParameter($this->getSaleClassName())));
            if (count($conditionFilters) > 0 && $conditionFilters[0] !== '(())') {
                $list->setCondition(implode(' AND ', $conditionFilters));
            }
        }

        $sortingSettings = QueryParams::extractSortingSettings($request->request->all());

        $order = 'DESC';
        $orderKey = $this->getOrderKey();

        if ($sortingSettings['order']) {
            $order = $sortingSettings['order'];
        }
        if (strlen($sortingSettings['orderKey']) > 0) {
            $orderKey = $sortingSettings['orderKey'];
        }

        $list->setOrder($order);
        $list->setOrderKey($orderKey);

        $sales = $list->load();
        $jsonSales = [];

        foreach ($sales as $sale) {
            $jsonSales[] = $this->prepareSale($sale);
        }

        return $this->json(['success' => true, 'data' => $jsonSales, 'count' => count($jsonSales), 'total' => $list->getTotalCount()]);
    }

    /**
     * @param Request $request
     * @return \Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse
     */
    public function detailAction(Request $request)
    {
        $this->isGrantedOr403();

        $saleId = $request->get('id');
        $sale = $this->getSaleRepository()->find($saleId);

        if (!$sale instanceof SaleInterface) {
            return $this->json(['success' => false, 'message' => "Sale with ID '$saleId' not found"]);
        }

        $jsonSale = $this->getDetails($sale);

        return $this->json(['success' => true, 'sale' => $jsonSale]);
    }

    /**
     * @param Request $request
     * @return \Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse
     */
    public function findSaleAction(Request $request)
    {
        $this->isGrantedOr403();

        $number = $request->get('number');

        if ($number) {
            $list = $this->getSalesList();
            $list->setCondition(sprintf('%s = ? OR o_id = ?', $this->getSaleNumberField()), [$number, $number]);

            $sales = $list->load();

            if (count($sales) > 0) {
                return $this->json(['success' => true, 'id' => $sales[0]->getId()]);
            }
        }

        return $this->json(['success' => false]);
    }

    /**
     * @param SaleInterface $sale
     *
     * @return array<string,string|integer>[]
     */
    protected function prepareSale(SaleInterface $sale)
    {
        $date = intval($sale->getSaleDate()->getTimestamp());

        $element = [
            'o_id' => $sale->getId(),
            'saleDate' => $date,
            'saleNumber' => $sale->getSaleNumber(),
            'lang' => $sale->getSaleLanguage(),
            'discount' => $sale->getDiscount(),
            'subtotal' => $sale->getSubtotal(),
            'shipping' => $sale->getShipping(),
            'totalTax' => $sale->getTotalTax(),
            'total' => $sale->getTotal(),
            'currency' => $this->getCurrency($sale->getCurrency() ? $sale->getCurrency() : $this->get('coreshop.context.currency')->getCurrency()),
            'currencyName' => $sale->getCurrency() instanceof CurrencyInterface ? $sale->getCurrency()->getName() : '',
            'customerName' => $sale->getCustomer() instanceof CustomerInterface ? $sale->getCustomer()->getFirstname() . ' ' . $sale->getCustomer()->getLastname() : '',
            'customerEmail' => $sale->getCustomer() instanceof CustomerInterface ? $sale->getCustomer()->getEmail() : '',
            'store' => $sale->getStore() instanceof StoreInterface ? $sale->getStore()->getId() : null
        ];

        $element = array_merge($element, $this->prepareAddress($sale->getShippingAddress(), 'shipping'), $this->prepareAddress($sale->getInvoiceAddress(), 'invoice'));

        return $element;
    }

    /**
     * @param $address
     * @param $type
     *
     * @return array
     */
    protected function prepareAddress($address, $type)
    {
        $prefix = 'address' . ucfirst($type);
        $values = [];
        $fullAddress = [];
        $classDefinition = DataObject\ClassDefinition::getById($this->getParameter('coreshop.model.address.pimcore_class_id'));

        foreach ($classDefinition->getFieldDefinitions() as $fieldDefinition) {
            $value = '';

            if ($address instanceof AddressInterface && $address instanceof DataObject\Concrete) {
                $getter = "get" . ucfirst($fieldDefinition->getName());

                if (method_exists($address, $getter)) {
                    $value = $address->$getter();

                    if ($value instanceof ResourceInterface) {
                        $value = $value->getName();
                    }

                    $fullAddress[] = $value;
                }
            }

            $values[$prefix . ucfirst($fieldDefinition->getName())] = $value;
        }

        if ($address instanceof AddressInterface && $address->getCountry() instanceof CountryInterface) {
            $values[$prefix . 'All'] = $this->getAddressFormatter()->formatAddress($address, false);
        }

        return $values;
    }

    /**
     * @param SaleInterface $sale
     * @return array
     */
    protected function getDetails(SaleInterface $sale)
    {
        $jsonSale = $this->getDataForObject($sale);

        if ($jsonSale['items'] === null) {
            $jsonSale['items'] = [];
        }

        $jsonSale['o_id'] = $sale->getId();
        $jsonSale['saleNumber'] = $sale->getSaleNumber();
        $jsonSale['saleDate'] = $sale->getSaleDate()->getTimestamp();
        $jsonSale['customer'] = $sale->getCustomer() instanceof CustomerInterface ? $this->getDataForObject($sale->getCustomer()) : null;
        $jsonSale['details'] = $this->getItemDetails($sale);
        $jsonSale['summary'] = $this->getSummary($sale);
        $jsonSale['currency'] = $this->getCurrency($sale->getCurrency() ? $sale->getCurrency() : $this->get('coreshop.context.currency')->getCurrency());
        $jsonSale['store'] = $sale->getStore() instanceof StoreInterface ? $this->getStore($sale->getStore()) : null;

        $jsonSale['address'] = [
            'shipping' => $this->getDataForObject($sale->getShippingAddress()),
            'billing' => $this->getDataForObject($sale->getInvoiceAddress()),
        ];

        if ($sale->getShippingAddress() instanceof AddressInterface && $sale->getShippingAddress()->getCountry() instanceof CountryInterface) {
            $jsonSale['address']['shipping']['formatted'] = $this->getAddressFormatter()->formatAddress($sale->getShippingAddress());
        } else {
            $jsonSale['address']['shipping']['formatted'] = '';
        }

        if ($sale->getInvoiceAddress() instanceof AddressInterface && $sale->getInvoiceAddress()->getCountry() instanceof CountryInterface) {
            $jsonSale['address']['billing']['formatted'] = $this->getAddressFormatter()->formatAddress($sale->getInvoiceAddress());
        } else {
            $jsonSale['address']['billing']['formatted'] = '';
        }

        $jsonSale['priceRule'] = false;

        if ($sale->getPriceRuleItems() instanceof DataObject\Fieldcollection) {
            $rules = [];

            foreach ($sale->getPriceRuleItems()->getItems() as $ruleItem) {
                if ($ruleItem instanceof ProposalCartPriceRuleItemInterface) {
                    $rule = $ruleItem->getCartPriceRule();

                    if ($rule instanceof CartPriceRuleInterface) {
                        $rules[] = [
                            'id' => $rule->getId(),
                            'name' => $rule->getName(),
                            'code' => $ruleItem->getVoucherCode(),
                            'discount' => $ruleItem->getDiscount(),
                        ];
                    }
                }
            }

            $jsonSale['priceRule'] = $rules;
        }

        return $jsonSale;
    }

    /**
     * @param SaleInterface $sale
     *
     * @return array
     */
    protected function getSummary(SaleInterface $sale)
    {
        $summary = [];

        if ($sale->getDiscount() > 0) {
            $summary[] = [
                'key' => 'discount',
                'value' => $sale->getDiscount(),
            ];
        }

        if ($sale->getShipping() > 0) {
            $summary[] = [
                'key' => 'shipping',
                'value' => $sale->getShipping(),
            ];

            $summary[] = [
                'key' => 'shipping_tax',
                'value' => $sale->getShippingTax(),
            ];
        }

        $taxes = $sale->getTaxes();

        if (is_array($taxes)) {
            foreach ($taxes as $tax) {
                if ($tax instanceof TaxItemInterface) {
                    $summary[] = [
                        'key' => 'tax_' . $tax->getName(),
                        'text' => sprintf('Tax (%s - %s)', $tax->getName(), $tax->getRate()),
                        'value' => $tax->getAmount()
                    ];
                }
            }
        }

        $summary[] = [
            'key' => 'total_tax',
            'value' => $sale->getTotalTax(),
        ];
        $summary[] = [
            'key' => 'total',
            'value' => $sale->getTotal(),
        ];

        return $summary;
    }

    /**
     * @param SaleInterface $sale
     *
     * @return array
     */
    protected function getItemDetails(SaleInterface $sale)
    {
        $details = $sale->getItems();
        $items = [];

        foreach ($details as $detail) {
            if ($detail instanceof SaleItemInterface) {
                $items[] = $this->prepareSaleItem($detail);
            }
        }

        return $items;
    }

    /**
     * @param SaleItemInterface $item
     * @return array<string,integer|null|string>
     */
    protected function prepareSaleItem(SaleItemInterface $item)
    {
        return [
            'o_id' => $item->getId(),
            'product' => $item->getProduct() instanceof PurchasableInterface ? $item->getProduct()->getId() : null,
            'product_name' => $item->getProduct() instanceof PurchasableInterface ? $item->getProduct()->getName() : null,
            'product_image' => null, //TODO: ($detail->getProductImage() instanceof \Pimcore\Model\Asset\Image) ? $detail->getProductImage()->getPath() : null,
            'wholesale_price' => $item->getItemWholesalePrice(),
            'price_without_tax' => $item->getItemPrice(false),
            'price' => $item->getItemPrice(true),
            'amount' => $item->getQuantity(),
            'total' => $item->getTotal(),
            'total_tax' => $item->getTotalTax(),
        ];
    }

    /**
     * @param CurrencyInterface $currency
     *
     * @return array
     */
    protected function getCurrency(CurrencyInterface $currency)
    {
        return [
            'name' => $currency->getName(),
            'symbol' => $currency->getSymbol(),
        ];
    }

    /**
     * @param StoreInterface $store
     * @return array<string,integer|string>
     */
    protected function getStore(StoreInterface $store)
    {
        return [
            "id" => $store->getId(),
            "name" => $store->getName()
        ];
    }

    /**
     * @return PimcoreRepositoryInterface
     */
    protected abstract function getSaleRepository();

    /**
     * @return \Pimcore\Model\DataObject\Listing
     */
    protected abstract function getSalesList();

    /**
     * @return string
     */
    protected abstract function getSaleClassName();

    /**
     * @return array
     */
    protected abstract function getGridColumns();

    /**
     * @return string
     */
    protected abstract function getOrderKey();

    /**
     * @return string
     */
    protected abstract function getSaleNumberField();

    /**
     * @return AddressFormatterInterface
     */
    private function getAddressFormatter()
    {
        return $this->get('coreshop.address.formatter');
    }
}
