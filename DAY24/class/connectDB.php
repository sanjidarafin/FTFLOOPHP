<?php
  
  include "contactClass.php";
  
  include "form.php";
  
        $name = $_POST['name'];
		$email = $_POST['email'];
		$country = $_POST['country'];
		$message = $_POST['message'];
	
    	
  
   $cdb = new Contact;
   
   $cdb->insertInto($name,$email,$country,$message);
   
   $cdb->close();
?>

