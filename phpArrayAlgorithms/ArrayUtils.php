<?php
namespace phpArrayAlgorithms;

/**
 * This class contains various methods for manipulating arrays.
 *
 * Provides methods for manipulating arrays.
 *
 * @category   Algorithms
 * @package    ArrayAlgorithms
 * @author     Daniel Horobeanu <horobeanu@yahoo.com>
 * @link       http://
 */
class ArrayUtils
{

    /**
     * Removes duplicate entries from an associative array, 
     * preserving the keys (first key in duplicate case)
     * and returns that array(duplicate free).
     * Two values are considered duplicate if they have the same type and value. 
     *
     * @param array $array
     * @return array
     * @throws \InvalidArgumentException
     */
    public static function removeDuplicates($array)
    {
        if (!is_array($array)) {
            throw new \InvalidArgumentException('Invalid $array parameter type. "array" type required and "'
                    . gettype($array) . '" found.');
        }

        $newArray = array();
        foreach ($array as $key=>$value) {
            if (!self::hasValue($newArray,$value)) {
                $newArray[$key] = $value;
            }
        }

        return $newArray;
   }

   /**
    * Checks if an array contains a value.
    * The array contains $checkValue if at least one value have the same type and value. 
    * 
    * @param array $array
    * @param mixed $checkValue
    * @return boolean
    */
   public static function hasValue(array $array, $checkValue)
   {
       foreach ($array as $key=>$value) {
           if ($value === $checkValue) {
               return true;
           }
       }
       return false;
   }
   
   
   /**
     * Removes recursively duplicate entries from an associative array, 
     * preserving the keys (first key in duplicate case)
     * and returns that array(duplicate free).
     * Two values are considered duplicate if they have the same type and value. 
     *
     * @param array $array
     * @return array
     * @throws \InvalidArgumentException
     */
    public static function recursivelyRemoveDuplicates($array)
    {
        // @TODO
        return $array;
   }
}