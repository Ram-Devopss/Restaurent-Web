<?php
// Database connection details
$servername = "localhost";  // Change this if your database is hosted elsewhere
$username = "root";     // Your MySQL username
$password = "";     // Your MySQL password
$dbname = "restaurent";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare data for insertion
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$url = $_POST['url'];

// SQL query to insert data into the dishes table
$sql = "INSERT INTO dishes (name, des, price,  url) VALUES ('$name', '$description', '$price', '$url')";

if ($conn->query($sql) === TRUE) {
    // Record inserted successfully
    echo "New record created successfully";

    // Redirect to navigation.php after 2 seconds
    header("refresh:2; url=index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
