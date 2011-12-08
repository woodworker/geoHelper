<?php
namespace de\prolope\geoHelper\geometry;


require_once '/home/woodworker/TMP/geoHelper/src/geometry/Point.php';

/**
 * Test class for Point.
 * Generated by PHPUnit on 2011-12-08 at 10:22:00.
 */
class PointTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Point
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Point;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers {className}::{origMethodName}
     * @todo Implement testDimension().
     */
    public function testDimension()
    {
	$this->object->x = 1;
	$this->object->x = 1;

	$this->assertEquals( $this->object->dimension() , 2 );

	$this->object->z = 1;
	$this->assertEquals( $this->object->dimension() , 3 );
    }
}
?>
