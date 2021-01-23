<?php

$link=mysqli_connect("localhost","root","","coaching_institute_portal");

$F_name = $_POST['firstname'];
$L_name = $_POST['lastname'];
$country = $_POST['country'];
$Subject = $_POST['subject'];

$sql = "insert into contact_us(First_name,Last_name,Country,Subject) values('$F_name','$L_name','$country','$Subject')";


if(mysqli_query($link,$sql)){
	header("location:home.php");
}
else{
	echo" please enter a proper information";
}



?>