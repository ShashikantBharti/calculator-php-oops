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

require 'calculator.inc.php';

$calc = new Calculator;

$num1 = (float)$_REQUEST['num1'];
$num2 = (float)$_REQUEST['num2'];

switch($_REQUEST['opr']) {
case '+': 
    echo $calc->add($num1, $num2);
    break;
case '-': 
    echo $calc->subtract($num1, $num2);
    break;
case '*': 
    echo $calc->product($num1, $num2);
    break;
case '/': 
    echo $calc->divide($num1, $num2);
    break;
}

?>