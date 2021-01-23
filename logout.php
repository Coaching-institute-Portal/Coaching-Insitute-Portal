
<?php
session_start();
if(isset($_SESSION['name'])){
	session_unset();
	session_destroy();
	echo "<center><b style = 'font-size: 20px;'>you have successfully logout</b></center>";
	echo "<center><b style = 'font-size:20px;'><a href='home.php'>GoBack To Home page</a></b></center>";
}

elseif(isset($_SESSION['Aname'])){
	session_unset();
	session_destroy();
	echo "<center><b style = 'font-size: 20px;'>you have successfully logout</b></center>";
	echo "<center><b style = 'font-size:20px;'><a href='home.php'>GoBack To Home page</a></b></center>";
}


elseif(isset($_SESSION['Tname'])){
	session_unset();
	session_destroy();
	echo "<center><b style = 'font-size: 20px;'>you have successfully logout</b></center>";
	echo "<center><b style = 'font-size:20px;'><a href='home.php'>GoBack To Home page</a></b></center>";
}



else{

	echo "<center><b style = 'font-size: 20px;'>You have to sign-in first. Or you are already signed-in.</b></center>";
	echo "<center><b style = 'font-size:20px;'><a href='login.php'>Go To The Sign-in Page</a></b></center>";

}
?>
