<?php
declare(strict_types=1);

namespace Porthorian\CacheEntity\Tests;

use Porthorian\CacheEntity\CacheEntity;
use Porthorian\Utility\Time\TimeCodes;

class TestEntity extends CacheEntity
{
	public function getEntityCacheTime() : int
	{
		return TimeCodes::ONE_HOUR;
	}

	public function getCollectionTable() : string
	{
		return 'cache_test';
	}

	public function getCollectionPrimaryKey() : string
	{
		return 'TESTID';
	}

	public function getModelPath() : string
	{
		return '\Porthorian\CacheEntity\Tests\TestModel';
	}
}
