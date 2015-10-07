<?php
     require_once("connect.php");
    $nameErr = $name =$email = $country = $message = "";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {

       if (isset($_POST["name"])) {
          $name = $_POST["name"];
       } else {

           echo $nameErr = "Name is required<br>";
       }

         if(isset($_POST["email"])){
            $email = $_POST["email"] ;
         }else {
             echo $nameErr = "Email is required";
         }

         if(isset($_POST["country"])){
            $country = $_POST["country"] ;
         }else{
             echo $nameErr = "country is required";
         }

         if(isset($_POST["message"])){
             $message = $_POST["message"] ;
         }else{
             echo $nameErr = "message is required";
         }

   }

    if(!$nameErr){
        $sql = "INSERT INTO contacts(name,email,country,message)
        VALUES('$name','$email','$country','$message')";
        if($conn->query($sql) == TRUE)
        {
            echo "New record created successfully".$conn->insert_id;
        }
        else
        {
            echo  "Error: ".$sql."<br>".$conn->error;
        }


    }else{
        echo "Access denied";
    }

?>