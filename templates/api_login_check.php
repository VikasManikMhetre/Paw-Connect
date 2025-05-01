<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','myflaskdb',6306);
if($con){
	echo "Connection succesful";
}
else{	
	echo "Connectioon failed !";
}
// echo $email." ".$password;
$query="SELECT * FROM `users` WHERE email='$email' and password='$password'";
$result = $con->query($query);

if(mysqli_num_rows($result)){
	$record = $result->fetch_assoc();
	$_SESSION["userid"]=$email;
	$_SESSION["user"]=$record["name"];
	header("Location: /index.html");
    exit;
}
else{
	$_SESSION["loginmessage"]="Invalid UserId or Password!";
	header("Location: /login.php");
    exit;
}
?>