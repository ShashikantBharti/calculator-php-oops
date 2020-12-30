<?php
/**
 * Calculator with oops concept on php.
 * 
 * PHP Version 7
 * 
 * @category   Calculator
 * @package    CEDCOSS
 * @subpackage Calculator
 * @author     Shashikant Bharti <surya.indian321@gmail.com>
 * @license    https://cedcoss.com/ CEDCOSS 2020
 * @link       http://127.0.0.1/training/calculator/
 */


/**
 * Class Calculator.
 * 
 * PHP Version 7
 * 
 * @category   Calculator
 * @package    CEDCOSS
 * @subpackage Calculator
 * @author     Shashikant Bharti <surya.indian321@gmail.com>
 * @license    https://cedcoss.com/ CEDCOSS 2020
 * @link       http://127.0.0.1/training/calculator/
 */

class Calculator
{

    /**
     * Addition.
     * 
     * @param $a First Variable.
     * @param $b Second Variable.
     * 
     * @return sum
     */
    public function add( $a = '', $b = '' )
    {
        return ( $a + $b );
    }

    /**
     * Substraction.
     * 
     * @param $a First Variable.
     * @param $b Second Variable.
     * 
     * @return difference
     */
    public function subtract( $a = '', $b = '' )
    {
        return ( $a - $b );
    }

    /**
     * Product.
     * 
     * @param $a First Variable.
     * @param $b Second Variable.
     * 
     * @return product
     */
    public function product( $a = '', $b = '' )
    {
        return ( $a * $b );
    }

    /**
     * Addition.
     * 
     * @param $a First Variable.
     * @param $b Second Variable.
     * 
     * @return number
     */
    public function divide( $a = '', $b = '' )
    {
        return ( $a / $b );
    }

    /**
     * Reminder.
     * 
     * @param $a First Variable.
     * @param $b Second Variable.
     * 
     * @return reminder
     */
    public function reminder( $a = '', $b = '' )
    {
        return ( $a % $b );
    }

}


?>