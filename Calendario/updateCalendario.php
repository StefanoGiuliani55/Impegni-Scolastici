<?php 
$host="localhost"; // Hostname 
$user="root"; // Mysql username 
$pass=""; // Mysql password 
$db_name="test_database"; //Nome del Database
$nome = $_GET['nome']; 
$descrizione = $_GET['descrizione'];  
$tipologia = $_GET['tipo']; 
$id = $_GET['id']; 
$db = new mysqli($host,$user,$pass,$db_name); 
 if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="UPDATE Calendario SETnome=$nome,descrizione=$descrizione,tipologia=$tipo) WHERE ID=$id"; 
if ($db->query($sql) === TRUE) {
    echo "Calendario Aggiunto";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>