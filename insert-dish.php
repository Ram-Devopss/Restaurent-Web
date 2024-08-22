<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Menu</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Restaurant Menu</h2>
        <button id="fetchDataBtn" class="btn btn-primary">Fetch Menu</button>

        <!-- Tab content will be inserted here -->
        <div id="tabContent" class="mt-4"></div>


        <h2>Insert New Dish</h2>
        <form action="insert-dishes.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
    
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" required></textarea><br><br>
    
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" required><br><br>
    
    
            <label for="url">Enter Image Link</label><br>
            <input type="text" id="url" name="url" required><br><br>
    
            <input type="submit" value="Submit">
        </form>
    
    
        <form action="retrieve_dishes.php" method="get">
            <input type="submit" value="Retrieve Dishes">
        </form> 
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#fetchDataBtn').click(function() {
                $.ajax({
                    url: 'retrieve_dishes.php', // PHP script to fetch data
                    type: 'GET',
                    dataType: 'html',
                    success: function(response) {
                        $('#tabContent').html(response); // Insert fetched data into tabContent div
                        $('.nav-link:first').tab('show'); // Show the first tab
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + status + ' - ' + error);
                    }
                });
            });
        });
    </script>
</body>
</html>
