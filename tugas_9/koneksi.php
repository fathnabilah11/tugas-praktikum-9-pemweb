<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "nabilah";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if (!$conn) {
	die("Connection failed".mysqli_connect_error());
}else{
	echo "(Tersambung)";
}

?>