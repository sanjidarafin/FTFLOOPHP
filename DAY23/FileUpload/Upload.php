<?php
if($_POST['submit']){
    $upload_folder = 'assignment/';
    move_uploaded_file($_FILES['file']['tmp_name'], $upload_folder.$_FILES['file']['name']);
    echo 'File uploaded successfully';
}
?>





<!DOCTYPE html>

<html>

    <body>
        <form action="Upload.php" method="post" enctype="multipart/form-data">

            <p>Browse File</p>

            <p><input type="file" name="file" id="file" /></p>
            <p><input type="submit" name="submit" value="Submit" /></p>


        </form>

    </body>

</html>