<?php

$con = mysqli_connect("localhost","root","","mysql2");

 $name = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];

$sql ="INSERT INTO user(id,name,email,password) VALUES(NULL,'$name','$email','$pass')";

$query=mysqli_query($con,$sql);

if($query){
	echo "Registration Successful";
	header("location:login.php");

}else{
	echo "Something went wrong";
}


 ?>