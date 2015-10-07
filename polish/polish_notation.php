<?php

 //include "C:/xampp/htdocs/LearningPHP/PHP/myFunction/explode_functions.php";
 include "C:/xampp/htdocs/Training/PHP/functions.php";
 include "stack2.php";
 
 if (isset($_POST['exp'])){
	 
	$expression = $_POST['exp'];
	$expArray = explode(" ",$expression);
	
	echo "<pre>";
	print_r($expArray);
	echo "</pre>";
	
    $myStack = new Stack;
 
		 foreach($expArray as $op)
		 {  
			
			 $temp = intval($op);
			
			 if($temp){
				 
				 $myStack->push($temp);
				 
				 echo "<pre>";
	               print_r($myStack);
	             echo "</pre>";
				 
			 }
			 else{
				 
				 $op2 = $myStack->pop();
				 $op1 = $myStack->pop();
				 
				 echo "<br>",$op1," ",$op2," ",$op,"<br>";
				 $result = calculator($op1,$op2,$op);
				 
				 echo "<br>",$result,"<br>";
				 $myStack->push($result);
				 
				 echo "<pre>";
	               print_r($myStack);
	             echo "</pre>";
			 }
		 }
 
 echo "Result is: ",$myStack->pop();
 }
 
?>

<form action="polish_notation.php" method="post">
    Enter an expression:
   <input type="text" name="exp">
   <br>
   <button type="submit">Submit</button>

</form>
