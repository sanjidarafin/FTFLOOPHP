<html>

	<?php
		    $uploaddir = 'upload/';
			$uploadfile = $uploaddir . basename($_FILES['file']['name']);
			$Ok = 1;
			$FileType = pathinfo($uploadfile,PATHINFO_EXTENSION);
		
				if($FileType != "txt" && $FileType != "html" && $FileType != "php"
					&& $FileType = "gif" ) 
				{
					echo "enter another","<br>";
					$Ok = 0;
				}
						
						if ($Ok == 0) 
						{
							echo "Sorry, your file was not uploaded.";
							
						} 
						else
						{
						    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) 
							{
							   echo "File is valid, and was successfully uploaded.\n";
							}
							
							else 
							{
							   echo "Possible file upload attack!\n";
							}

						}
		

	?>
	
	<body>
		
		<form enctype="multipart/form-data" action="uploads.php" method="POST">
		
			<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		    Send this file: <input name="file" type="file" />
			<input type="submit" name="submit" value="Send File" />
			
		</form>
		
	</body>
</html>	