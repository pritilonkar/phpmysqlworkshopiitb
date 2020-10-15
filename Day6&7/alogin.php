<?php
session_start();

	$connection=mysqli_connect("localhost","root","","prac");
	if($connection)
	{


					$uname=$_POST['uname'];
					$_SESSION["uname"] = $uname;
					$email=$_POST['email'];
					
					//echo $uname;
					//echo $email;
					$query = "select * from sign where uname='$uname' and email='$email' ";
					
					$result = mysqli_query($connection,$query); 
					
					if(mysqli_num_rows($result)>0)
					{
						echo"<script>alert('login successfully...!!!');window.location='adminhome.php';</script>";
						//header('Location:user.php');
							
					}
					else	
					{
					echo "<script>alert('Wrong credential Enter correct....');window.location='index.php';</script>";
					
					}
				
	}

?>