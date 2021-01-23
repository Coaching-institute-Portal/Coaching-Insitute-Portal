<?php

$link=mysqli_connect("localhost","root","","coaching_institute_portal");

$name=$_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$phone = $_POST['Phone_Number'];


$sql = "insert into enroll(Name,Email,Course,Phone) values('$name','$email','$course','$phone')";


if(mysqli_query($link,$sql)){
	header("location:payment.php");
}
else{
	echo" please enter a correct information";
}


?>