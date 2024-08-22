<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restaurent

    </title>
    <link href="img/logo.png" rel="icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restaurent</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="menu.php" class="nav-item nav-link active">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.php" class="dropdown-item">Booking</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    
                    
        <?php
        // PHP code to fetch and display dishes
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "restaurent";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve all dishes
        $sql = "SELECT id, name, des, price,  url FROM dishes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="tab-content">';
            echo '<div id="tab-1" class="tab-pane fade show p-0 active">';
            echo '<div class="row g-4">';

            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {

                $name = $row['name'];
                $price = $row['price'];
                echo '<div class="col-lg-6">';
                echo '<div class="d-flex align-items-center">';
                echo '<img class="flex-shrink-0 img-fluid rounded" src="' . $row["url"] . '" alt="" style="width: 80px;">';
                echo '<div class="w-100 d-flex flex-column text-start ps-4">';
                echo '<h5 class="d-flex justify-content-between border-bottom pb-2">';
                echo '<span>' . $row['name'] . '</span>';
                echo '<span class="text-primary">₹' . $row['price'] . '</span>';

                echo '</h5>';
                echo '<small class="fst-italic">' . $row['des'] . '</small>';
                echo '<button class="btn btn-primary mt-3 order-btn" onclick="addtocart(\'' . $name . '\',' . $price . ')" data-name="' . $name . '" data-price="' . $price . '">Order</button>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            echo '</div>'; 
            echo '</div>'; 
            echo '</div>'; 
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    
                </div>
            </div>
        </div>
        <!-- Menu End -->
        
        <div class="container mt-5">
    <hr>
    <h2>Cart</h2>
    <div id="cart" class="mb-3">
        <!-- Cart items will be displayed here -->
    </div>

    <hr>

    <div>

    <h4 id="displaycarts" class="mb-5"></h4>
    </div>

    <div id="checkout" class="mt-4">
        <h4 class="mb-5">Total: <span id="total">₹0</span></h4>
        <button class="btn btn-primary" onclick="checkout()">Checkout</button>
    </div>
</div>

       <!-- Footer Start -->
       <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link"  href="about.php">About Us</a>
                        <a class="btn btn-link" href="contact.php">Contact Us</a>
                        <a class="btn btn-link" href="menu.php">Order Food</a>
                        <a class="btn btn-link" href="testimonial.php">About Us</a>
                        <a class="btn btn-link" href="team.php">Team</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact us</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ram@Devops</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9087356083</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>ramdevops2005@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Subcribe</h4>
                        <p>Make a Wish for the latest updates Dish In Your Table</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email">
                            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Sign Up</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>



    <script>

        let cart = [] // empty list

    function addtocart(itemname, price)
{    
    cart.push({ name: itemname, price: price });

    displaycart();
}


function displaycart()
{
  

let cartelements = document.getElementById('cart');
cartelements.innerHTML = ""; // Clear previous content

cart.forEach(item => {
    // Create a new div element for each item
    let itemDiv = document.createElement('div');
    itemDiv.classList.add('card', 'mb-3');// Optional: Add a class for styling

    // Create the HTML content for the item
    itemDiv.innerHTML = `
     <div class="card-body">
            <h5 class="card-title">${item.name}</h5>
            <p class="card-text">₹ ${item.price}</p>
        </div>
    `;

    // Append the item div to the cart element
    cartelements.appendChild(itemDiv);
});

    updatotal();
}


    function updatotal(){
        let total = 0;

        cart.forEach(item=>{
            total += item.price;
        });


        document.getElementById('total').textContent = `₹${total}`;
    }


    function checkout()

    {

        console.log(getotal());
        alert(`Total Of Amount ${getotal()} Of Money You Need To Pay!`);
        document.getElementById('displaycarts').innerHTML= '';
        cart = [];
        displaycart(); // update the cart has been clear
    }


    function getotal()
    {
        let total = 0;

        cart.forEach(item=> {

            total += item.price;
        });
        return total;
    }

    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



    
</body>
</html>