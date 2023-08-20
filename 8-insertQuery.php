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

// Sample data
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";

// SQL query to insert data
$sql = "INSERT INTO users (firstname, lastname, email)
        VALUES ('$firstname', '$lastname', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);

//-----Object-Oriented Style:----------------------------------------------------

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

// Sample data
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";

// SQL query to insert data
$sql = "INSERT INTO users (firstname, lastname, email)
        VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === true) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();

//------Procedural Style with Prepared Statements:-----------------------------------------------------------------

// ...
$stmt = mysqli_prepare($conn, "INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $email);

if (mysqli_stmt_execute($stmt)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

//-----Object-Oriented Style with Prepared Statements:----------------------------------------------------------------
// ...
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $stmt->error;
}

$stmt->close();
$conn->close();

