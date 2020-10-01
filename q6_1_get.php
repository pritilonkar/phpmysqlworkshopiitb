<html>
<body>

<form action="q6_1_get.php" method="GETs">
first side:<input type="txt" name="side1" required><br>
Second side:<input type="txt" name="side2" required ><br>
Third soide:<input type="txt" name="side3" required><br>
<input type="submit" name="btn" value="check triangle">
</form>

</body>
</html>
<?php 
if(isset($_GET['btn']))
{
	
$side1 = $_GET['side1'];
$side2 = $_GET['side2'];
$side3 = $_GET['side3'];

	   
    // Check for equilateral triangle 
    if ($side1 == $side2 && $side2 == $side3) 
	{
		echo "Equilateral Triangle"; 
	}
    // Check for isoceles triangle 
    else if ($side1 == $side2 || $side2 == $side3 || $side3 == $side1) 
	{
		echo "Isoceles Triangle"; 
	}  
    // Otherwise scalene triangle 
    else
	{
		echo "Scalene Triangle"; 
	}
	

}
else 
{
	echo"*fill all sides value* ";
}
?>