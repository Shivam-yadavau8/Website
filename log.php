<?php
session_start();
$con=mysqli_connect("localhost","root","","reg");
if($con->connect_error)
{
	echo "not connected";
}
else
{
	$em=$_POST['username'];
	$pa=$_POST['pass'];
	$l=$_POST['login'];
  $sql="SELECT  * FROM sig WHERE username='$em' and password='$pa'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
if ($count>0) {
   $_SESSION['uname']=$em;
   header("Location:lastnew.html");
} else {
   $message = "Username and/or Password incorrect.\\nTry again.";
   echo "<script type='text/javascript'>alert('$message');</script>";
}

}
?>