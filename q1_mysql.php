<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "result";
  //connecting to database:
  $conn = mysqli_connect($servername, $username, $password,$database);
  if (!$conn){
    mysqli_connect_error();
  }else{
    echo "Connected To Database!";
  }
?>
<form action="q1_mysql.php" method="post">
  Name: <input type="text" name="name">
  <br>Marks in Each Subject<br>
  Subject 1: <input type="number" name="sub1"><br>
  Subject 2: <input type="number" name="sub2"><br>
  Subject 3: <input type="number" name="sub3"><br>
  Subject 4: <input type="number" name="sub4"><br>
  Subject 5: <input type="number" name="sub5"><br>
  <input type="submit" name="submit" value="submit">
</form>
<?php
  @$name = $_POST['name'];
  @$sub1 = $_POST['sub1'];
  @$sub2 = $_POST['sub2'];
  @$sub3 = $_POST['sub3'];
  @$sub4 = $_POST['sub4'];
  @$sub5 = $_POST['sub5'];
  @$total_obtained = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
  $total_marks= 500;
  $percentage = ($total_obtained/$total_marks)*100;
  if($name && $sub1 && $sub2 && $sub3 && $sub4 && $sub5)
  {
    $sql = "INSERT INTO class1  VALUES ('','$name',$sub1,$sub2,$sub3,$sub4,$sub5,$total_obtained,$total_marks,$percentage)";
    if (mysqli_query($conn, $sql))
    {
      echo " Name : $name <br/> Subject 1: $sub1 <br/> Subject 2: $sub2 <br/> Subject 3:$sub3 <br/> Subject 4: $sub4 <br/> Subject 5: $sub5 <br/>  ";
	  echo " total obtained :$total_obtained";
	  echo " <br/>Total marks : $total_marks";
	   echo "<br/>Percentage :$percentage ";
	   
	   echo "<br/><br/>Successfully Updated Database";
    }
    else{
      echo "Unable to Update, ERROR!!!";
    }
  }
  mysqli_close($conn);
?>