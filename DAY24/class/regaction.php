<?php
  class contact{
   public $conn;
      public function __construct(){
          $servername = "localhost";
          $username = "root";
          $password = "";
          $db       = "myprofile";
          //create connection
          $this->conn = new mysqli($servername,$username,$password,$db);
          if($this->conn->connect_error){
              die("connection failed".$this->conn->connect_error);
          }
          else {
              echo "succcessfull";
          }
      }

      public function insertIntoTable($name,$email,$country,$message)
      {
          if($name != "" || $email != "" || $country != "" ||$message != "")
          {
              $sql = "INSERT INTO  contacts(name,email,country,message)VALUSE('$name',$email,$country,$message)";
              if($this->conn->query($sql))
              {
                echo "new records are added";
              }
              echo "something wrong with insertion";
          }

      }







  }


//$obj = new contact;
//$obj->insertIntoTable($name,$email,$country,$message);
?>