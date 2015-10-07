<?php

     include "C:/xampp/htdocs/Training/PHP/functions.php";

        // method
        function isPhoneNumber($phoneNumber)
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

        class Person
        {
            //property
            public $name = "";
            public $email = "";
            public $PhoneNumber = "";


            function setPhoneNumber($phoneNumber)
            {
                if(isPhoneNumber($phoneNumber.'0'))
                {
                    $this->PhoneNumber = $phoneNumber ;
                }
                else
                {
                    echo "Please provide a valid phone number";
                }

            }
        }

        $Person1 = new Person;




        class Guest extends person{
            public  $IndianphoneNumber = "";

            function setIndianPhoneNumber($phoneNumber)
            {
                if(isPhoneNumber($phoneNumber.'0'))
                {
                    $this->IndianphoneNumbe= $phoneNumber ;
                }
                else
                {
                    echo "Please provide a valid phone number";
                }

            }


        }
    $indian = new Guest;
    $indian->name = "Vasanth Sai";
    $indian->email = "vasanthcybereye@gmail.com";
    $indian->PhoneNumber = "0088000918";
    $indian->IndianphoneNumber = "00088080858";


    echo $indian->name."<br>";
    echo $indian->email."<br>";
    echo $indian->PhoneNumber."<BR>";
    echo $indian->IndianphoneNumber;
?>