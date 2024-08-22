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
$email = $_POST['email'];
$pass = $_POST['pass'];


// SQL query to insert data into the dishes table
$sql = "INSERT INTO reg (username, email, password) VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    // Record inserted successfully
   

    // Redirect to navigation.php after 2 seconds
    header("refresh:1; url=index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
