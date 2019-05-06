<?php 
$host="localhost"; // Hostname 
$user="root"; // Mysql username 
$pass=""; // Mysql password 
$db_name="test_database"; //Nome del Database
$nome = $_GET['nome']; 
$descrizione = $_GET['descrizione'];  
$tipologia = $_GET['tipo']; 
$db = new mysqli($host,$user,$pass,$db_name); 
 if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="INSERT INTO Calendario(nome,descrizione,tipologia) VALUES ('$nome','$dewcrizione','$tipologia')"; 
if ($db->query($sql) === TRUE) {
    echo "Calendario Aggiunto";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>