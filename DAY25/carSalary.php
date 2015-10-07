<?php

class employeeClass
{
    public $conn;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "company";
        //mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
        //mysql_select_db($dbname) or die('database selection problem');

        $this->conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
       // echo "Connected successfully";
    }

    public function selectEmployeesCar($empId, $carId)
    {
       // echo $empId;
       // echo $carId;
        //$sql = "SELECT name, salary FROM employee_info WHERE id = $empId";
        $sql = "SELECT name,salary FROM employee_info WHERE id = $empId";
        $res = $this->conn->query($sql);
         $car_sql = "SELECT car_name, company FROM car WHERE id = $carId";
         $car_res = $this->conn->query($car_sql);
         if(($res->num_rows > 0)&& ($car_res->num_rows > 0))
         {
             while(($row=$res->fetch_assoc()) && ($car_row=$car_res->fetch_assoc()))
             {
                 echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$car_row['car_name']}</td><td>{$car_row['company']}</td></tr>";
             }
         }
     }

     public function dropDown()
     {
         $sql = "SELECT * FROM car";
         $res = $this->conn->query($sql);
         if($res->num_rows > 0)
         {
             while($row=$res->fetch_assoc())
             {
                 return "<option value='1'> {$row['name']} </option>";
             }
         }
     }

     public function close()
     {
         $this->conn->close();
     }


}
?>
