<?php
$con=mysqli_connect("localhost","root","","reg");
if($con->connect_error)
{
	echo "not connected";
}
else
{
	$user=$_POST['uname'];
	$em=$_POST['em'];
	$pa=$_POST['pas'];

	$query="SELECT * FROM `sig` WHERE username='$user'";
    $query_run=mysqli_query($con,$query);                        
    if(mysqli_num_rows($query_run)==0){
        $query="INSERT INTO `sig`(`username`, `email`, `password`) VALUES ('$user','$em','$pa')";
	}
	else{
		$message = "Username Already Exists.\\nTry with another Username.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Location: log.html");
	} 
	$query_run=mysqli_query($con,$query);

	header("Location: sig.html");
    
}
?>