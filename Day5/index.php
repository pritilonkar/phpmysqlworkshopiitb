<html>
<center>
<h4>Feedback form</h4>
<form action="index.php" method="POST">
	
	your Email Id: <input type='email' name='toemail'><br/>
	subject:<input type='text' name='subject'><br/>
	feedback message:<textarea name='message'Placeholder="write your name and feedback message" rows="5" ></textarea><br/>
	<input type='submit' name='submit' value='send mail'>
</form>
</center>
</html>
<?php

if(isset($_POST['submit']))
{	
	
	$toemail =  $_POST['toemail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	 
if ($toemail && $message)
	{
		$to = "pritilonkar19@gmail.com";
		$subject = $subject;
		$headers = $toemail;
		$body = $message;
		
		mail( $to ,$subject ,$body , $headers);
		echo "Mail sent successfully.";
			
			if ($toemail && $message)
				{
					$to1 = $toemail;
					$subject1 = "thanks";
					$headers1 = "From:pritilonkar19@gmail.com";
					$body1 = "thanks for feedback!";
					
					mail($to1 ,$subject1 ,$body1 , $headers1);
					echo "thanks Mail sent successfully.";
					
				}
	}
	else 
		die("you must enter a name <u> and </u> message");
}
		
?>