<?php
function db_connect()
{
    $host = 'localhost';
    $username = 'your_username';
    $password = 'your_password';
    $dbname = 'your_database';

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Create user
function create_user($username, $email)
{
    $conn = db_connect();
    $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "User created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

// Read user
function read_users()
{
    $conn = db_connect();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

// Update user
function update_user($id, $username, $email)
{
    $conn = db_connect();
    $sql = "UPDATE users SET username='$username', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}

// Delete user
function delete_user($id)
{
    $conn = db_connect();
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}


// Create a user
create_user("john_doe", "john@example.com");

// Read all users
read_users();

// Update a user
update_user(1, "jane_doe", "jane@example.com");

// Delete a user
delete_user(1);
