<?php
$connect = mysqli_connect("localhost", "root", "","placement"); // Establishing Connection with Server
mysqli_select_db($connect,"placement"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$cname = $_POST['CompanyName'];
$date = $_POST['date'];
$campool = $_POST['C/P'];
$poolven = $_POST['PVenue'];
$per = $_POST['SSLC'];
$puagg = $_POST['PU/Dip'];
$beaggregate = $_POST['BE'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['HofBacklogs'];
$breakstud = $_POST['DetainYears'];
$otherdet = $_POST['ODetails'];
if($cname !=''||$date !='')
{
    if($query = mysqli_query($connect,"INSERT INTO addpdrive(CompanyName, Date, C/P, PVenue, SSLC, PU/Dip, BE, Backlogs, HofBacklogs, DetainYears, ODetails)
		VALUES ('$cname', '$date', '$campool', '$poolven', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')")){
                      echo "<center>Drive Inserted successfully</center>";
		}
		else die("FAILED");
}
}
?>