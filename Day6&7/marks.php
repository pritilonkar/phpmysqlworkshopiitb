<?php
  require ("connect.php");
  session_start();
  if(!isset($_SESSION))
	{
		header('location:marks.php');
		exit;
	}
  $success="";  

	$name=$_POST['name'];  
  $select = "Select student_id,name,sub1,sub2,sub3,totalobtained,percentage FROM marks,students where students.id=marks.student_id and name= '$name'"; 
  $result1 = mysqli_query($conn, $select);
 
  if (mysqli_num_rows($result1) > 0) {
       
  
    }
    else echo "Error";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>td,h1,div{
    text-align: center;
    }</style>
</head>
<body><form action="marks.php" method="post">
<br>enter your name:<input type="text" name="name" >
  <br><input type="submit" name="show" value="show marksheet">
</form>
    <h1>Welcome<?php echo $name;?> </h1>
    <table border="2" cellpadding="15"   style="width: 100%; border-collapse: collapse; margin:0 auto">
      <thead>
        <tr>
          <th>Name</th>
          <th>HTML</th>
          <th>PHP</th>
          <th>MYSQL</th>
          <th>Total_ Obtained</th>
          <th>Percentage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
                while($row = mysqli_fetch_assoc($result1)){?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['sub1']; ?></td>
                    <td><?php echo $row['sub2']?></td>
                    <td><?php echo $row['sub3']; ?></td>
                    <td><?php echo $row['totalobtained'];?></td>
                    <td><?php echo $row['percentage']; ?></td>
                   <?php $percentage = $row['percentage'];?>
                <tr>
                <?php } ?>
        </tr>
      </tbody>
    </table>
   
   <div class="div1" >
<form action="marks.php" method="POST">
	
	Enter Email Id: <input type='email' name='toemail'><br/>
	
	feedback message:<textarea name='message' rows="5" >

<?php
  //to show database:
  
	$name=$_POST['name'];
  $sql = "SELECT * FROM class1 where name= '$name' ";
  
   $result1 = mysqli_query($conn, $select);
                 while($row = mysqli_fetch_assoc($result1)){?>
   <?php
      echo "name=" .$row['name'] ;
      echo ", PHP=" .$row['sub1'] ;
      echo ", MYSQL=" .$row['sub2'] ;
      echo ", HTML=" .$row['sub3'];
      echo ", Total obtained=" .$row['totalobtained'];
      echo ", Total marks=" .$row['total_marks'];
      echo ", Percentage=" .$row['percentage'];
      $percentage = $row['percentage'];
  
     ?>
   

 <?php } ?> 
 
 </textarea><br/>
	<input type='submit' name='submit' value='send mail'>
</form>
</div>
<?php
if( $percentage >60 )
 {
	 
 echo"<h1>congratulations</h1> ";
 } 
 
if(isset($_POST['submit']))
{	
	$name = $_POST['name'];
	$toemail =  $_POST['toemail'];
	
	$message = $_POST['message'];

	 
if ($toemail && $message)
	{
		$to = $toemail;//your email id
		$subject = "marksheet";
		$headers = $toemail;
		$body = $message;
		
		mail( $to ,$subject ,$body , $headers);
		echo "Mail sent successfully.";
			
			
	}
	else 
		die("you must enter email id ");
}
		
?>
    <h1 ><?php echo $success ?></h1>
    <a style="position:absolute; top:1em ;right:1em;" href="logout.php"><button>Logout</button></a>
</body>
</html>