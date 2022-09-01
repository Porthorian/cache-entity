<?php
declare(strict_types=1);

namespace Porthorian\CacheEntity;

use Porthorian\EntityOrm\Entity;
use Porthorian\EntityOrm\EntityException;
use Porthorian\EntityOrm\Model\ModelInterface;

abstract class CacheEntity extends Entity
{
	/**
	 * The amount of time in seconds the Entity is going to live in the cache.
	 */
	abstract public function getEntityCacheTime() : int;

	/**
	 * Houses the namespace path to the model for the entity
	 */
	abstract public function getModelPath() : string;

	/**
	 * The collection that we will be manipulating
	 */
	abstract public function getCollectionTable() : string;

	/**
	 * Primary key for the collection table
	 */
	abstract public function getCollectionPrimaryKey() : string;

	/**
	 * The cache collection
	 */
	public function getCollectionName() : string
	{
		return 'cache';
	}

	public function store() : ModelInterface
	{

	}

	public function update(array $params = []) : void
	{

	}

	public function delete() : void
	{

	}

	public function find(string|int $pk_value) : ModelInterface
	{

	}
}
