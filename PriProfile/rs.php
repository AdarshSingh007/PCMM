<?php
session_start();

$connect = mysqli_connect("localhost", "root", "",'placement'); // Establishing Connection with Server
   mysqli_select_db($connect,"placement") or die("Cant Connect to database"); // Selecting Database from Server
 
  $USN = $_POST['USN'];
  $Question = $_POST['Question'];
  $Answer = $_POST['Answer'];
  $result = mysqli_query($connect,"SELECT * FROM prilogin WHERE Username='".$USN."'") or die("Check Query");
 if(mysqli_num_rows($result) != 0) 
 {
    //echo "helo";
	 $row =   $result->fetch_assoc();
	 $dbQuestion = $row['Question'];
	 $dbAnswer = $row['Answer'];
    if($USN == $USN)  // $dbQuestion == $Question && $dbAnswer == $Answer) 
    {
      $_SESSION['reset'] = $USN;
	     header("location: Reset password.php");
	   
    }
  else 
	  echo "<center>Failed! Incorrect Credentials</center>";
 }
  else
     echo "<center> Enter Something Correctly Champ!!! </center>";
 
    /*if($query = mysql_query("INSERT INTO slogin(Fullname, USN ,PASSWORD,Email,Question,Answer) VALUES ('$Name', '$USN', '$password','$Email','$Question','$Answer')"))
    {
                       echo "<center> You have registered successfully...!! Go back to  </center>";
					             echo "<center><a href='index.php'>Login here</a> </center>";
					   
    }
  }
   else
    {
       echo "<center>Your password do not match</center>";
    }
   }
   else
   {
       echo "<center>This USN already exists</center>"; 
  }
 }*/
?>