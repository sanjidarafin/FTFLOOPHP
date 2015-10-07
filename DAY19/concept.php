<?php

 include "C:/xampp/htdocs/Training/PHP/functions.php";

class Person
     {
        //property
        public $name = "PHP";
        public $email = "php.net";
        public $PhoneNumber = "01XXXXXXXXX ";


        function setPhoneNumber($phoneNumber)
        {
            if(isBDPhoneNumber($phoneNumber))
            {
                $this->PhoneNumber= $phoneNumber ;
            }
            else
            {
              echo "Please provide a valid phone number";
            }

        }
    }
  // instantiation of class in object
       $Person1 = new Person;
       $Person1->name = "HTML"."<br>";
       echo  $Person1->name;



        echo  $Person1->PhoneNumber = "01739323923 ";








        function isBDPhoneNumber($phoneNumber)
        {
            $phoneNumber = "01718984018";
            $len = myStringLength($phoneNumber);
            if($len == 11)
            {
                for ($i = 0; $i < $len; $i++)
                {
                    if (($phoneNumber[$i] < '0') || ($phoneNumber[$i] > '9'))
                    {
                        return false;
                    }
                }
                return true;
            }
            else
            {
                return false;
            }

        }
        $result = isBDPhoneNumber($phoneNumber);
        echo $result;


?>