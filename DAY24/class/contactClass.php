<?php
   
   class Contact{
	   
	   public $conn;
	   
	   public function __construct()
	   {
		  
		  $servername = "localhost";
	      $username = "root";
	      $password = "";
	      $db = "myprofile";

		//create connection
		$this->conn = new mysqli($servername,$username,$password,$db);

			//check connection
			if($this->conn->connect_error)
			{
				die("Connection failed: " . $this->conn->connect_error);
			}
			echo "Connected Successfully","<br>";
	  }
	  
	   public function insertInto($name,$email,$country,$message)
	   {
		   if($name != ' ' || $email != ' ' || $country !=' ' || $message !=' ')
		   {			   
		      $sql = "INSERT INTO contacts (name,email,country,message) VALUES
					 ('$name','$email','$country','$message')";
								
				if($this->conn->query($sql)===TRUE)
				{
					return "New record create sucessfully" . $this->conn->insert_id;
				}
				else
				{
					return "Error: " .$sql . "<br>" . $this->conn->error;
				}
				return $sql;
		   }				
		}
		
		public function close()
		{
			$this->conn->close();
	    }
   }
?>