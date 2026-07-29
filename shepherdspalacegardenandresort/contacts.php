<?php
$hotel_name = "Shepherds Palace Garden & Resort";
$address = "Highway, Brgy. Dalayap, Candaba, Pampanga";
$contact = "+63 912 345 6789";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events - <?php echo $hotel_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<div class="page-wrapper">
    <nav class="navbar" id="navbar">
        <div class="nav-logo">
            <a href="index.php"><img src="images/shepherdslogo.png" alt="Hotel Logo"></a>
        </div>
        
        <ul class="nav-links" id="navLinks">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="rooms.php">ROOMS</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="facilities.php">FACILITIES</a></li>
            <li><a href="contacts.php">CONTACT</a></li>
        </ul>
    </nav>

    <img src="images/shepherdsfront1.jpg" alt="Shepherds Palace" class="banner">

    <section class="contact-content" style="padding: 60px 20px; max-width: 1200px; margin: 0 auto;">
        <h2 class="find" style="margin-bottom: 40px;">Get In Touch</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px; margin-bottom: 50px;">
            <div>
                <h3 style="font-family: Poppins, sans-serif; margin-bottom: 15px;"><i class="fa-solid fa-location-dot" style="margin-right: 10px; color: #8f8131;"></i>Address</h3>
                <p style="font-size: 15px; line-height: 1.6;">Highway, Brgy. Dalayap, Candaba, Pampanga</p>
            </div>
            <div>
                <h3 style="font-family: Poppins, sans-serif; margin-bottom: 15px;"><i class="fa-solid fa-phone" style="margin-right: 10px; color: #8f8131;"></i>Phone</h3>
                <p style="font-size: 15px;">+63 919 085 1944</p>
                <p style="font-size: 15px;">0982 083 820</p>
            </div>
            <div>
                <h3 style="font-family: Poppins, sans-serif; margin-bottom: 15px;"><i class="fa-solid fa-envelope" style="margin-right: 10px; color: #8f8131;"></i>Email</h3>
                <p style="font-size: 15px;">shepherdspalace.info@gmail.com</p>
            </div>
        </div>
    </section>

    <section class="info">
        <div class="info-container">
            <div class="info-col">
                <h2>About Hotel</h2>
                <p class="aboutinfo">Shepherds Palace Garden and Resort is a premier destination in Pampanga where elegance meets comfort. We offer exceptional event spaces for weddings, birthdays, and corporate gatherings.</p>
            </div>
            <div class="info-col">
                <h2>Explore</h2>
                <ul class="explore-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Hotel</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contacts.php">Contact</a></li>
                </ul>
            </div>
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
</div>
<!-- PHP files in site: index.php, about.php, rooms.php, events.php, contacts.php -->
<footer class="footer">&copy; <?php echo date("Y"); ?> <?php echo $hotel_name; ?>. All Rights Reserved.</footer>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var navbar = document.getElementById("navbar");
    var navToggle = document.getElementById("navToggle");
    var navLinks = document.getElementById("navLinks");
    window.addEventListener("scroll", function() {
        navbar.classList.toggle("scrolled", window.scrollY > 50);
    });
    if (navToggle && navLinks) {
        navToggle.addEventListener("click", function() {
            navLinks.classList.toggle("show");
            navToggle.classList.toggle("active");
        });
        navLinks.querySelectorAll("a").forEach(function(a) {
            a.addEventListener("click", function() { navLinks.classList.remove("show"); navToggle.classList.remove("active"); });
        });
    }
});
</script>
</body>
</html>
