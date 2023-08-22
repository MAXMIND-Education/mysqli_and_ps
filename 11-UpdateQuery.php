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

// Sample data and condition
$newEmail = "newemail@example.com";
$idToUpdate = 1;

// SQL query with an UPDATE clause
$sql = "UPDATE users SET email = '$newEmail' WHERE id = $idToUpdate";

if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . mysqli_error($conn);
}

mysqli_close($conn);


//------Object-Oriented Style:-------------------------

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

// Sample data and condition
$newEmail = "newemail@example.com";
$idToUpdate = 1;

// SQL query with an UPDATE clause
$sql = "UPDATE users SET email = '$newEmail' WHERE id = $idToUpdate";

if ($conn->query($sql) === true) {
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . $conn->error;
}

$conn->close();

//-----Procedural Style with Prepared Statements:------------------------------

// ...
$newEmail = "newemail@example.com";
$idToUpdate = 1;

$sql = "UPDATE users SET email = ? WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "si", $newEmail, $idToUpdate);


//--------Object-Oriented Style with Prepared Statements:-------------------------

// ...
$newEmail = "newemail@example.com";
$idToUpdate = 1;

$sql = "UPDATE users SET email = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $newEmail, $idToUpdate);

