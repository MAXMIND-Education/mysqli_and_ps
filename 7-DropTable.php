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

// SQL query to drop a table
$tableName = "table_to_drop";
$sql = "DROP TABLE $tableName";

if (mysqli_query($conn, $sql)) {
    echo "Table dropped successfully";
} else {
    echo "Error dropping table: " . mysqli_error($conn);
}

mysqli_close($conn);


//----Object-Oriented Style:-------------------------------------------------------

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

// SQL query to drop a table
$tableName = "table_to_drop";
$sql = "DROP TABLE $tableName";

if ($conn->query($sql) === true) {
    echo "Table dropped successfully";
} else {
    echo "Error dropping table: " . $conn->error;
}

$conn->close();
