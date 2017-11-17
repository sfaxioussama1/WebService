<?php
/**
 * Created by PhpStorm.
 * User: SANA
 * Date: 17/11/2017
 * Time: 18:42
 */

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

$numtelclient = $_POST["numtelclient"];
$message = $_POST["message"];
$sql = "INSERT INTO message VALUES($numtelclient,'TirageAgil',$message,null,null,null,null,NOW());";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();
?>