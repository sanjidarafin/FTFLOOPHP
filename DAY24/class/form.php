<?php
   
   
    if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$country = $_POST['country'];
		$message = $_POST['message'];
	
	}
    else
	{
		echo "Please fill the form first";
	}	
?>

<form align ="center" action="connectDB.php" method="post">
   
   Name: <input type="text" name="name"><br><br>
   
   Email: <input type="text" name="email"><br><br>
   
	   <select name="country">
		  <option value="BD">Bangladesh</option>
		  <option value="india">India</option>
		  <option value="japan">Japan</option>
		  <option value="nepal">Nepal</option>
		</select>
		<br><br>	
	
	Message: <textarea name="message" rows="10" cols="30"></textarea><br><br>
	
	<input type="submit" name="Submit" value="Insert"/>
  
</form>