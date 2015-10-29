<?php
$servername = "us-cdbr-azure-central-a.cloudapp.net";
$username = "b47c3d9349f794";
$password = "f1b9e28a";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
