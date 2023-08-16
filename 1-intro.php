<?php


//Procedural Style:
//Connection: To connect to a MySQL database using mysqli in procedural style, you can use the following code:
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

//--------------------------------------------------------------------------------------------------------------------------

//Query Execution: To execute a query and retrieve data, you can use the following code:
// $sql = "SELECT id, name, email FROM users";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// mysqli_close($conn);

//--------------------------------------------------------------------------------------------------------------------------

// Object-Oriented Style:
// Connection: To connect to a MySQL database using mysqli in object-oriented style, you can use the following code:

// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "database";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
//--------------------------------------------------------------------------------------------------------------------------

//Query Execution: To execute a query and retrieve data, you can use the following code:
// $sql = "SELECT id, name, email FROM users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// $conn->close();


