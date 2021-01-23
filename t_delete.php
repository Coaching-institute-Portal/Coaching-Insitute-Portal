<?php

$link=mysqli_connect("localhost","root","","coaching_institute_portal");

$id = $_POST['id'];
$name = $_POST['name'];


$sql = "delete from tutor_registration WHERE Tutor_ID = '$id' and Name = '$name';";


if(mysqli_query($link,$sql)){
	header("location:home.php");
}
else{
	echo" Data you entered is unvalid, Please enter correct info.";
}



?>