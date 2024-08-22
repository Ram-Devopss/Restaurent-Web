<?php
// Database connection details
$servername = "localhost";  // Change this if your database is hosted elsewhere
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "restaurent";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare data for login
$username = $_POST['name'];
$password = $_POST['pass'];

// Escape variables for security to prevent SQL injection
$username = mysqli_real_escape_string($conn, $username);
$pass = mysqli_real_escape_string($conn, $password);

// SQL query to check if username and password match
$sql = "SELECT * FROM reg WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    
    // Username exists, verify password
    $row = $result->fetch_assoc();

    if ($pass==$row['password']) {
        // Password matches, login successful
        echo "Login successful!";

        // Logging login attempt
        $log_message = "User logged in: username='$username'";
        file_put_contents('login_log.txt', $log_message . PHP_EOL, FILE_APPEND);

        // Redirect to dashboard.php after 2 seconds
        header("refresh:1; url=index.php");
    } else {
        // Password does not match
        echo "Incorrect password.";
    }
} else {
    // Username not found
    echo "Username not found.";
}

$conn->close();
?>
