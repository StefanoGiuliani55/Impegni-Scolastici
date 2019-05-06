<?php 
$host="localhost"; // Hostname 
$user="root"; // Mysql username 
$pass=""; // Mysql password 
$db_name="test_database";
$db = new mysqli($host,$user,$pass,$db_name);
session_start();
$nome=$_SESSION['username']; 
$squery ="SELECT * FROM Calendario WHERE codUtente='$nome'";
$result = $conn->query($squery);
$count= mysqli_num_rows($result);
$conn->close();
?>