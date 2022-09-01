<?php
declare(strict_types=1);

namespace Porthorian\CacheEntity\Tests\Suite;

use PHPUnit\Framework\TestCase;
use Porthorian\CacheEntity\Tests\TestEntity;
use Porthorian\CacheEntity\Tests\TestModel;

class CacheEntityTest extends TestCase
{
	public function testStore()
	{
		$entity = new TestEntity();
		$model = new TestModel();
	}
}
