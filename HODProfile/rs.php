<?php
session_start();

$connect = mysqli_connect("localhost", "root", "","placement"); // Establishing Connection with Server
   mysqli_select_db($connect,"placement") or die("Cant Connect to database"); // Selecting Database from Server
 
  $USN = $_POST['USN'];
  $Question = $_POST['Question'];
  $Answer = $_POST['Answer'];
  //$Name = $_POST['Name'];

  $check = mysqli_query($connect,"SELECT * FROM hlogin WHERE Username='".$USN."'") or die("Check Query");
 if(mysqli_num_rows($check) != 0) 
 {  
    
	 $row = mysqli_fetch_assoc($check);
	 $dbQuestion = $row['Question'];
	 $dbAnswer = $row['Answer'];
  if($dbQuestion == $Question && $dbAnswer==$Answer)
  {
     $_SESSION['reset'] = $USN;
	   header("location: Reset password.php");

  }
  else 
	  echo "<center>Failed! Incorrect Credentials</center>";
 } else
 echo "<center> Enter Something Correctly!!! </center>";
 
 /*   if($query = mysqli_query($connect,"INSERT INTO hlogin(Name, USN ,PASSWORD,Email,Question,Answer) VALUES ('$Question','$Answer')"))
    {
                       echo "<center> You have registered successfully...!! Go back to  </center>";
					             echo "<center><a href='index.php'>Login here</a> </center>";
					   
    }
  
   else
    {
       echo "<center>Your password do not match</center>";
    }
  
 */
?>