<?php

/**class Calculator {
public function calc($op, $x, $y) {
    
    switch($op) {
        case '+':
            $prod = "The sum of the numbers is ". $x + $y;
            break;
        case '-':
            $prod = "The difference of the numbers is ". $x - $y;
            break;
        case '*':
            $prod = "The product of the numbers is ". $x * $y;
            break;
        case '/':
            if ($y == 0) {$prod = "Cannot divide by zero";}
            else {$prod = "The division of the numbers is ". $x / $y;}
            break;
    

    // do return your result AFTER the switch. else you will not get any results in most cases
    return $prod;
    }
    
}**/
    
class Calculator {
    public function calc($op = NULL, $x = NULL, $y = NULL)
    {  
         if ($op == NULL) {
            $prod = "You must enter a string and two numbers";
        } if ($x == NULL) {
            $prod = "You must enter a string and two numbers";
        } if ($y == NULL) {
            $prod = "You must enter a string and two numbers";
        }  if ($op == "+") {
            $prod = "The sum of the numbers is ". $x + $y;
        } if ($op == "-") {
            $prod = "The difference of the numbers is ". $x - $y;
        } if ($op == "*") {
            if ($y == NULL) {$prod = "You must enter a string and two numbers";}
            else {$prod = "The product of the numbers is ". $x * $y;}
        } if ($op == "/") {
            if ($y == 0) {$prod = "Cannot divide by zero";}
            else {$prod = "The division of the numbers is ". $x / $y;}
        }
        return $prod;
    }

}






?>