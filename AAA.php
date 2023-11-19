<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "A4321A";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$Email = $_POST['email'];
$Password = $_POST['password'];



// SQL query to insert data into 'AAA' table
$sql = "INSERT INTO AAA (name, phone, email, password) VALUES ('$name', '$phone','Email','password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>