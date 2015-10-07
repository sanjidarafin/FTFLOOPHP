<?php
include "C:/xampp/htdocs/Training/PHP/functions.php";
class MyString{
    public $string;
    function MyStrRev()
    {
        return strRevFunction($this->string);
    }


}
$myString = new MyString;
$myString->string = "sanjida";
echo "string reverse is : ".$myString->MyStrRev();
?>