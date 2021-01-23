<?php

$link = mysqli_connect("localhost","root","","coaching_institute_portal");
	
$Cname = $_POST['Cname'];
$Cnumber = $_POST['card_number'];
$Ddate = $_POST['expiry_month'];
$cvv = $_POST['CVV'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['state'];


$sql = "insert into payment(Name_on_card, Card_number,Expiry, CVV, Name, Email, Address, City, Zip, State) 
values('$Cname','$Cnumber','$Ddate','$cvv','$name','$email','$address','$city','$zip','$state')";



if(mysqli_query($link,$sql)){
	
	echo "<center><b style = 'font-size: 20px;'>Your payment has been successful.</b></center>";
	echo "<center><b style = 'font-size:20px;'><a href='home.php'>GoBack To Home page</a></b></center>";
}
else{
	echo" Please enter proper information.";
}

?>

