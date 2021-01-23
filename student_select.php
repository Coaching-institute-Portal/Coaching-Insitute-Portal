<?php

$link=mysqli_connect("localhost","root","","coaching_institute_portal");


$sql = "select Student_ID,Name,Address,Birthdate,Phone,Gender,Email from student_register";


$result = mysqli_query($link,$sql);

//...............................................................................................//


if (mysqli_num_rows($result) > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		# code...

		echo "<style>table,
      tr,
      td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style></style><table style='border: 2px solid black;'><tr><td>Student_ID:</td><td>Name</td><td>Address</td><td>Birthdate</td><td>Phone</td><td>Gender</td><td>Email</td></tr><br><tr><td>" . $row["Student_ID"].  "</td><td>" . $row["Name"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["Birthdate"]. "</td><td>" . $row["Phone"]. "</td><td>" . $row["Gender"]. "</td><td>" . $row["Email"]. "</td><tr></table><br>";

		

	}

//..............................................................................................//


}

else{

	
	echo "<center><b style = 'font-size:20px;'><a href='home.php'>Someting Went Wrong, Please GoBack</a></b></center>";
    }


?>
