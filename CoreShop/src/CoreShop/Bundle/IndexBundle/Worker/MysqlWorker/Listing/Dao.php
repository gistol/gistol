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

namespace CoreShop\Bundle\IndexBundle\Worker\MysqlWorker\Listing;

use CoreShop\Bundle\IndexBundle\Worker\MysqlWorker;
use CoreShop\Component\Index\Listing\ListingInterface;
use Pimcore\Db;

class Dao
{
    /**
     * @var \Pimcore\Db\Connection
     */
    private $database;

    /**
     * @var MysqlWorker\Listing
     */
    private $model;

    /**
     * @var int
     */
    private $lastRecordCount;

    /**
     * Resource constructor.
     *
     * @param MysqlWorker\Listing $model
     */
    public function __construct(MysqlWorker\Listing $model)
    {
        $this->model = $model;
        $this->database = Db::get();
    }

    /**
     * Load objects.
     *
     * @param $condition
     * @param null|string $orderBy
     * @param null|int    $limit
     * @param null|int    $offset
     *
     * @return array
     */
    public function load($condition, $orderBy = null, $limit = null, $offset = null)
    {
        if (is_string($condition)) {
            $condition = 'WHERE '.$condition;
        }

        if (is_string($orderBy)) {
            $orderBy = ' ORDER BY '.$orderBy;
        }

        if (is_integer($limit)) {
            if (is_integer($offset)) {
                $limit = 'LIMIT '.$offset.', '.$limit;
            } else {
                $limit = 'LIMIT '.$limit;
            }
        }

        if ($this->model->getVariantMode() == ListingInterface::VARIANT_MODE_INCLUDE_PARENT_OBJECT) {
            if (!is_null($orderBy)) {
                $query = 'SELECT SQL_CALC_FOUND_ROWS DISTINCT o_virtualObjectId as o_id FROM '
                    .$this->model->getQueryTableName().' a '
                    .$this->model->getJoins()
                    .$condition.' GROUP BY o_virtualObjectId'.$orderBy.' '.$limit;
            } else {
                $query = 'SELECT SQL_CALC_FOUND_ROWS DISTINCT o_virtualObjectId as o_id FROM '
                    .$this->model->getQueryTableName().' a '
                    .$this->model->getJoins()
                    .$condition.' '.$limit;
            }
        } else {
            $query = 'SELECT SQL_CALC_FOUND_ROWS a.o_id FROM '
                .$this->model->getQueryTableName().' a '
                .$this->model->getJoins()
                .$condition.$orderBy.' '.$limit;
        }

        $result = $this->database->fetchAll($query);
        $this->lastRecordCount = (int) $this->database->fetchOne('SELECT FOUND_ROWS()');

        return $result;
    }

    /**
     * Load Group by values.
     *
     * @param $fieldname
     * @param $condition
     * @param bool $countValues
     *
     * @return array
     */
    public function loadGroupByValues($fieldname, $condition, $countValues = false)
    {
        if ($condition) {
            $condition = 'WHERE '.$condition;
        }

        if ($countValues) {
            if ($this->model->getVariantMode() == ListingInterface::VARIANT_MODE_INCLUDE_PARENT_OBJECT) {
                $query = "SELECT TRIM(`$fieldname`) as `value`, count(DISTINCT o_virtualObjectId) as `count` FROM "
                    .$this->model->getQueryTableName().' a '
                    .$this->model->getJoins()
                    .$condition.' GROUP BY TRIM(`'.$fieldname.'`) ORDER BY '.$this->database->quoteIdentifier($fieldname);
            } else {
                $query = "SELECT TRIM(`$fieldname`) as `value`, count(*) as `count` FROM "
                    .$this->model->getQueryTableName().' a '
                    .$this->model->getJoins()
                    .$condition.' GROUP BY TRIM(`'.$fieldname.'`) ORDER BY '.$this->database->quoteIdentifier($fieldname);
            }

            $result = $this->database->fetchAll($query);

            return $result;
        } else {
            $query = 'SELECT '.$this->database->quoteIdentifier($fieldname).' FROM '
                .$this->model->getQueryTableName().' a '
                .$this->model->getJoins()
                .$condition.' GROUP BY '.$this->database->quoteIdentifier($fieldname).' ORDER BY '.$this->database->quoteIdentifier($fieldname);

            $queryResult = $this->database->fetchAll($query);
            $result = [];

            foreach ($queryResult as $row) {
                if ($row[$fieldname]) {
                    $result[] = $row[$fieldname];
                }
            }

            return $result;
        }
    }

    /**
     * Load Grouo by Relation values.
     *
     * @param $fieldname
     * @param $condition
     * @param bool $countValues
     *
     * @return array
     */
    public function loadGroupByRelationValues($fieldname, $condition, $countValues = false)
    {
        if ($condition) {
            $condition = 'WHERE '.$condition;
        }

        if ($countValues) {
            if ($this->model->getVariantMode() == ListingInterface::VARIANT_MODE_INCLUDE_PARENT_OBJECT) {
                $query = 'SELECT dest as `value`, count(DISTINCT src_virtualObjectId) as `count` FROM '
                    .$this->model->getRelationTablename().' a '
                    .'WHERE fieldname = '.$this->quote($fieldname);
            } else {
                $query = 'SELECT dest as `value`, count(*) as `count` FROM '
                    .$this->model->getRelationTablename().' a '
                    .'WHERE fieldname = '.$this->quote($fieldname);
            }

            $subquery = 'SELECT a.o_id FROM '
                .$this->model->getQueryTableName().' a '
                .$this->model->getJoins()
                .$condition;

            $query .= ' AND src IN ('.$subquery.') GROUP BY dest';

            $result = $this->database->fetchAssoc($query);

            return $result;
        } else {
            $query = 'SELECT dest FROM '.$this->model->getRelationTablename().' a '
                .'WHERE fieldname = '.$this->quote($fieldname);

            $subquery = 'SELECT a.o_id FROM '
                .$this->model->getQueryTableName().' a '
                .$this->model->getJoins()
                .$condition;

            $query .= ' AND src IN ('.$subquery.') GROUP BY dest';

            $result = $this->database->fetchCol($query);

            return $result;
        }
    }

    /**
     * Get Count.
     *
     * @param $condition
     * @param null $orderBy
     * @param null $limit
     * @param null $offset
     *
     * @return int
     */
    public function getCount($condition, $orderBy = null, $limit = null, $offset = null)
    {
        if ($condition) {
            $condition = 'WHERE '.$condition;
        }

        if ($orderBy) {
            $orderBy = ' ORDER BY '.$orderBy;
        }

        if ($limit) {
            if ($offset) {
                $limit = 'LIMIT '.$offset.', '.$limit;
            } else {
                $limit = 'LIMIT '.$limit;
            }
        }

        if ($this->model->getVariantMode() == ListingInterface::VARIANT_MODE_INCLUDE_PARENT_OBJECT) {
            $query = 'SELECT count(DISTINCT o_virtualObjectId) FROM '
                .$this->model->getQueryTableName().' a '
                .$this->model->getJoins()
                .$condition.$orderBy.' '.$limit;
        } else {
            $query = 'SELECT count(*) FROM '
                .$this->model->getQueryTableName().' a '
                .$this->model->getJoins()
                .$condition.$orderBy.' '.$limit;
        }
        $result = $this->database->fetchOne($query);

        return $result;
    }

    /**
     * quoute value.
     *
     * @param $value
     *
     * @return mixed
     */
    public function quote($value)
    {
        return $this->database->quote($value);
    }

    /**
     * returns order by statement for similarity calculations based on given fields and object ids.
     *
     * @param $fields
     * @param $objectId
     *
     * @return string
     */
    public function buildSimilarityOrderBy($fields, $objectId)
    {
        //TODO: similarity
        /*
        try {
            $fieldString = '';
            $maxFieldString = '';

            foreach ($fields as $field) {
                if ($field instanceof AbstractSimilarity) {
                    if (!empty($fieldString)) {
                        $fieldString .= ',';
                        $maxFieldString .= ',';
                    }


                    $fieldString .= $this->db->quoteIdentifier($field->getField());
                    $maxFieldString .= 'MAX('.$this->db->quoteIdentifier($field->getField()).') as '.$this->db->quoteIdentifier($field->getField());
                }
            }

            $query = 'SELECT '.$fieldString.' FROM '.$this->model->getQueryTableName().' a WHERE a.o_id = ?;';
            $objectValues = $this->db->fetchRow($query, $objectId);

            $query = 'SELECT '.$maxFieldString.' FROM '.$this->model->getQueryTableName().' a';
            $maxObjectValues = $this->db->fetchRow($query);

            if (!empty($objectValues)) {
                $subStatement = [];

                foreach ($fields as $field) {
                    if ($field instanceof AbstractSimilarity) {
                        if ($objectValues[$field->getField()]) {
                            $subStatement[] =
                                '(' .
                                $this->db->quoteIdentifier($field->getField()) . '/' . $maxObjectValues[$field->getField()] .
                                ' - ' .
                                $objectValues[$field->getField()] / $maxObjectValues[$field->getField()] .
                                ') * ' . $field->getWeight();
                        }
                    }
                }

                if (count($subStatement) > 0) {
                    $statement = 'ABS('.implode(' + ', $subStatement).')';

                    return $statement;
                }
            } else {
                throw new \Exception('Field array for given object id is empty');
            }
        } catch (\Exception $e) {
        }*/

        return '';
    }

    /**
     * returns where statement for fulltext search index.
     *
     * @param $fields
     * @param $searchString
     *
     * @return string
     */
    public function buildFulltextSearchWhere($fields, $searchString)
    {
        $columnNames = [];

        foreach ($fields as $c) {
            $columnNames[] = $this->database->quoteIdentifier($c);
        }

        return 'MATCH ('.implode(',', $columnNames).') AGAINST ('.$this->database->quote($searchString).' IN BOOLEAN MODE)';
    }

    /**
     * get the record count for the last select query.
     *
     * @return int
     */
    public function getLastRecordCount()
    {
        return $this->lastRecordCount;
    }
}
