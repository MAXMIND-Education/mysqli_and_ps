<?php
//Procedural Style:
// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Create a new database
// $databaseName = "new_database";
// $sql = "CREATE DATABASE $databaseName";

// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);

//---Object-Oriented Style:-------------------------------------------------------

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a new database
$databaseName = "new_database";
$sql = "CREATE DATABASE $databaseName";

if ($conn->query($sql) === true) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
