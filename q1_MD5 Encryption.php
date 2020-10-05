<?php  
 $connect = mysqli_connect("localhost", "root", "", "data1");  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
  ?>
 
                <form action="q1_MD5 Encryption.php" method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username"  >  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" >  
                     <br />  
                     <input type="submit" name="register" value="Register" >  
                     
                </form>  
                 
           