<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\Model;

/**
 * Abstract base class for filter definition pimcore objects
 */
abstract class AbstractFilterDefinition extends \Pimcore\Model\DataObject\Concrete
{
    /**
     * @static
     *
     * @param int $id
     *
     * @return null|\Pimcore\Model\DataObject\AbstractObject
     */
    public static function getById($id)
    {
        $object = \Pimcore\Model\DataObject\AbstractObject::getById($id);

        if ($object instanceof AbstractFilterDefinition) {
            return $object;
        }

        return null;
    }

    /**
     * returns page limit for product list
     *
     * @abstract
     *
     * @return float
     */
    abstract public function getPageLimit();

    /**
     * returns list of available fields for sorting ascending
     *
     * @abstract
     *
     * @return string
     */
    abstract public function getOrderByAsc();

    /**
     * returns list of available fields for sorting descending
     *
     * @abstract
     *
     * @return string
     */
    abstract public function getOrderByDesc();

    /**
     * return array of field collections for preconditions
     *
     * @abstract
     *
     * @return \Pimcore\Model\DataObject\Fieldcollection
     */
    abstract public function getConditions();

    /**
     * return array of field collections for filters
     *
     * @abstract
     *
     * @return \Pimcore\Model\DataObject\Fieldcollection
     */
    abstract public function getFilters();

    /**
     * enables inheritance for field collections, if xxxInheritance field is available and set to string 'true'
     *
     * @param string $key
     *
     * @return mixed|\Pimcore\Model\DataObject\Fieldcollection
     */
    public function preGetValue($key)
    {
        if ($this->getClass()->getAllowInherit()
            && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues()
            && $this->getClass()->getFieldDefinition($key) instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections
        ) {
            $checkInheritanceKey = $key . 'Inheritance';
            if ($this->{
                'get' . $checkInheritanceKey
                }() == 'true'
            ) {
                $parentValue = $this->getValueFromParent($key);
                $data = $this->$key;
                if (!$data) {
                    $data = $this->getClass()->getFieldDefinition($key)->preGetData($this);
                }
                if (!$data) {
                    return $parentValue;
                } else {
                    if (!empty($parentValue)) {
                        $value = new \Pimcore\Model\DataObject\Fieldcollection($parentValue->getItems());
                        if (!empty($data)) {
                            foreach ($data as $entry) {
                                $value->add($entry);
                            }
                        }
                    } else {
                        $value = new \Pimcore\Model\DataObject\Fieldcollection($data->getItems());
                    }

                    return $value;
                }
            }
        }

        return parent::preGetValue($key);
    }
}
