<?php
$ser = "localhost";
$Uname = 'root';
$pass = "";
$db = "test";

// Create connection
$conn = new mysqli($ser, $Uname, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table
$sqlC = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sqlC) === TRUE) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data
$sqlI = "INSERT INTO users (username, email) VALUES ('John', 'john@example.com')";

if ($conn->query($sqlI) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sqlI . "<br>" . $conn->error;
}

// Select data
$sqlR = "SELECT id, username, email FROM users";
$result = mysqli_query($conn, $sqlR);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

// Update data
$sqlU = "UPDATE users SET username='Jane' WHERE id=1";

if ($conn->query($sqlU) === TRUE) {
    echo "Record updated successfully<br>";
} else {
    echo "Error updating record: " . $conn->error;
}

// Delete data
$sqlD = "DELETE FROM users WHERE id=2";

if ($conn->query($sqlD) === TRUE) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
