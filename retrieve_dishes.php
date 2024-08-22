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

// SQL query to retrieve all dishes
$sql = "SELECT id, name, des, price, cat, url FROM dishes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo ' <div class="tab-content">';
    echo '<div id="tab-1" class="tab-pane fade show p-0 active">';
    echo '<div class="row g-4">';

    // Loop through each row of the result set
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-6">';
        echo '<div class="d-flex align-items-center">';
        echo'<img class="flex-shrink-0 img-fluid rounded" src="' . $row["url"] . '" alt="" style="width: 80px;">';
        echo '<div class="w-100 d-flex flex-column text-start ps-4">';
        echo'<h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>'.$row['name'].'</span>
                                                <span class="text-primary">'.$row['price'].'</span>
                                            </h5>';
        echo '<small class="fst-italic">'.$row['des'].'</small>';        
        echo '</div>';
        echo '</div>';
        echo '</div>';
       
    
    }

    echo '</div>'; // Close row
    echo '</div>'; 
    echo '</div>'; 
    // Close container
} else {
    echo "0 results";
}

$conn->close();
?>
