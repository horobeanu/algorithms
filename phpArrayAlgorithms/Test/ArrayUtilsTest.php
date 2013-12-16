<?php
namespace phpArrayAlgorithms\Test;
use phpArrayAlgorithms\ArrayUtils;

/**
 * ArrayUtils Unit Test.
 *
 * @category   Algorithms
 * @package    ArrayAlgorithms
 * @author     Daniel Horobeanu <horobeanu@yahoo.com>
 * @link       http://
 */
class ArrayUtilsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testRemoveDuplicatesException()
    {
        ArrayUtils::removeDuplicates(1);
    }
    
    /**
     * Removes duplicate entries from an associative array, 
     * preserving the keys (first key in duplicate case)
     * and returns that array(duplicate free).
     * Two values are considered duplicate if they have the same type and value. 
     */
    public function testRemoveDuplicates()
    {
        $initialArray = array(  '3'  => '2',
                                '1'  => '2',
                                '2'  => 'ad',
                                '3a' => '5',
                                '3a' => '9',
                                'z',
                                'z',
                                'z',
                                'arr1' => array(1, 2),
                                'arr2' => array(2, 1),
                                'arr4' => array(1, 1),
                                'arr3' => array(1, 1),
                                'arr5' => array(1=>1, '0'=>1),
            );
        $noDuplicatesArray = array( '3'  => '2',
                                    '2'  => 'ad',
                                    '3a' => '9',
                                    'z',
                                    'arr1' => array(1, 2),
                                    'arr2' => array(2, 1),
                                    'arr4' => array(1, 1),
                                    'arr5' => array(1=>1, '0'=>1),
            );
        
        $resultArray = ArrayUtils::removeDuplicates($initialArray);
        $this->assertEquals($noDuplicatesArray, $resultArray);
    }
    
    /**
     * Checks if an array contains a value.
     * The array contains $checkValue if at least one value have the same type and value. 
     */
    public function testHasValue()
    {
        $initialArray = array(  '3'  => '2',
                                '1'  => '2',
                                '2'  => 'ad',
                                '3a' => '5',
                                '3a' => '9',
                                'z',
                                'z',
                                'z',
                                'arr1' => array(1, 2),
                                'arr2' => array(2, 1),
                                'arr4' => array(1, 1),
                                'arr3' => array(1, 1),
                                'arr5' => array(1=>1, '0'=>1),
            );
        $result = ArrayUtils::hasValue($initialArray,'ad');
        $this->assertEquals(true, $result);
        
        $result = ArrayUtils::hasValue($initialArray,'a');
        $this->assertEquals(false, $result);
        
        $result = ArrayUtils::hasValue($initialArray,'z');
        $this->assertEquals(true, $result);
        
        $result = ArrayUtils::hasValue($initialArray,array(1, 1));
        $this->assertEquals(true, $result);
    }
}