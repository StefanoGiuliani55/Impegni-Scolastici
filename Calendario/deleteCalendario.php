<?php 
$host="localhost"; // Hostname 
$user="root"; // Mysql username 
$pass=""; // Mysql password 
$db_name="test_database"; //Nome del Database
$id = $_GET['id']; 
$descrizione = $_GET['descrizione'];  
$tipologia = $_GET['tipo']; 
$db = new mysqli($host,$user,$pass,$db_name); 
 if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="DELETE FROM Calendario WHERE ID='$id'"; 
if ($db->query($sql) === TRUE) {
    echo "Calendario cancellato";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>