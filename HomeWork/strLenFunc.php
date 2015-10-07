<?php
    include "C:/xampp/htdocs/Training/PHP/functions.php";
    class MyString{
      public $string;
        function MyStrLen()
        {
            return myStringLength($this->string);
        }


    }
   $myString = new MyString;
   $myString->string = "sanjida";
   echo "string length is : ".$myString->MyStrLen();
?>