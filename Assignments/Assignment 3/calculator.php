<?php

class Calculator
{

    public static function calc($operator, $firstNum = "empty", $secondNum = "empty")
    {
        if($firstNum == "empty" || $secondNum == "empty")
        {
            return "You must enter a string and two numbers </br>";
        }
        if($operator == '+')
        {
            return "The sum of the numbers is " . ($firstNum + $secondNum). "</br>";
        }
        else if($operator == '-')
        {
            return "The difference of the numbers is " . ($firstNum - $secondNum). "</br>";
        }
        else if($operator == '*')
        {
            return "The product of the numbers is " . ($firstNum * $secondNum)."</br>";
        }
        else if($operator == '/')
        {
            if($secondNum == 0)
            {
                return "Cannot divide by zero </br>";
            }
            return "The division of the numbers is " . ($firstNum / $secondNum)."</br>";
        }
        else
        {
            return "You did not enter a valid operator </br>";
        }
    }


}

?>