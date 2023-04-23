<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion_Etudiant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if(!$conn){
    die(mysqli_error($conn));
}
?>
