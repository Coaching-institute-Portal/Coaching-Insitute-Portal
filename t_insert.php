<?php

$link=mysqli_connect("localhost","root","","coaching_institute_portal");

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$Qualification = $_POST['subject'];
$experience = $_POST['experience'];
$dob = $_POST['dob'];
$phone = $_POST['Phone_Number'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$c_password = $_POST['confirm_password'];


$sql = "insert into tutor_registration(Name, Address, Qualification, Experience, Birthdate, Phone, Gender, Password, C_password, Email) values('$name','$address','$Qualification','$experience','$dob','$phone','$gender','$password','$c_password','$email')";



if(mysqli_query($link,$sql)){
	header("location:home.php");
}
else{
	echo" please fill proper information.";
}


?>

