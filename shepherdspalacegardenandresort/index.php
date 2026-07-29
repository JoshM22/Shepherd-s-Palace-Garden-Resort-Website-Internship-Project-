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
    <link rel="stylesheet" href="stylehome.css">
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


    <div class="banner-container">
    <video class="banner" autoplay muted loop playsinline>
            <source src="vids/banner.mp4" type="video/mp4">
    </video>

    <div class="banner-text">
        <h1 class="hotelName">Shepherd's Palace</h1>
        <h2 class="hotelName3">GARDEN & RESORT</h2>
        <br>
        <!--<p class="hotelAddress">HIGHWAY, BRGY. DALAYAP, CANDABA, PAMPANGA</p>-->
        
    </div>
    </div>
    

    <!-- Header 
    <header>
        <br>
        <h1 class="hotelName">Shepherd's Palace</h1>
        <h2 class="hotelName2">GARDEN & RESORT</h2>
        <br>
        <p class="hotelAddress">HIGHWAY, BRGY. DALAYAP, CANDABA, PAMPANGA</p>
        <br>
        <br>
        <br>
        <br>
    </header> -->

    <br><br><br>
    <section id="about" style="display: flex; align-items: center; gap: 30px; padding: 80px 50px;">
    <!-- Text on the left -->

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
            
            

            <h2 class="Intro">WHERE ELEGANCE MEETS COMFORT</h2>
            <p class="hotelInfo" style="font-size: 15px; line-height: 1.6;">
                Discover a sanctuary of luxury in Pampanga. Our hotel and resort combines 
                sophisticated accommodations, serene gardens, and state-of-the-art amenities, 
                creating the perfect backdrop for both relaxing stays and memorable events.
            </p>
            <br><br>
            <!-- Usage in body -->
            <p style="font-size: 15px">
                Contact Number
            </p>
            <p style="margin-top: 5px; font-size: 20px;">
                <i class="fa-solid fa-phone" style="padding-right: 10px;"></i> +63 919 085 1944
            </p>
            <br>
            <p style="font-size: 15px">
                Email
            </p>
            <p style="margin-top: 5px; font-size: 20px;">
                <i class="fa-solid fa-envelope" style="padding-right: 10px;"></i> shepherdspalace.info@gmail.com
            </p>
        </div>

        <!-- Images on the right -->
        <div style="flex: 1; display: flex; flex-direction: row; gap: 30px; padding-left: 50px; margin-right: 20px; align-items: flex-start;">
            <img src="images/mainlobby.jpg" alt="Luxury Room" 
                style="width: 300px; height: 300px; object-fit: cover; border-radius: 4px; margin-top: -20px;">
            <img src="images/poolarea.jpg" alt="Resort Garden" 
                style="width: 300px; height: 300px; object-fit: cover; border-radius: 4px; margin-top: 20px;">
        </div>

       
  
    
    </section>
    <br><br><br>

    
    
    <div class="rooms-section">
    <br><br><br><br>

    <h2 style="text-align: center; margin-bottom: 10px; padding-top: 20px;" class="villa">
        Villas
    </h2>

    <br><br>

    <div class="room-grid">

        <div class="room-item">
            <img src="images/roomdv.jpg" alt="Deluxe Villa">
            <div class="room-caption">
                <h3 class="roomtitle">Deluxe Villa</h3>
                <p class="room-info">Spacious private villa with garden view</p>
                <p class="room-meta">
                    <i class="fa-solid fa-user-group"></i> 2–4 Guests &nbsp;&nbsp;
                    <i class="fa-solid fa-bed"></i> King Bed
                </p>

                <p class="room-price">₱9,900 / night</p>
            </div>
        </div>

        <div class="room-item">
            <img src="images/roomurd.png" alt="Upper Room Deluxe">
            <div class="room-caption">
                <h3 class="roomtitle">Upper Room Deluxe</h3>
                <p class="room-info">Elegant upper-floor room with balcony</p>
                <p class="room-meta">
                    <i class="fa-solid fa-user-group"></i> 2–4 Guests &nbsp;&nbsp;
                    <i class="fa-solid fa-bed"></i> King Bed
                </p>
                <p class="room-price">₱3,500 / night</p>
            </div>
        </div>

        <div class="room-item">
            <img src="images/roomcv.jpg" alt="Centro Villa">
            <div class="room-caption">
                <h3 class="roomtitle">Centro Villa</h3>
                <p class="room-info">Modern villa near the resort center</p>
                <p class="room-meta">
                    <i class="fa-solid fa-user-group"></i> 2–4 Guests &nbsp;&nbsp;
                    <i class="fa-solid fa-bed"></i> King Bed
                </p>
                <p class="room-price">₱4,200 / night</p>
            </div>
        </div>

    </div>

    <br><br><br><br><br><br>
    <section class="promo-video-inline">
        <div class="promo-video-inner">
            <div class="promo-video-text">
                <h2>Shepherd's Palace Garden &amp; Resort</h2>
                <p>Watch our resort showcase video and experience the ambiance, pools, gardens, and event spaces before you arrive.</p>
            </div>
            <div class="promo-video-frame">
                <video controls poster="images/shepherdsthumbnail.jpg">
                    <source src="vids/promotionalvideo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
    
    

    <section class="events">
    <h2 class="eventInfo">Events We Host</h2>

    <div class="events-grid">

        <div class="event-card">
            <img src="images/event3.jpg" alt="Wedding Reception">
            <div class="event-overlay">
                <h3>Wedding Reception</h3>
            </div>
        </div>

        <div class="event-card">
            <img src="images/event2.jpg" alt="Birthday Party">
            <div class="event-overlay">
                <h3>Birthday Party</h3>
            </div>
        </div>

        <div class="event-card">
            <img src="images/event1.jpg" alt="Graduation Ceremony">
            <div class="event-overlay">
                <h3>Graduation Ceremony</h3>
            </div>
        </div>

    </div>
</section>

    
        
    

    <section class="amenities">
        <br><br>
        <h2>Shepherd's Palace Amenities & Facilities</h2>
        <div class="amenities-grid">
            <div class="amenity-item"><i class="fa-solid fa-map-location-dot"></i><span>Events Place</span></div>
            <div class="amenity-item"><i class="fa-solid fa-water"></i><span>Swimming Pool</span></div>
            <div class="amenity-item"><i class="fa-solid fa-utensils"></i><span>Restaurant</span></div>
            <div class="amenity-item"><i class="fa-solid fa-hotel"></i><span>Resort</span></div>
            <div class="amenity-item"><i class="fa-solid fa-wifi"></i><span>Free WIFI</span></div>
            <div class="amenity-item"><i class="fa-solid fa-tv"></i><span>Smart Rooms</span></div>
            <div class="amenity-item"><i class="fa-solid fa-car"></i><span>Free Parking</span></div>
            <div class="amenity-item"><i class="fa-solid fa-building"></i><span>Function Hall</span></div>
            <div class="amenity-item"><i class="fa-solid fa-bed"></i><span>Room Accommodation</span></div>
            <div class="amenity-item"><i class="fa-solid fa-dumbbell"></i><span>Gym</span></div>
            <div class="amenity-item"><i class="fa-solid fa-mug-hot"></i><span>Reigns Cafe</span></div>
            <div class="amenity-item"><i class="fa-solid fa-house"></i><span>Cottages</span></div>
            <div class="amenity-item"><i class="fa-solid fa-spa"></i><span>Spa</span></div>
            <div class="amenity-item"><i class="fa-solid fa-microphone"></i><span>KTV Rooms</span></div>
            <div class="amenity-item"><i class="fa-solid fa-stairs"></i><span>Grand Staircase</span></div>
        </div>
    </section>

    

    
   <section class="maplocation">
    <h2 class="find">Find Us Here</h2>
    <br><br><br>
    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.5271729836018!2d120.86211217446252!3d15.018929966699261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396fe43af5bd1db%3A0xbb7fd402e9c137aa!2sShepherd&#39;s%20Palace%20Garden%20and%20Resort!5e0!3m2!1sen!2sph!4v1770777490704!5m2!1sen!2sph"
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    </section>

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
