package com.horobeanu.algorithms.arrays;

import java.math.BigInteger;
import java.util.*;
import java.util.Map.Entry;
/**
 * This class contains various methods for manipulating arrays.
 *
 * Provides methods for manipulating arrays.
 *
 * @category   Algorithms
 * @package    com.horobeanu.algorithms.arrays
 * @author     Daniel Horobeanu <horobeanu@yahoo.com>
 * @link       http://
 */
public class JavaArrayAlgorithms {

    /**
     * Removes duplicate entries from a HashMap, 
     * preserving the keys (first key in duplicate case)
     * and returns that array(duplicate free).
     * Two values are considered duplicate if they have the same type and value. 
     *
     * @param HashMap map
     * @return HashMap
     */
    public static HashMap removeHasMapDuplicates(HashMap<Object, Object> map) {
        HashMap<Object, Object> newMap = new HashMap<>();
        
        for (Entry<Object, Object> e : map.entrySet()) {
            Object key   = (Object)e.getKey();
            Object value = (Object)e.getValue();
            if ( ! newMap.containsValue(value)) {
                newMap.put(key, value);
            }
        }
        
        return newMap;
   }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        HashMap<Object, Object> myMap = new HashMap<>();
        myMap.put("1", "1");
        myMap.put("2", "1");
        myMap.put("3", "2");
        myMap.put("40", new BigInteger("123213"));
        myMap.put("50", new BigInteger("123213"));
        myMap.put("6", new BigInteger("123213234324324"));

        HashMap result = JavaArrayAlgorithms.removeHasMapDuplicates(myMap);
        Iterator iterator = result.keySet().iterator();  

        while (iterator.hasNext()) {  
           String key = iterator.next().toString();  
           String value = result.get(key).toString();  

           System.out.println(key + " " + value);  
        }  
    }
}
