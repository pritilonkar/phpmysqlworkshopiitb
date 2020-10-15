<?php
 // session_start();
  ?>
  <html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">


<style type="text/css"> 
.input-container {
  display: -ms-flexbox; 
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.container {
	margin: 0 auto;
    background: white;
}
/* Mobile phones (portrait and landscape) ---------- */
@media screen and (max-width: 767px)
{
    .container 
	{
        width: 100%;
        padding: 5px 10px;
    }
}
/* Tablets and iPads (portrait and landscape) ---------- */
@media screen and (min-width: 768px) and (max-width: 1023px){
    .container {
        width: 100%;
        padding: 5px 10px;
    }
}
/* Low resolution desktops and laptops ---------- */
@media screen and (min-width: 1024px) {
    .container {
        width: 100%;
        padding: 5px 15px;
    }
}
/* High resolution desktops and laptops ---------- */
@media screen and (min-width: 1280px) {
    .container {
        width: 100%;
        padding: 5px 20px;
    }
}



body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #EAEAEC;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: #6E6E75;
  text-align: center;
  padding: 30px 20px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #EAEAEC;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
 {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=email] , input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color: dodgerblue;
}

/* Set a style for all buttons */
button {
  background-color: dodgerblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: red;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

body {margin: 0;}
ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: #6E6E75;
  text-align: center;
  padding: 30px 20px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #EAEAEC;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>


<div class="container">
<ul class="topnav">
  <li>

  <li><a  href="homepage.php"><b>Home</b></a></li>
  
  <li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn"><b>Signup</b></a>
		<div class="dropdown-content">
		 
		  <a onclick="document.getElementById('id100').style.display='block'" style="width:auto;"><b>student Signup</b></a>
		</div>
  <li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn"><b>Login</b></a>
		<div class="dropdown-content">
		  <a onclick="document.getElementById('id11').style.display='block'" style="width:auto;"><b>Admin Login</b></a>
		  <a onclick="document.getElementById('id22').style.display='block'" style="width:auto;"><b>student Login</b></a>
		</div>
	
	
 </ul>




</div>





<div id="id100" class="modal">
  
  <form class="modal-content animate" method="POST"  action="index.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id100').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
	<label for="uname"><b>student name</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>
	<label for="email"><b>Email Id</b></label>
		<input type="email" onkeyup="showHint(this.value)"   placeholder="@gmail.com" name="email" value="" required>
		<span id="txtHint"></span><br>
      
      
      <label for="password"><b>password</b></label>
      <input type="password" placeholder="Enter password"   name="password" required>
       <label for="password"><b>ConfirmPassword:</b></label>
      <input type="password" name="password2" value="<?php echo $password2 ?>" required> 
      
   <button type = "submit"  name="submit" value="Submit"    >Submit</button>
   </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id100').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form><h3 style="text-align: center;"><?php echo $success; echo $error; ?></h3>  
</div>

<div id="id11" class="modal">
  
  <form class="modal-content animate" name="login" method="POST" action="alogin.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id11').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <div class="icon">
	  <i class="fas fa-user" > Admin name</i>
      <input type="text" placeholder="Enter admin name" name="uname" required>
	  </div>
	<div class="icon">
		<i class="fas fa-envelope" >  Email ID</i>
		<input type="email" placeholder="@gmail.com" name="email" value="" required>
      </div>
     <button    name="sub11" value="Login"  type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id11').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>



<div id="id22" class="modal">
  
  <form class="modal-content animate" role="form" name="login" method="POST" action="slogin.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id22').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <div class="icon">
	  <i class="fas fa-user" > name</i>
	  <input type="text" name="name"  required>
		</div>
	  <div class="icon">
	  <i class="fas fa-user" >  student Email</i>
	  <input type="email" name="email" required>
		</div>
        
	   <button type="submit" name="submit2" id="submit">Login</button
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id22').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id11');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<script>
// Get the modal
var modal = document.getElementById('id100');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id22');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
 <script>

function validateform() 
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
{  
var name=document.myform.name.value;  
var email=document.myform.email.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}	else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }   
}  

</script> 


</body>
</html>

<?php
require ("connect.php");
$success=null; 
$error=null;
$name=(isset($_POST['name']) ? $_POST['name'] : null );
$email=(isset($_POST['email']) ? $_POST['email'] : null );
$password=(isset($_POST['password']) ? $_POST['password'] : null );
$password2=(isset($_POST['password2']) ? $_POST['password2'] : null );
if(isset($_POST['submit'])){
 
    if(!empty($name && $password && $email && $password2)){

        $compare = "SELECT * FROM students where email='$email'";//where email='$email'
        $result = mysqli_query($conn, $compare);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $stored_email=$row["email"];
                if($stored_email === $email){
                    die ("User already exists");
                    // mysqli_close($conn);
                }               
                }                          
            }
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                if($password === $password2){
                    $password=md5($password);
                    $sql="INSERT into students (name,password,email) VALUES('$name','$password','$email');";
                    $sql .= "INSERT INTO marks (student_id) SELECT MAX(id) FROM students";
                    
                    if (mysqli_multi_query($conn, $sql)) {
                        do {
                            /* store first result set */
                            if ($result = mysqli_store_result($conn)) {
                                while ($row = mysqli_fetch_row($result)) {
                                    
                                }
                                mysqli_free_result($result);
                            }
                            /* print divider */
                            if (mysqli_more_results($conn)) {
                                echo "<script type='text/javascript'>alert('New user Added');
                                window.location='marksheet.php';
                                </script>";
                            }
                        } while (mysqli_next_result($conn));
                    } 
                    else {
                        echo "Error: " . $sql . ":-" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    
                }
                    else $error="Passwords Don't match";
                }
                else $error="Please enter a valid email";           
        }
        else  $error="Input Values";
        // mysqli_close($conn);    
    }
    


?>


<?php
require ("connect.php");
$success=null; 
$error=null;

$email=(isset($_POST['email']) ? $_POST['email'] : null );
$password=(isset($_POST['password']) ? $_POST['password'] : null );
if(isset($_POST['submit2'])){
 
    if(!empty($email && $password)){
        $password=md5($password);

        
        $select = "SELECT * FROM students where email='$email' and password='$password'"; 
        $result1 = mysqli_query($conn, $select);
       
        if (mysqli_num_rows($result1) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result1)) {
                $name=$row['name'];      
                $mail=$row['email'];        
                session_start();
                $_SESSION['user'] = $name;
                $_SESSION['mail'] = $mail;
                header("location: home.php");
            }       
        }
        else $error = "Your Login Name or Password is invalid";                          
    }
    else  $error="Input Values";
}    
        // mysqli_close($conn);    
?>
