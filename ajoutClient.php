
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$cinclient = $_POST["cinclient"];
$nomclient = $_POST["nomclient"];
$prenomclient = $_POST["prenomclient"];
$numtelclient = $_POST["numtelclient"];
$produitachete = $_POST["produitachete"];
$qte= $_POST["idvente"];
$idstation= $_POST["idstation"];

$sql = "insert into clients (cinclient,nomclient,prenomclient,numtelclient,produitachete,idvente,idstation) values ('$cinclient','$nomclient','$prenomclient','$numtelclient','$produitachete','$qte','$idstation')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();
?>