<?php


//Procedural Style:
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "database";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Now you can use the $conn variable to perform database operations
// mysqli_close($conn);

//-------------------------------------------------------------------------------
//Object-Oriented Style:

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Now you can use the $conn variable to perform database operations
$conn->close();
