<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"] && )isset($_POST[""]))
        {
            $name = $_POST["name"];
            echo $name;
            $email = $_POST["email"];
            $country=$_POST["country"];
            echo $message = $_POST["message"];
        }


    }

?>



<html>

    <body>
        <form action = "" method = "post">
            Name:<input type = "text" name = "name" placeholder = "your name"><br><br>
            Email:<input type = "text" name = "email" placeholder = "your email"><br><br>
            Message:<textarea name="message" rows="5" cols="30"></textarea></br></br>
             Country: <select name = "country">
                <option>Bangladesh</option>
                <option>India</option>

                 </select></br>

            <input type = "submit"  name = "submit" value = "submit">

        </form>
    </body>
</html>