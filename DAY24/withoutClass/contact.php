<?php

?>

<html xmlns="http://www.w3.org/1999/html">
    <head> </head>

    <body>
        <form action = "contactAction.php" method = "post" >
            Name : <input type = "text" name = "name" placeholder = "your name"></br></br>
            Email : <input type = "text" name = "email" placeholder = "your email"></br></br>
            Country : <select name = "country">
                <option value = "BD">Bangladesh</option>
                <option value = "India">India</option>
                <option value = "America">America</option>
                <option value = "Australia">Australia</option>
                <option value = "Canada">Canada</option>
                <option value = "Nepal">Nepal</option>
            </select></br></br>
            Message :<textarea rows="3" cols="20" name = "message"></textarea></br></br>
            <button type= "text"  value = "submit" name="submit">submit</button>

        </form>
    </body>






</html>