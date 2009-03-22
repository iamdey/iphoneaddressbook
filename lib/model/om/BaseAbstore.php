<?php

/**
 * Base class that represents a row from the 'ABStore' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sat Mar 14 14:28:43 2009
 *
 * @package    lib.model.om
 */
abstract class BaseAbstore extends BaseObject  implements Persistent {


  const PEER = 'AbstorePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AbstorePeer
	 */
	protected static $peer;

	/**
	 * The value for the rowid field.
	 * @var        string
	 */
	protected $rowid;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the externalidentifier field.
	 * @var        string
	 */
	protected $externalidentifier;

	/**
	 * The value for the type field.
	 * @var        string
	 */
	protected $type;

	/**
	 * The value for the constraintspath field.
	 * @var        string
	 */
	protected $constraintspath;

	/**
	 * The value for the externalmodificationtag field.
	 * @var        string
	 */
	protected $externalmodificationtag;

	/**
	 * The value for the storeinternalidentifier field.
	 * @var        string
	 */
	protected $storeinternalidentifier;

	/**
	 * The value for the accountidentifier field.
	 * @var        string
	 */
	protected $accountidentifier;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseAbstore object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

	/**
	 * Get the [rowid] column value.
	 * 
	 * @return     string
	 */
	public function getRowid()
	{
		return $this->rowid;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [externalidentifier] column value.
	 * 
	 * @return     string
	 */
	public function getExternalidentifier()
	{
		return $this->externalidentifier;
	}

	/**
	 * Get the [type] column value.
	 * 
	 * @return     string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Get the [constraintspath] column value.
	 * 
	 * @return     string
	 */
	public function getConstraintspath()
	{
		return $this->constraintspath;
	}

	/**
	 * Get the [externalmodificationtag] column value.
	 * 
	 * @return     string
	 */
	public function getExternalmodificationtag()
	{
		return $this->externalmodificationtag;
	}

	/**
	 * Get the [storeinternalidentifier] column value.
	 * 
	 * @return     string
	 */
	public function getStoreinternalidentifier()
	{
		return $this->storeinternalidentifier;
	}

	/**
	 * Get the [accountidentifier] column value.
	 * 
	 * @return     string
	 */
	public function getAccountidentifier()
	{
		return $this->accountidentifier;
	}

	/**
	 * Set the value of [rowid] column.
	 * 
	 * @param      string $v new value
	 * @return     Abstore The current object (for fluent API support)
	 */
	public function setRowid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->rowid !== $v) {
			$this->rowid = $v;
			$this->modifiedColumns[] = AbstorePeer::ROWID;
		}

		return $this;
	} // setRowid()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Abstore The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = AbstorePeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [externalidentifier] column.
	 * 
	 * @param      string $v new value
	 * @return     Abstore The current object (for fluent API support)
	 */
	public function setExternalidentifier($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->externalidentifier !== $v) {
			$this->externalidentifier = $v;
			$this->modifiedColumns[] = AbstorePeer::EXTERNALIDENTIFIER;
		}

		return $this;
	} // setExternalidentifier()

	/**
	 * Set the value of [type] column.
	 * 
	 * @param      string $v new value
	 * @return     Abstore The current object (for fluent API support)
	 */
	public function setType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->type !== $v) {
			$this->type = $v;
			$this->modifiedColumns[] = AbstorePeer::TYPE;
		}

		return $this;
	} // setType()

	/**
	 * Set the value of [constraintspath] column.
	 * 
	 * @param      string $v new value
	 * @return     Abstore The current object (for fluent API support)
	 */
	public function setConstraintspath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->constraintspath !== $v) {
			$this->constraintspath = $v;
			$this->modifiedColumns[] = AbstorePeer::CONSTRAINTSPATH;
		}

		return $this;
	} // setConstraintspath()

	/**
	 * Set the value of [externalmodificationtag] column.
	 * 
	 * @param      string $v new value
	 * @return     Abstore The current object (for fluent API support)
	 */
	public function setExternalmodificationtag($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->externalmodificationtag !== $v) {
			$this->externalmodificationtag = $v;
			$this->modifiedColumns[] = AbstorePeer::EXTERNALMODIFICATIONTAG;
		}

		return $this;
	} // setExternalmodificationtag()

	/**
	 * Set the value of [storeinternalidentifier] column.
	 * 
	 * @param      string $v new value
	 * @return     Abstore The current object (for fluent API support)
	 */
	public function setStoreinternalidentifier($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->storeinternalidentifier !== $v) {
			$this->storeinternalidentifier = $v;
			$this->modifiedColumns[] = AbstorePeer::STOREINTERNALIDENTIFIER;
		}

		return $this;
	} // setStoreinternalidentifier()

	/**
	 * Set the value of [accountidentifier] column.
	 * 
	 * @param      string $v new value
	 * @return     Abstore The current object (for fluent API support)
	 */
	public function setAccountidentifier($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->accountidentifier !== $v) {
			$this->accountidentifier = $v;
			$this->modifiedColumns[] = AbstorePeer::ACCOUNTIDENTIFIER;
		}

		return $this;
	} // setAccountidentifier()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->rowid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->externalidentifier = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->type = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->constraintspath = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->externalmodificationtag = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->storeinternalidentifier = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->accountidentifier = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 8; // 8 = AbstorePeer::NUM_COLUMNS - AbstorePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Abstore object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AbstorePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AbstorePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseAbstore:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AbstorePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			AbstorePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseAbstore:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseAbstore:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AbstorePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseAbstore:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			AbstorePeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = AbstorePeer::ROWID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = AbstorePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setRowid($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += AbstorePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = AbstorePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AbstorePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getRowid();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getExternalidentifier();
				break;
			case 3:
				return $this->getType();
				break;
			case 4:
				return $this->getConstraintspath();
				break;
			case 5:
				return $this->getExternalmodificationtag();
				break;
			case 6:
				return $this->getStoreinternalidentifier();
				break;
			case 7:
				return $this->getAccountidentifier();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = AbstorePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getRowid(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getExternalidentifier(),
			$keys[3] => $this->getType(),
			$keys[4] => $this->getConstraintspath(),
			$keys[5] => $this->getExternalmodificationtag(),
			$keys[6] => $this->getStoreinternalidentifier(),
			$keys[7] => $this->getAccountidentifier(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AbstorePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setRowid($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setExternalidentifier($value);
				break;
			case 3:
				$this->setType($value);
				break;
			case 4:
				$this->setConstraintspath($value);
				break;
			case 5:
				$this->setExternalmodificationtag($value);
				break;
			case 6:
				$this->setStoreinternalidentifier($value);
				break;
			case 7:
				$this->setAccountidentifier($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AbstorePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setRowid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setExternalidentifier($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setType($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setConstraintspath($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setExternalmodificationtag($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStoreinternalidentifier($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAccountidentifier($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AbstorePeer::DATABASE_NAME);

		if ($this->isColumnModified(AbstorePeer::ROWID)) $criteria->add(AbstorePeer::ROWID, $this->rowid);
		if ($this->isColumnModified(AbstorePeer::NAME)) $criteria->add(AbstorePeer::NAME, $this->name);
		if ($this->isColumnModified(AbstorePeer::EXTERNALIDENTIFIER)) $criteria->add(AbstorePeer::EXTERNALIDENTIFIER, $this->externalidentifier);
		if ($this->isColumnModified(AbstorePeer::TYPE)) $criteria->add(AbstorePeer::TYPE, $this->type);
		if ($this->isColumnModified(AbstorePeer::CONSTRAINTSPATH)) $criteria->add(AbstorePeer::CONSTRAINTSPATH, $this->constraintspath);
		if ($this->isColumnModified(AbstorePeer::EXTERNALMODIFICATIONTAG)) $criteria->add(AbstorePeer::EXTERNALMODIFICATIONTAG, $this->externalmodificationtag);
		if ($this->isColumnModified(AbstorePeer::STOREINTERNALIDENTIFIER)) $criteria->add(AbstorePeer::STOREINTERNALIDENTIFIER, $this->storeinternalidentifier);
		if ($this->isColumnModified(AbstorePeer::ACCOUNTIDENTIFIER)) $criteria->add(AbstorePeer::ACCOUNTIDENTIFIER, $this->accountidentifier);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AbstorePeer::DATABASE_NAME);

		$criteria->add(AbstorePeer::ROWID, $this->rowid);
		$criteria->add(AbstorePeer::TYPE, $this->type);

		return $criteria;
	}

	/**
	 * Returns the composite primary key for this object.
	 * The array elements will be in same order as specified in XML.
	 * @return     array
	 */
	public function getPrimaryKey()
	{
		$pks = array();

		$pks[0] = $this->getRowid();

		$pks[1] = $this->getType();

		return $pks;
	}

	/**
	 * Set the [composite] primary key.
	 *
	 * @param      array $keys The elements of the composite key (order must match the order in XML file).
	 * @return     void
	 */
	public function setPrimaryKey($keys)
	{

		$this->setRowid($keys[0]);

		$this->setType($keys[1]);

	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Abstore (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setName($this->name);

		$copyObj->setExternalidentifier($this->externalidentifier);

		$copyObj->setType($this->type);

		$copyObj->setConstraintspath($this->constraintspath);

		$copyObj->setExternalmodificationtag($this->externalmodificationtag);

		$copyObj->setStoreinternalidentifier($this->storeinternalidentifier);

		$copyObj->setAccountidentifier($this->accountidentifier);


		$copyObj->setNew(true);

		$copyObj->setRowid(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Abstore Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     AbstorePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AbstorePeer();
		}
		return self::$peer;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseAbstore:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseAbstore::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseAbstore
