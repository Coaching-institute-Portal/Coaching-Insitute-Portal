<?php

$link=mysqli_connect("localhost","root","","coaching_institute_portal");

$id = $_POST['id'];
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


$sql = "update tutor_registration SET Name='$name', Address='$address', Qualification='$Qualification', Experience='$experience', Birthdate='$dob', Phone= '$phone', Gender='$gender', Password='$password', C_password='$c_password', Email='$email' WHERE Tutor_ID = $id;";



if(mysqli_query($link,$sql)){
	echo "<center><b style = 'font-size: 20px;'>Your information has been updated in our database.</b></center>";
	echo "<center><b style = 'font-size:20px;'><a href='home.php'>GoBack To Home</a></b></center>";
}
else{
	echo" please fill the proper information. Or your TutorID is incorrect.";
}


?>

