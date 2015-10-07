<?php

    include "C:/xampp/htdocs/Training/PHP/functions.php";
    class MyString{
        public $string = "";
        //string length function
        function MyStrLen()
        {
            return myStringLength($this->string);
        }

        //reverse function
        function MyStrRev()
        {
            return strRevFunction($this->string);
        }
        //lower to upper
        function MyToUpperCase()
        {
            return lowerToUpper($this->string);
        }
        //upper to lower
        function MyToLowerCase()
        {
            return upperToLower($this->string);
        }
        //my explode function

        function MyExplode(){
            return myExplode($this->string);

        }
    }
    $myString = new MyString();
    $myString->string = "sanjida rafin";


    echo  "String length is: ".$myString->MyStrLen()."<br>";

    echo  "String reverse is: ".$myString->MyStrRev()."<br>";

    echo "String lower case is: ".$myString->MyToUpperCase()."<br>";

    echo "String upper case is: ".$myString->MyToLowerCase()."<br>";

      print_r($myString-> MyExplode());










?>