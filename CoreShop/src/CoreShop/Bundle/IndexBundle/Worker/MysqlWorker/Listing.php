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

namespace CoreShop\Bundle\IndexBundle\Worker\MysqlWorker;

use CoreShop\Bundle\IndexBundle\Worker\AbstractListing;
use CoreShop\Bundle\IndexBundle\Worker\MysqlWorker;
use CoreShop\Bundle\IndexBundle\Worker\MysqlWorker\Listing\Dao;
use CoreShop\Component\Index\Condition\ConditionInterface;
use CoreShop\Component\Index\Listing\ListingInterface;
use CoreShop\Component\Index\Model\IndexInterface;
use CoreShop\Component\Index\Worker\WorkerInterface;
use CoreShop\Component\Resource\Pimcore\Model\PimcoreModelInterface;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\Concrete;
use Zend\Paginator\Adapter\AdapterInterface;

class Listing extends AbstractListing
{
    /**
     * @var null|PimcoreModelInterface[]
     */
    protected $objects = null;

    /**
     * @var null|int
     */
    protected $totalCount = null;

    /**
     * @var string
     */
    protected $variantMode = ListingInterface::VARIANT_MODE_INCLUDE;

    /**
     * @var int
     */
    protected $limit;

    /**
     * @var int
     */
    protected $offset;

    /**
     * @var PimcoreModelInterface
     */
    protected $category;

    /**
     * @var Dao
     */
    protected $dao;

    /**
     * @var string
     */
    protected $order;

    /**
     * @var string | array
     */
    protected $orderKey;

    /**
     * @var bool
     */
    protected $orderByPrice = false;

    /**
     * @var string[]
     */
    protected $conditions = [];

    /**
     * @var string[]
     */
    protected $relationConditions = [];

    /**
     * @var string[][]
     */
    protected $queryConditions = [];

    /**
     * @var string[][]
     */
    protected $queryJoins = [];

    /**
     * @var MysqlWorker
     */
    protected $worker;

    /**
     * {@inheritdoc}
     */
    public function __construct(IndexInterface $index, WorkerInterface $worker)
    {
        parent::__construct($index, $worker);

        $this->dao = new Dao($this);
    }

    /**
     * {@inheritdoc}
     */
    public function getObjects()
    {
        if ($this->objects === null) {
            $this->load();
        }

        return $this->objects;
    }

    /**
     * {@inheritdoc}
     */
    public function addCondition(ConditionInterface $condition, $fieldName)
    {
        $this->objects = null;
        $this->conditions[$fieldName][] = $condition;
    }

    /**
     * {@inheritdoc}
     */
    public function resetCondition($fieldName)
    {
        $this->objects = null;
        unset($this->conditions[$fieldName]);
    }

    /**
     * {@inheritdoc}
     */
    public function addRelationCondition(ConditionInterface $condition, $fieldName)
    {
        $this->objects = null;
        $this->relationConditions[$fieldName][] = $condition;
    }

    /**
     * {@inheritdoc}
     */
    public function resetConditions()
    {
        $this->conditions = [];
        $this->relationConditions = [];
        $this->queryConditions = [];
        $this->queryJoins = [];

        $this->objects = null;
    }

    /**
     * {@inheritdoc}
     */
    public function addQueryCondition(ConditionInterface $condition, $fieldName)
    {
        $this->objects = null;
        $this->queryConditions[$fieldName][] = $condition;
    }

    /**
     * {@inheritdoc}
     */
    public function resetQueryCondition($fieldName)
    {
        $this->objects = null;
        unset($this->queryConditions[$fieldName]);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder($order)
    {
        $this->objects = null;
        $this->order = $order;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderKey($orderKey)
    {
        $this->objects = null;
        if ($orderKey == AbstractListing::ORDERKEY_PRICE) {
            $this->orderByPrice = true;
        } else {
            $this->orderByPrice = false;
        }

        $this->orderKey = $orderKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderKey()
    {
        return $this->orderKey;
    }

    /**
     * {@inheritdoc}
     */
    public function setLimit($limit)
    {
        if ($this->limit != $limit) {
            $this->objects = null;
        }
        $this->limit = $limit;
    }

    /**
     * {@inheritdoc}
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * {@inheritdoc}
     */
    public function setOffset($offset)
    {
        if ($this->offset != $offset) {
            $this->objects = null;
        }
        $this->offset = $offset;
    }

    /**
     * {@inheritdoc}
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * {@inheritdoc}
     */
    public function setCategory(PimcoreModelInterface $category)
    {
        $this->objects = null;
        $this->category = $category;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * {@inheritdoc}
     */
    public function setVariantMode($variantMode)
    {
        $this->objects = null;
        $this->variantMode = $variantMode;
    }

    /**
     * {@inheritdoc}
     */
    public function getVariantMode()
    {
        return $this->variantMode;
    }

    /**
     * {@inheritdoc}
     */
    public function load()
    {
        //TODO: Load with price filter?!

        $objectRaws = $this->dao->load($this->buildQueryFromConditions(), $this->buildOrderBy(), $this->getLimit(), $this->getOffset());
        $this->totalCount = $this->dao->getLastRecordCount();
        $className = $this->index->getClass();

        $this->objects = [];
        foreach ($objectRaws as $raw) {
            $object = $this->loadElementById($raw['o_id']);

            if ($object instanceof Concrete) {
                if ($object->getClassName() === $className) {
                    $this->objects[] = $object;
                }
            }
        }

        return $this->objects;
    }

    /**
     * {@inheritdoc}
     */
    protected function loadElementById($elementId)
    {
        return AbstractObject::getById($elementId);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupByValues($fieldName, $countValues = false, $fieldNameShouldBeExcluded = true)
    {
        $excludedFieldName = $fieldName;
        if (!$fieldNameShouldBeExcluded) {
            $excludedFieldName = null;
        }

        return $this->dao->loadGroupByValues($fieldName, $this->buildQueryFromConditions(false, $excludedFieldName, AbstractListing::VARIANT_MODE_INCLUDE), $countValues);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupByRelationValues($fieldName, $countValues = false, $fieldNameShouldBeExcluded = true)
    {
        $excludedFieldName = $fieldName;
        if (!$fieldNameShouldBeExcluded) {
            $excludedFieldName = null;
        }

        return $this->dao->loadGroupByRelationValues($fieldName, $this->buildQueryFromConditions(false, $excludedFieldName, AbstractListing::VARIANT_MODE_INCLUDE), $countValues);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupBySystemValues($fieldName, $countValues = false, $fieldNameShouldBeExcluded = true)
    {
        // not supported with mysql tables
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function buildQueryFromConditions($excludeConditions = false, $excludedFieldName = null, $variantMode = null)
    {
        if ($variantMode == null) {
            $variantMode = $this->getVariantMode();
        }

        $preCondition = 'active = 1';

        if ($this->getCategory()) {
            $preCondition .= " AND parentCategoryIds LIKE '%,".$this->getCategory()->getId().",%'";
        }

        $condition = $preCondition;

        //variant handling and userspecific conditions

        if ($variantMode == AbstractListing::VARIANT_MODE_INCLUDE_PARENT_OBJECT) {
            if (!$excludeConditions) {
                $userSpecific = $this->buildUserSpecificConditions($excludedFieldName);
                if ($userSpecific) {
                    $condition .= ' AND '.$userSpecific;
                }
            }
        } else {
            if ($variantMode == AbstractListing::VARIANT_MODE_HIDE) {
                $condition .= " AND o_type != 'variant'";
            }

            if (!$excludeConditions) {
                $userSpecific = $this->buildUserSpecificConditions($excludedFieldName);
                if ($userSpecific) {
                    $condition .= ' AND '.$userSpecific;
                }
            }
        }

        if (is_array($this->queryConditions)) {
            $searchString = '';

            foreach ($this->queryConditions as $condition) {
                if ($condition instanceof ConditionInterface) {
                    $searchString .= '+'.$condition->getValues().'+ ';
                }
            }

            //$condition .= ' AND '.$this->dao->buildFulltextSearchWhere(["name"], $searchString); //TODO: Load array("name") from any configuration (cause its also used by indexservice)
        }

        return $condition;
    }

    /**
     * {@inheritdoc}
     */
    protected function buildUserSpecificConditions($excludedFieldName = null)
    {
        $renderedConditions = [];
        $relationalTableName = $this->worker->getRelationTablename($this->index);

        foreach ($this->relationConditions as $fieldName => $condArray) {
            if ($fieldName !== $excludedFieldName && is_array($condArray)) {
                foreach ($condArray as $cond) {
                    $cond = $this->worker->renderCondition($cond);

                    $renderedConditions[] = 'a.o_id IN (SELECT DISTINCT src FROM '.$relationalTableName.' WHERE '.$cond.')';
                }
            }
        }

        foreach ($this->conditions as $fieldName => $condArray) {
            if ($fieldName !== $excludedFieldName && is_array($condArray)) {
                foreach ($condArray as $cond) {
                    $renderedConditions[] = $this->worker->renderCondition($cond);
                }
            }
        }

        return implode(' AND ', $renderedConditions);
    }

    /**
     * {@inheritdoc}
     */
    protected function buildOrderBy()
    {
        if (!empty($this->orderKey) && $this->orderKey !== AbstractListing::ORDERKEY_PRICE) {
            $orderKeys = $this->orderKey;
            if (!is_array($orderKeys)) {
                $orderKeys = [$orderKeys];
            }

            $directionOrderKeys = [];
            foreach ($orderKeys as $key) {
                if (is_array($key)) {
                    $directionOrderKeys[] = $key;
                } else {
                    $directionOrderKeys[] = [$key, $this->order];
                }
            }

            $orderByStringArray = [];
            foreach ($directionOrderKeys as $keyDirection) {
                $key = $keyDirection[0];
                $direction = $keyDirection[1];

                if ($this->getVariantMode() == AbstractListing::VARIANT_MODE_INCLUDE_PARENT_OBJECT) {
                    if (strtoupper($this->order) == 'DESC') {
                        $orderByStringArray[] = 'max('.$key.') '.$direction;
                    } else {
                        $orderByStringArray[] = 'min('.$key.') '.$direction;
                    }
                } else {
                    $orderByStringArray[] = $key.' '.$direction;
                }
            }

            return implode(',', $orderByStringArray);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function buildSimilarityOrderBy($fields, $objectId)
    {
        return $this->dao->buildSimilarityOrderBy($fields, $objectId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTableName()
    {
        return $this->worker->getTablename($this->index);
    }

    /**
     * {@inheritdoc}
     */
    public function getQueryTableName()
    {
        return $this->worker->getLocalizedViewName($this->index, $this->getLocale());
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationTablename()
    {
        return $this->worker->getRelationTablename($this->index);
    }

    /**
     * {@inheritdoc}
     */
    public function quote($value)
    {
        return $this->dao->quote($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getJoins()
    {
        if (empty($this->queryJoins)) {
            return '';
        }

        $query = '';

        foreach ($this->queryJoins as $table => $tableJoins) {
            $joinType = isset($tableJoins['type']) ? ' '.$tableJoins['type'] : ' LEFT';

            if (empty($tableJoins['joinTableAlias'])) {
                continue;
            }

            $joinName = $tableJoins['joinTableAlias'];
            $objectKeyField = isset($tableJoins['objectKeyField']) ? $tableJoins['objectKeyField'] : 'o_id';

            $query .= $joinType.' JOIN '.$table.' as '.$joinName.' on `'.$joinName.'`.'.$objectKeyField.' = a.o_id ';
        }

        return $query;
    }

    /**
     * @return int|null
     */
    public function count()
    {
        if ($this->totalCount === null) {
            $this->totalCount = $this->dao->getCount($this->buildQueryFromConditions());
        }

        return $this->totalCount;
    }

    /**
     * @return PimcoreModelInterface|boolean
     */
    public function current()
    {
        $this->getObjects();
        $var = current($this->objects);

        return $var;
    }

    /**
     * @param int $offset
     * @param int $itemCountPerPage
     *
     * @return PimcoreModelInterface[]|null
     */
    public function getItems($offset, $itemCountPerPage)
    {
        $this->setOffset($offset);
        $this->setLimit($itemCountPerPage);

        return $this->getObjects();
    }

    /**
     * Return a fully configured Paginator Adapter from this method.
     *
     * @return AdapterInterface
     */
    public function getPaginatorAdapter()
    {
        return $this;
    }

    /**
     * @return mixed
     */
    public function key()
    {
        $this->getObjects();
        $var = key($this->objects);

        return $var;
    }

    /**
     * @return PimcoreModelInterface|boolean
     */
    public function next()
    {
        $this->getObjects();
        $var = next($this->objects);

        return $var;
    }

    public function rewind()
    {
        $this->getObjects();
        reset($this->objects);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        $var = $this->current() !== false;

        return $var;
    }
}
