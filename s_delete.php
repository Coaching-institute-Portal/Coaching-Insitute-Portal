<?php

$link=mysqli_connect("localhost","root","","coaching_institute_portal");

$id = $_POST['id'];
$name = $_POST['name'];


$sql = "delete from student_register WHERE student_ID = '$id' and Name = '$name'";


if(mysqli_query($link,$sql)){
	echo "<center><b style = 'font-size: 20px;'>Data you entered is removed from the database.</b></center>";
	echo "<center><b style = 'font-size:20px;'><a href='home.php'>GoBack To Home page</a></b></center>";
}
else{
	echo" Data you entered is unvalid, Please enter correct info.";
}



?>