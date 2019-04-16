<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","reg");
if($con->connect_error)
{
	echo "not connected";
}
else
{
	$name=$_SESSION['uname'];
	$gen=$_POST['gender'];
	$ag=$_POST['age'];
	$en=$_POST['householdIncome'];
	$ed=$_POST['education'];
	$i=$_POST['checkAny'];

	
	if(isset($_POST['submit']))
    {
		$q="INSERT INTO detail VALUES ('$name','$gen','$ag','$en','$ed','$i')";
		$a=mysqli_query($con,$q);
		session_destroy();
		header('location: submit.html');
	}

}
?>