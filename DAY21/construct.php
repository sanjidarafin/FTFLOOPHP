<?php

        class Person
        {
            public $name = "";

            public function __construct($name)
            {

                echo "My class is ".__class__;
                $this->name = $name;
            }
            public function setName($name)
            {

                $this->name = $name;
            }
            public function printName()
            {

                echo $this->name;
            }


        }
         $person1 = new Person("PHP");
         echo $person1->name;
         $person1->printName();
?>