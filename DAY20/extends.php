<?php
   class Card{
       public     $name        = "gordob";
       protected  $cardNumber  = "anda";
       private    $maxBalance   = "000000000";

       function maxBalanceCard()
       {
           echo  $this->maxBalance;
       }
   }
         class Platinum extends Card{
             function cardNumber(){

                 echo $this->cardNumber;
             }
             function balance(){

                 echo $this->maxBalance;//can not access private property
             }


         }

    $myCard = new Card;
    echo $myCard->name."<br>";
    echo $myCard->maxBalanceCard()."<br>";



    $myPlatinum = new Platinum;
    echo $myPlatinum->cardNumber();
    echo $myPlatinum->balance();


?>