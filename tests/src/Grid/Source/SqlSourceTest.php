<?php
/**
 * @copyright Bluz PHP Team
 * @link https://github.com/bluzphp/skeleton
 */

/**
 * @namespace
 */
namespace Bluz\Tests\Grid\Source;

use Bluz\Grid\Source\SqlSource;
use Bluz\Tests\TestCase;
use Bluz\Tests\Grid\Fixtures\SqlGrid;

/**
 * @package  Bluz\Tests
 * @author   Anton Shevchuk
 * @created  07.08.14 14:37
 */
class GridTest extends TestCase
{
    /**
     * Setup Application
     */
    public function setUp()
    {
        parent::setUp();
        $this->getApp();
    }

    /**
     * SQL Source
     */
    public function testSqlGrid()
    {
        $grid = new SqlGrid();
        $this->assertEquals(5, $grid->pages());
        $this->assertEquals(42, $grid->total());
    }

    /**
     * SQL Source Exception
     * @expectedException \Bluz\Grid\GridException
     */
    public function testSqlSourceThrowsGridException()
    {
        $adapter = new SqlSource();
        $adapter->setSource(['wrong source type']);
    }
}