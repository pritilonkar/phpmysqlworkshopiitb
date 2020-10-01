<html>
<head>
<style>
#a {
	color:red;
}
input[type=text] {
	border-radius: 10px;
	  width: 50px;
}
.box {
border:  solid 1px black;
text-align: center;
width:50%	
	
}
</style>
</head>
<body>

<form action="q6_2_post.php" method="POST">
Name of Student<span id="a">*</span>:<input type="txt" name="name" required><br>
Marks in Each Subject<br>

Subject 1<span id="a">*</span> :<input type="text"  name="sub1" maxrequired >/100<br>
Subject 2<span id="a">*</span>:<input type="text" name="sub2" required >/100<br>
Subject 3<span id="a">*</span> :<input type="text" name="sub3" required >/100<br>
Subject 4<span id="a">*</span> :<input type="text" name="sub4" required >/100<br>
Subject 5<span id="a">*</span> :<input type="text" name="sub5" required >/100<br>
<input type="submit" name="btn" value="Marksheet">
</form>



</body>
</html>
<?php 
if(isset($_POST['btn']))
{
$name =$_POST['name'];	
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
?>
<div class="box">
<?php
echo"Name of Student*:.$name.<br><br>
Marks in Each Subject<br>
Subject 1 :.$sub1<br>
Subject 2 :.$sub2<br>
Subject 3 :.$sub3<br>
Subject 4 :.$sub4<br>
Subject 5 :.$sub5<br>";
$total = $sub1 + $sub2 +$sub3 +$sub4 +$sub5;
         echo "Total Marks Obtained: $total <br/>
		 Total Marks:500<br>";
$percent = ($total *100)/500 ;
		echo"Percentage:$percent %";
		?>
		</div>
		<?php
}
else 
	echo"fill the information correct";
?>
