<?php
include "C:/xampp/htdocs/Training/PHP/functions.php";
class MyString{
    public $string;
    function MyToLowerCase()
    {
        return upperToLower($this->string);
    }


}
$myString = new MyString;
$myString->string = "sanJiDa";
echo "string length is : ".$myString->MyToLowerCase();
?>