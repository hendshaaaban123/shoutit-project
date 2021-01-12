<?php 
include'database.php';
$username =$_POST['user'];
$message1 =$_POST['message'];

//check if the form submitted
if(isset($_POST['submit'])){
	$user=mysqli_real_escape_string($connect,$username);
	$message=mysqli_real_escape_string($connect,$message1);

	//set timezone
	date_default_timezone_set('America/New_york');
	$time =date('h:i:s a',time());

	//validate input
	if(!isset($user) || $user== ""|| !isset($message) || $message==""){
		$error ="Please fill in your name and message";
		header("Location :index.php?error=".urlencode($error));
		exit();

	}else{
		$query ="INSERT INTO shouts (user,message,time)
		VALUES('$user','$message','$time')";

		 if(!mysqli_query($connect,$query)){
		 	die('Error:'.mysqli_error($connect));
		 }else{
		 	header("Location: index.php");
		 	exit();
		 }
		 }
	}


?>