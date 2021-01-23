<?php

$link=mysqli_connect("localhost","root","","coaching_institute_portal");

$s_name=$_POST['name'];
$s_email = $_POST['email'];
$s_address = $_POST['subject'];
$s_birthdate = $_POST['dob'];
$s_phone = $_POST['Phone_Number'];
$s_gender = $_POST['gender'];
$s_password = $_POST['password'];
$s_c_password = $_POST['confirm_password'];


$sql = "insert into student_register(Name,Email,Address,Birthdate,Phone,Gender,Password,C_password) values('$s_name','$s_email','$s_address','$s_birthdate','$s_phone','$s_gender','$s_password','$s_c_password')";


if(mysqli_query($link,$sql)){
	header("location:home.php");
}
else{
	echo" please fill the proper information.";
}


?>