<?php

// My calculator function
function calculator($number1,$number2, $operator)  {



    if($operator == "+")
    {

        $result = $number1 + $number2;
        echo "Result of addition is ".$result;
    }

    elseif($operator == "-")
    {

        $result = $number1 - $number2;
        echo "Result of subtraction is ".$result;
    }

    elseif($operator == "*")
    {

        $result = $number1 * $number2;
        echo "Result of multiplication is ".$result;
    }

    elseif($operator == "/")
    {

        $result = $number1 / $number2;
        echo "Result of division is ".$result;
    }
    elseif($operator == "%")
    {

        $result = $number1 % $number2;
        echo "Result of reminder is ".$result;
    }


    else
    {


        echo "Enter your number ";
    }

    return  $result;
}



?>