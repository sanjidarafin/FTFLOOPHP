<?php

include "C:/xampp/htdocs/Training/PHP/functions.php";
    class MyString{
        public $string;
        function myExplode()
        {
           return myExplode($this->string);

        }

    }
   $mystring = new MyString;
   $mystring->string = "sanjida rafin";
   print_r($mystring-> myExplode());
?>