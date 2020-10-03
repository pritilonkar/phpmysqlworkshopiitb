<html>
<body>

<form action="q3_upload.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="userfile" id="userfile">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php
if (isset($_FILES['userfile']))
{
	pre_r($_FILES);
	move_uploaded_file($_FILES['userfile']['tmp_name'], 'upload/'. $_FILES['userfile']['name']);
}
function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	
	}

?>
