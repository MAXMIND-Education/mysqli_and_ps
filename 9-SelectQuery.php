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

// SQL query to select data
$sql = "SELECT id, firstname, lastname FROM users";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


//----Object-Oriented Style:--------------------------------------------------
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

// SQL query to select data
$sql = "SELECT id, firstname, lastname FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

//-----Procedural Style with Prepared Statements:----------------------------------------------------------------

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

// SQL query with a prepared statement
$sql = "SELECT id, firstname, lastname FROM users";
$stmt = mysqli_prepare($conn, $sql);

// Execute the prepared statement
mysqli_stmt_execute($stmt);

// Bind result variables
mysqli_stmt_bind_result($stmt, $id, $firstname, $lastname);

// Fetch and display results
while (mysqli_stmt_fetch($stmt)) {
    echo "ID: $id - Name: $firstname $lastname<br>";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);


//-----Object-Oriented Style with Prepared Statements:--------------------------------------------------------------

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

// SQL query with a prepared statement
$sql = "SELECT id, firstname, lastname FROM users";
$stmt = $conn->prepare($sql);

// Execute the prepared statement
$stmt->execute();

// Bind result variables
$stmt->bind_result($id, $firstname, $lastname);

// Fetch and display results
while ($stmt->fetch()) {
    echo "ID: $id - Name: $firstname $lastname<br>";
}

$stmt->close();
$conn->close();

