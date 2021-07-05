<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kown1";
$conn=new mysqli($servername,$username,$password,$dbname);
$conn->set_charset('utf8');

if($conn->connect_error){
	die("Error");
}

echo "Connection Sucssusfull";


?>