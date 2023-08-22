<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sample condition
$idToDelete = 1;

// SQL query with a DELETE clause
$sql = "DELETE FROM users WHERE id = $idToDelete";

if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully";
} else {
    echo "Error deleting data: " . mysqli_error($conn);
}

mysqli_close($conn);


//------Object-Oriented Style:---------------------------------

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

// Sample condition
$idToDelete = 1;

// SQL query with a DELETE clause
$sql = "DELETE FROM users WHERE id = $idToDelete";

if ($conn->query($sql) === true) {
    echo "Data deleted successfully";
} else {
    echo "Error deleting data: " . $conn->error;
}

$conn->close();

//--------Procedural Style with Prepared Statements:------------------------------

// ...
$idToDelete = 1;

$sql = "DELETE FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $idToDelete);

//-------Object-Oriented Style with Prepared Statements:--------------------------

// ...
$idToDelete = 1;

$sql = "DELETE FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idToDelete);

