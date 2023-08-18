<?php

//Procedural Style:--------------------------------------------------
// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Drop the database
// $databaseName = "database_to_drop";
// $sql = "DROP DATABASE $databaseName";

// if (mysqli_query($conn, $sql)) {
//     echo "Database dropped successfully";
// } else {
//     echo "Error dropping database: " . mysqli_error($conn);
// }

// mysqli_close($conn);

//------------------------------------------------------------------
//Object-Oriented Style:

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Drop the database
$databaseName = "database_to_drop";
$sql = "DROP DATABASE $databaseName";

if ($conn->query($sql) === true) {
    echo "Database dropped successfully";
} else {
    echo "Error dropping database: " . $conn->error;
}

$conn->close();

