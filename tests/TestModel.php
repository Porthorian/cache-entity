<?php
declare(strict_types=1);

namespace Porthorian\CacheEntity\Tests;

use Porthorian\EntityOrm\Model\Model;

class TestModel extends Model
{
	public function toArray() : array
	{
		return [];
	}

	public function toPublicArray() : array
	{
		return [];
	}

	public function setPrimaryKey(string|int $pk_value) : void
	{

	}

	public function getPrimaryKey() : string|int
	{

	}

	public function getEntityPath() : string
	{
		return '\Porthorian\CacheEntity\Tests\TestEntity';
	}
}
