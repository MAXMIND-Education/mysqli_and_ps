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
$lastname = "Doe";

// SQL query with a WHERE clause
$sql = "SELECT id, firstname, lastname FROM users WHERE lastname = '$lastname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


//-----Object-Oriented Style:---------------------------

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
$lastname = "Doe";

// SQL query with a WHERE clause
$sql = "SELECT id, firstname, lastname FROM users WHERE lastname = '$lastname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();


//-------Procedural Style with Prepared Statements:----------------------

// ...
$lastname = "Doe";

$sql = "SELECT id, firstname, lastname FROM users WHERE lastname = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $lastname);


//-------Object-Oriented Style with Prepared Statements:------------------------

// ...
$lastname = "Doe";

$sql = "SELECT id, firstname, lastname FROM users WHERE lastname = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $lastname);

