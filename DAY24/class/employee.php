<html>

<?php
    class employeeCar{
        public $conn;
        public function __construct()
        {

            $servername = "localhost";
            $username  = "root";
            $password  = "";
            $db       = "myprofile";
            //create connection
            $this->conn = new mysqli($servername,$username,$password, $db);

            //check connection
            if($this->conn->connect_error)
            {
                die("connection failed".$this->conn->connect_error);
            }
            echo "Connected successfully";

        }

        public function insertIntoTable($name,$email,$country){


            $sql = "INSERT INTO contacts(name,email,country) VALUES
		       ('$name','$email','$country')";

            if($this->conn->query($sql)===TRUE)
            {
                return "New record create sucessfully"."<br>";

                return $this->conn->insert_id;
            }
            else
            {
                return "Error: " .$sql . "<br>";

                return $this->conn->error;
            }

        }


      /*
        public function selectFromTable(){

            $sql = "SELECT * FROM contacts";
            $result = $this->conn->query($sql);
            echo "<pre>";
            print_r($result);
            echo "</pre>";

            if($result->num_rows>0)
            {
                //output data of each row
                while($row = $result->fetch_assoc())
                {
                    echo "id: " . $row["id"]."<br>";
                    echo "Name: " . $row["name"]."<br>";
                    echo "Email: " . $row["email"]."<br>";
                    echo "Country: " . $row["country"]."<br>";
                    echo "PhoneNumber: " . $row["phoneNumber"]."<br>";
                    echo "<br>";
                }
            }
            else
            {
                echo "Error";
            }
        }


        public function close()
        {
            $this->conn->close();
        }
      */
    }



?>