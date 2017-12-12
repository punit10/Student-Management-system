<?php
function showresult($branch,$rollno)
{
	include('dbcon.php');

	$qry="SELECT * FROM `student` Where `branch`='$branch' AND `rollno`='rollno' ";
	$run=mysqli_query($con,$qry);
	$data=mysqli_fetch_assoc($run);


	

	print_r($data);
}

?>