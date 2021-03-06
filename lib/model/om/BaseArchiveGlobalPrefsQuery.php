<?php


/**
 * Base class that represents a query for the 'archive_global_prefs' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Tue Sep 30 17:21:54 2014
 *
 * @method ArchiveGlobalPrefsQuery orderByUs($order = Criteria::ASC) Order by the us column
 * @method ArchiveGlobalPrefsQuery orderBySave($order = Criteria::ASC) Order by the save column
 * @method ArchiveGlobalPrefsQuery orderByExpire($order = Criteria::ASC) Order by the expire column
 * @method ArchiveGlobalPrefsQuery orderByOtr($order = Criteria::ASC) Order by the otr column
 * @method ArchiveGlobalPrefsQuery orderByMethodAuto($order = Criteria::ASC) Order by the method_auto column
 * @method ArchiveGlobalPrefsQuery orderByMethodLocal($order = Criteria::ASC) Order by the method_local column
 * @method ArchiveGlobalPrefsQuery orderByMethodManual($order = Criteria::ASC) Order by the method_manual column
 * @method ArchiveGlobalPrefsQuery orderByAutoSave($order = Criteria::ASC) Order by the auto_save column
 *
 * @method ArchiveGlobalPrefsQuery groupByUs() Group by the us column
 * @method ArchiveGlobalPrefsQuery groupBySave() Group by the save column
 * @method ArchiveGlobalPrefsQuery groupByExpire() Group by the expire column
 * @method ArchiveGlobalPrefsQuery groupByOtr() Group by the otr column
 * @method ArchiveGlobalPrefsQuery groupByMethodAuto() Group by the method_auto column
 * @method ArchiveGlobalPrefsQuery groupByMethodLocal() Group by the method_local column
 * @method ArchiveGlobalPrefsQuery groupByMethodManual() Group by the method_manual column
 * @method ArchiveGlobalPrefsQuery groupByAutoSave() Group by the auto_save column
 *
 * @method ArchiveGlobalPrefsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArchiveGlobalPrefsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArchiveGlobalPrefsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArchiveGlobalPrefs findOne(PropelPDO $con = null) Return the first ArchiveGlobalPrefs matching the query
 * @method ArchiveGlobalPrefs findOneOrCreate(PropelPDO $con = null) Return the first ArchiveGlobalPrefs matching the query, or a new ArchiveGlobalPrefs object populated from the query conditions when no match is found
 *
 * @method ArchiveGlobalPrefs findOneByUs(string $us) Return the first ArchiveGlobalPrefs filtered by the us column
 * @method ArchiveGlobalPrefs findOneBySave(int $save) Return the first ArchiveGlobalPrefs filtered by the save column
 * @method ArchiveGlobalPrefs findOneByExpire(int $expire) Return the first ArchiveGlobalPrefs filtered by the expire column
 * @method ArchiveGlobalPrefs findOneByOtr(int $otr) Return the first ArchiveGlobalPrefs filtered by the otr column
 * @method ArchiveGlobalPrefs findOneByMethodAuto(int $method_auto) Return the first ArchiveGlobalPrefs filtered by the method_auto column
 * @method ArchiveGlobalPrefs findOneByMethodLocal(int $method_local) Return the first ArchiveGlobalPrefs filtered by the method_local column
 * @method ArchiveGlobalPrefs findOneByMethodManual(int $method_manual) Return the first ArchiveGlobalPrefs filtered by the method_manual column
 * @method ArchiveGlobalPrefs findOneByAutoSave(int $auto_save) Return the first ArchiveGlobalPrefs filtered by the auto_save column
 *
 * @method array findByUs(string $us) Return ArchiveGlobalPrefs objects filtered by the us column
 * @method array findBySave(int $save) Return ArchiveGlobalPrefs objects filtered by the save column
 * @method array findByExpire(int $expire) Return ArchiveGlobalPrefs objects filtered by the expire column
 * @method array findByOtr(int $otr) Return ArchiveGlobalPrefs objects filtered by the otr column
 * @method array findByMethodAuto(int $method_auto) Return ArchiveGlobalPrefs objects filtered by the method_auto column
 * @method array findByMethodLocal(int $method_local) Return ArchiveGlobalPrefs objects filtered by the method_local column
 * @method array findByMethodManual(int $method_manual) Return ArchiveGlobalPrefs objects filtered by the method_manual column
 * @method array findByAutoSave(int $auto_save) Return ArchiveGlobalPrefs objects filtered by the auto_save column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseArchiveGlobalPrefsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArchiveGlobalPrefsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'ArchiveGlobalPrefs', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArchiveGlobalPrefsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ArchiveGlobalPrefsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArchiveGlobalPrefsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArchiveGlobalPrefsQuery) {
            return $criteria;
        }
        $query = new ArchiveGlobalPrefsQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ArchiveGlobalPrefs|ArchiveGlobalPrefs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArchiveGlobalPrefsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArchiveGlobalPrefsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   ArchiveGlobalPrefs A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `US`, `SAVE`, `EXPIRE`, `OTR`, `METHOD_AUTO`, `METHOD_LOCAL`, `METHOD_MANUAL`, `AUTO_SAVE` FROM `archive_global_prefs` WHERE `US` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ArchiveGlobalPrefs();
            $obj->hydrate($row);
            ArchiveGlobalPrefsPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ArchiveGlobalPrefs|ArchiveGlobalPrefs[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ArchiveGlobalPrefs[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::US, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::US, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the us column
     *
     * Example usage:
     * <code>
     * $query->filterByUs('fooValue');   // WHERE us = 'fooValue'
     * $query->filterByUs('%fooValue%'); // WHERE us LIKE '%fooValue%'
     * </code>
     *
     * @param     string $us The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByUs($us = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($us)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $us)) {
                $us = str_replace('*', '%', $us);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::US, $us, $comparison);
    }

    /**
     * Filter the query on the save column
     *
     * Example usage:
     * <code>
     * $query->filterBySave(1234); // WHERE save = 1234
     * $query->filterBySave(array(12, 34)); // WHERE save IN (12, 34)
     * $query->filterBySave(array('min' => 12)); // WHERE save > 12
     * </code>
     *
     * @param     mixed $save The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterBySave($save = null, $comparison = null)
    {
        if (is_array($save)) {
            $useMinMax = false;
            if (isset($save['min'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::SAVE, $save['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($save['max'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::SAVE, $save['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::SAVE, $save, $comparison);
    }

    /**
     * Filter the query on the expire column
     *
     * Example usage:
     * <code>
     * $query->filterByExpire(1234); // WHERE expire = 1234
     * $query->filterByExpire(array(12, 34)); // WHERE expire IN (12, 34)
     * $query->filterByExpire(array('min' => 12)); // WHERE expire > 12
     * </code>
     *
     * @param     mixed $expire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByExpire($expire = null, $comparison = null)
    {
        if (is_array($expire)) {
            $useMinMax = false;
            if (isset($expire['min'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::EXPIRE, $expire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expire['max'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::EXPIRE, $expire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::EXPIRE, $expire, $comparison);
    }

    /**
     * Filter the query on the otr column
     *
     * Example usage:
     * <code>
     * $query->filterByOtr(1234); // WHERE otr = 1234
     * $query->filterByOtr(array(12, 34)); // WHERE otr IN (12, 34)
     * $query->filterByOtr(array('min' => 12)); // WHERE otr > 12
     * </code>
     *
     * @param     mixed $otr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByOtr($otr = null, $comparison = null)
    {
        if (is_array($otr)) {
            $useMinMax = false;
            if (isset($otr['min'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::OTR, $otr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otr['max'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::OTR, $otr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::OTR, $otr, $comparison);
    }

    /**
     * Filter the query on the method_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodAuto(1234); // WHERE method_auto = 1234
     * $query->filterByMethodAuto(array(12, 34)); // WHERE method_auto IN (12, 34)
     * $query->filterByMethodAuto(array('min' => 12)); // WHERE method_auto > 12
     * </code>
     *
     * @param     mixed $methodAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByMethodAuto($methodAuto = null, $comparison = null)
    {
        if (is_array($methodAuto)) {
            $useMinMax = false;
            if (isset($methodAuto['min'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_AUTO, $methodAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($methodAuto['max'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_AUTO, $methodAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_AUTO, $methodAuto, $comparison);
    }

    /**
     * Filter the query on the method_local column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodLocal(1234); // WHERE method_local = 1234
     * $query->filterByMethodLocal(array(12, 34)); // WHERE method_local IN (12, 34)
     * $query->filterByMethodLocal(array('min' => 12)); // WHERE method_local > 12
     * </code>
     *
     * @param     mixed $methodLocal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByMethodLocal($methodLocal = null, $comparison = null)
    {
        if (is_array($methodLocal)) {
            $useMinMax = false;
            if (isset($methodLocal['min'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_LOCAL, $methodLocal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($methodLocal['max'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_LOCAL, $methodLocal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_LOCAL, $methodLocal, $comparison);
    }

    /**
     * Filter the query on the method_manual column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodManual(1234); // WHERE method_manual = 1234
     * $query->filterByMethodManual(array(12, 34)); // WHERE method_manual IN (12, 34)
     * $query->filterByMethodManual(array('min' => 12)); // WHERE method_manual > 12
     * </code>
     *
     * @param     mixed $methodManual The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByMethodManual($methodManual = null, $comparison = null)
    {
        if (is_array($methodManual)) {
            $useMinMax = false;
            if (isset($methodManual['min'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_MANUAL, $methodManual['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($methodManual['max'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_MANUAL, $methodManual['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::METHOD_MANUAL, $methodManual, $comparison);
    }

    /**
     * Filter the query on the auto_save column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoSave(1234); // WHERE auto_save = 1234
     * $query->filterByAutoSave(array(12, 34)); // WHERE auto_save IN (12, 34)
     * $query->filterByAutoSave(array('min' => 12)); // WHERE auto_save > 12
     * </code>
     *
     * @param     mixed $autoSave The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function filterByAutoSave($autoSave = null, $comparison = null)
    {
        if (is_array($autoSave)) {
            $useMinMax = false;
            if (isset($autoSave['min'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::AUTO_SAVE, $autoSave['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoSave['max'])) {
                $this->addUsingAlias(ArchiveGlobalPrefsPeer::AUTO_SAVE, $autoSave['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchiveGlobalPrefsPeer::AUTO_SAVE, $autoSave, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ArchiveGlobalPrefs $archiveGlobalPrefs Object to remove from the list of results
     *
     * @return ArchiveGlobalPrefsQuery The current query, for fluid interface
     */
    public function prune($archiveGlobalPrefs = null)
    {
        if ($archiveGlobalPrefs) {
            $this->addUsingAlias(ArchiveGlobalPrefsPeer::US, $archiveGlobalPrefs->getUs(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
