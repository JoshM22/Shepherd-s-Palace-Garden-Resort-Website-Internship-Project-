<?php
// PHP Variables
$hotel_name = "Shepherds Palace Garden & Resort";
$address = "Highway, Brgy. Dalayap, Candaba, Pampanga";
$contact = "+63 912 345 6789";

$rooms = [
    ["type" => "Standard Room", "price" => "₱2,500 / night"],
    ["type" => "Deluxe Room", "price" => "₱3,500 / night"],
    ["type" => "Suite Room", "price" => "₱5,000 / night"]
];

$events = [
    "Wedding Reception",
    "Birthday Party",
    "Corporate Meetings",
    "Conference & Seminars"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $hotel_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png">



    
</head>
<body>

<div class="page-wrapper">

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-logo">
            <a href="index.php">
                <img src="images/shepherdslogo.png" alt="Hotel Logo">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="rooms.php">ROOMS</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="facilities.php">FACILITIES</a></li>
            <li><a href="contacts.php">CONTACT</a></li>
        </ul>
    </nav>

    <!-- Banner Image -->
    <div class="banner-container">
    <img src="images/shepherds2.png" alt="Banner" class="banner">

    <div class="banner-text">
        <h2 class="hotelName2">CHERISH EVERY MOMENT AT</h2>
        <br>
        <h1 class="hotelName">Shepherd's Palace</h1>
        <h2 class="hotelName3">GARDEN & RESORT</h2>
    </div>
    </div>

    <!-- Header -->
    
     <header>
        <br>
        <br>
        <br>
        <br>
           
        
        <br>
        <div style="flex: 1; margin-left: 50px;">
            <div style="margin-bottom: 10px;">
                <span style="color: #ffd000;">★</span>
                <span style="color: #FFD700;">★</span>
                <span style="color: #FFD700;">★</span>
                <span style="color: #FFD700;">★</span>
                <!-- Partial star using linear gradient -->
                <span style="
                    display: inline-block;
                    width: 18px;
                    height: 18px;
                    background: linear-gradient(90deg, #FFD700 50%, #ccc 50%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    font-weight: bold;
                ">★</span>
    </div>
        <p class="qoute">Where Moments Become Memories.</p>
        <div class="spinfo">
            <br>
            <p>Shepherd’s Palace Garden & Resort is a peaceful getaway located in Brgy. Dalayap, Candaba, Pampanga. 
                Just a short drive from Angeles City and San Fernando, it is the perfect place to relax and enjoy nature.</p>
            <br>
            <p>The resort is surrounded by beautiful gardens and open spaces. 
                Guests can stay in comfortable rooms, swim in the pools, or host events in spacious function halls. 
                Every area is designed for comfort and relaxation, making your stay enjoyable and memorable.</p>
            <br>
            <p>
                Shepherd’s Palace Garden & Resort was developed by a local family who wanted to help people that surrounds them. They're from a christian family who teach and spread the word of God. 
                From a small piece of land, the resort grew into a full garden resort with pools, cottages, and event spaces. 
                Over the years, it has become a favorite destination for families, couples, and groups looking for a calm and welcoming place to celebrate life’s special moments.
            </p>
            <br>
            <p>Shepherd’s Palace is ideal for family trips, romantic getaways, or special celebrations. 
                The resort provides friendly service, safe surroundings, and clean, eco-friendly spaces for all guests.</p>
            <br>
            <p>At Shepherd’s Palace Garden & Resort, every visit is special.
                 Whether you are relaxing by the pool, celebrating an event, or simply enjoying the gardens, the resort makes it easy to create happy memories. 
                Come, relax, and enjoy your time in comfort and style.</p>
            <br>
        </div>
        
        <br>
        <br>
        <br>
        <br>
    </header>

    

    
    

    <section class="info">
    <div class="info-container">

        <!-- About -->
        <div class="info-col">
            <h2 class="abouthotel">About Shepherd's Palace</h2>
            <p class="aboutinfo">
                Shepherd’s Palace Garden & Resort is a premier destination in Pampanga where elegance meets comfort. 
                Surrounded by serene gardens and refined architecture, the resort offers luxurious accommodations, 
                world-class amenities, and exceptional event spaces. Whether for a relaxing getaway, grand celebration, 
                or corporate gathering, Shepherd’s Palace provides a sophisticated setting designed to create unforgettable experiences.
            </p>
        </div>

        <!-- Explore -->
        <div class="info-col">
            <h2>Explore</h2>
            <ul class="explore-links">
                <li><a href="#about">About</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="info-col">
            <h2>Contact</h2>
            <p><i class="fa-solid fa-location-dot"></i> Highway, Brgy. Dalayap, Candaba, Pampanga</p>
            <p><i class="fa-solid fa-phone"></i> 0982 083 820</p>
            <p><i class="fa-solid fa-envelope"></i> shepherds.info@gmail.com</p>

            <div class="socials">
                <a href="https://www.facebook.com/ShepherdsPalace"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/_shepherdspalace/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/@shepherdspalace"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

    </div>
</section>




    <!--<section id="contact">
        <h2>Book Now</h2>
        <p>For reservations and event inquiries, please contact us.</p>
        <a href="#" class="btn">Contact Us</a>
    </section> -->

</div> 

<!-- Footer -->
<footer class="footer">
    &copy; <?php echo date("Y"); ?> <?php echo $hotel_name; ?>. All Rights Reserved.
</footer>

<!-- Scroll Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});
</script>

</body>
</html>
