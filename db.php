<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE DATABASE profilku";

if (mysqli_query($conn, $sql)) {
 echo "Database berhasil dibuat";
} else {
 echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
