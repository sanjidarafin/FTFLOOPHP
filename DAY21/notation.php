<html xmlns="http://www.w3.org/1999/html">
        <body>
            <form action = "notation.php" method = "post">
                <input type = "text" name = "value"/>
                <button type = "text" valur = "submit" >submit</button>
            </form>
        </body>
   </html>



<?php
        include "C:/xampp/htdocs/Training/PHP/functions.php";
        include "C:/xampp/htdocs/Training/OOPHP/pochastack.php";
          $expression = "30 44 -45 61 - +";
          $exArray = explode(" ",$expression);
            echo "<pre>";
            print_r($exArray);
           echo "</pre>";
          $ownStack = new Stack;

            foreach($exArray as $op)
            {


                $temp = intval($op);

                echo "</pre>";
                if($temp)
                {

                    $myStack->push($temp);
                    echo "<pre>";
                    print_r($myStack);
                    echo "</pre>";

                }else
                {

                    $op2 = $myStack->pop();
                    $op1 = $myStack->pop();
                    echo "<br>",$op1," ",$op2," ",$op,"<br>";
                    $myresult = calculator($op1,$op2,$op);
                    echo  "<br>".$myresult."<br>";

                    $myStack->push($myresult);
                    echo "<pre";
                    print_r($myStack);
                    echo "</pre>";



                }
            }

            echo "Result is ". $myStack->pop();
?>