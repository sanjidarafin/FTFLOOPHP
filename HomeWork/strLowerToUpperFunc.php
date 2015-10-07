<?php
include "C:/xampp/htdocs/Training/PHP/functions.php";
class MyString{
    public $string;
    function  MyToUpperCase()
    {
        return lowerToUpper($this->string);
    }


}
$myString = new MyString;
$myString->string = "sanjida";
echo "string lower to upper case is : ".$myString->MyToUpperCase();
?>