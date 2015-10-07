
<?php
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"]."";
        $country = $_POST["country"]."\n";
        $phone = $_POST["phone"]."\n";
      echo "\n";
        $file = fopen("suborna.txt","a+");
        fwrite($file,$name)."<br>";
        fwrite($file,$email)."<br>";
        fwrite($file,$country)."<br>";
        fwrite($file,$phone);
        fclose($file);


    }
    else
    {
        echo " not submitted";
    }
?>


<html xmlns="http://www.w3.org/1999/html">

    <form action = "reggister.php" method = "post">

        Name: <input type = "text" name = "name" placeholder = "Your name"/> <br/><br/>
        E-mail: <input type = "text" name = "email" placeholder = "Your email"/><br/><br/>
        Country: <input type = "text" name = "country" placeholder = "Your country"/><br/><br/>
        Phone: <input type = "text" name = "phone" placeholder = "Your number"/>
        <button type = "submit" name = "submit">submit</button>
    </form>

</html>