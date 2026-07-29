<?php
$hotel_name = "Shepherds Palace Garden & Resort";
$address = "Highway, Brgy. Dalayap, Candaba, Pampanga";
$contact = "+63 919 085 1944";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rooms &amp; Suites - <?php echo $hotel_name; ?></title>
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
    <img src="rooms/upc201/upc201.jpg" alt="Banner" class="banner">
    
    <div class="page-hero-title">
        <h1>Rooms &amp; Suites</h1>
        <a href="#booking-form" class="book-now-link">Book Now</a>
    </div>

    <div class="room-filter">

        <button class="filter-btn active" data-filter="all">All Rooms</button>

        <button class="filter-btn" data-filter="main2">Main Building - 2nd Floor</button>
        <button class="filter-btn" data-filter="main3">Main Building - 3rd Floor</button>
        <button class="filter-btn" data-filter="main4">Main Building - 4th Floor</button>

        <button class="filter-btn" data-filter="pool">Pool Area</button>
        <button class="filter-btn" data-filter="castle">Castle Rooms</button>

    </div>

    <div class="rooms-shepherds">
        <div class="rooms-klir-grid">

        
            
            <article class="room-card-flip main2" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/dr202/dr202(1).jpg" alt="Deluxe Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">De Luxe Room 202</h3>
                            <p class="room-card-price">PHP 12,500.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 12,500.00</p>
                            <h3 class="room-card-title">De Luxe Room 202</h3>
                            <p class="room-card-desc">Spacious private villa with garden view. Welcome to your ultimate getaway where comfort and convenience merge seamlessly.</p>
                            <ul class="room-card-amenities">
                                <li>10 Guests</li>
                                <li>DeLuxe Room-202</li>
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>

                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/dr202.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip main2" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/dr203/dv203(5).jpg" alt="Deluxe Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">De Luxe Room 203</h3>
                            <p class="room-card-price">PHP 12,500.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 12,500.00</p>
                            <h3 class="room-card-title">De Luxe Room 203</h3>
                            <p class="room-card-desc">Spacious private villa with garden view. Welcome to your ultimate getaway where comfort and convenience merge seamlessly.</p>
                            <ul class="room-card-amenities">
                                <li>10 Guests</li>
                                <li>DeLuxe Room-203</li>
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>

                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/dr203.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip main2" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/dr205/dv205.jpg" alt="Deluxe Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">De Luxe Room 205</h3>
                            <p class="room-card-price">PHP 12,500.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 12,500.00</p>
                            <h3 class="room-card-title">De Luxe Room 205</h3>
                            <p class="room-card-desc">Spacious private villa with garden view. Welcome to your ultimate getaway where comfort and convenience merge seamlessly.</p>
                            <ul class="room-card-amenities">
                                <li>4 Guests</li>
                                <li>DeLuxe Room-205</li>
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>

                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/dr205.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip main2" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/dr210/dv210.jpg" alt="Upper Room Deluxe">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">De Luxe Room 210</h3>
                            <p class="room-card-price">PHP 4,500.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 4,500.00</p>
                            <h3 class="room-card-title">De Luxe Room 210</h3>
                            <p class="room-card-desc">Elegant upper-floor room with balcony. Perfect for couples or small families seeking tranquility and style.</p>
                            <ul class="room-card-amenities">
                                <li>2 Guests</li>
                                <li>DeLuxe Room-210</li>
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>
                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/dr210.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            
        

            <article class="room-card-flip pool" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/cv201/cv201.jpg" alt="Centro Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Centro Villa 201</h3>
                            <p class="room-card-price">PHP 4,200.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 4,200.00</p>
                            <h3 class="room-card-title">Centro Villa 201</h3>
                            <p class="room-card-desc">Modern villa near the resort center. Indulge in the perfect harmony of comfort and convenience for your stay.</p>
                            <ul class="room-card-amenities">
                               <li>2 Guests</li>
                                <li>Centro Villa-201</li> 
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>
                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/cv201.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip pool" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/cv202/cv202(5).jpg" alt="Centro Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Centro Villa 202</h3>
                            <p class="room-card-price">PHP 4,200.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 4,200.00</p>
                            <h3 class="room-card-title">Centro Villa 202</h3>
                            <p class="room-card-desc">Modern villa near the resort center. Indulge in the perfect harmony of comfort and convenience for your stay.</p>
                            <ul class="room-card-amenities">
                               <li>2 Guests</li>
                                <li>Centro Villa-202</li> 
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>
                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/cv202.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip pool" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/cv203/cv203.jpg" alt="Centro Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Centro Villa 203</h3>
                            <p class="room-card-price">PHP 4,200.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 4,200.00</p>
                            <h3 class="room-card-title">Centro Villa 203</h3>
                            <p class="room-card-desc">Modern villa near the resort center. Indulge in the perfect harmony of comfort and convenience for your stay.</p>
                            <ul class="room-card-amenities">
                               <li>4 Guests</li>
                                <li>Centro Villa-203</li> 
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>
                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/cv203.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip pool" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/cv204/cv204.jpg" alt="Centro Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Centro Villa 204</h3>
                            <p class="room-card-price">PHP 4,200.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 4,200.00</p>
                            <h3 class="room-card-title">Centro Villa 204</h3>
                            <p class="room-card-desc">Modern villa near the resort center. Indulge in the perfect harmony of comfort and convenience for your stay.</p>
                            <ul class="room-card-amenities">
                               <li>4 Guests</li>
                                <li>Centro Villa-204</li> 
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>
                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/cv204.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip pool" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/cv205/cv205.jpg" alt="Centro Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Centro Villa 205</h3>
                            <p class="room-card-price">PHP 4,200.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 4,200.00</p>
                            <h3 class="room-card-title">Centro Villa 205</h3>
                            <p class="room-card-desc">Modern villa near the resort center. Indulge in the perfect harmony of comfort and convenience for your stay.</p>
                            <ul class="room-card-amenities">
                               <li>4 Guests</li>
                                <li>Centro Villa-205</li> 
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>
                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/cv205.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip castle" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="rooms/upc201/upc201.jpg" alt="Centro Villa">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Upper Castle 201</h3>
                            <p class="room-card-price">PHP 4,200.00</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <p class="room-card-price">PHP 4,200.00</p>
                            <h3 class="room-card-title">Upper Castle 201</h3>
                            <p class="room-card-desc">Modern villa near the resort center. Indulge in the perfect harmony of comfort and convenience for your stay.</p>
                            <ul class="room-card-amenities">
                               <li>10 Guests</li>
                                <li>Upper Castle-201</li> 
                                <li>Free Wifi</li>
                                <li>Breakfast</li>
                                <li>Coffee</li>
                                <li>Swimming</li>
                                <li>Towels</li>
                                <li>Toiletries for 2 persons</li>
                            </ul>
                            <div class="room-card-buttons">
                                <a href="roompages/upc201.php" class="btn-details">Details</a>
                                <a href="#booking-form" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            
          
        </div>

        <p class="rooms-tagline">Each of our guest rooms feature a private bath, quality furnishings and a serene garden setting. Perfect for a relaxing stay in Pampanga.</p>
    </div>

    <div class="reservation-call">
        <p><strong>Reservation</strong></p>
        <a href="tel:+639190851944"><?php echo $contact; ?></a>
        <p class="tag">Call us for bookings and inquiries.</p>
    </div>

    <section class="booking-section-klir" id="booking-form">
        <h2>Hotel Book Now Form</h2>
        <p class="subtitle">Check availability for your stay</p>
        <form class="booking-form-klir" action="contacts.php" method="get">
            <div class="form-row">
                <div class="form-group">
                    <label>Check in</label>
                    <input type="date" name="checkin" required>
                </div>
                <div class="form-group">
                    <label>Check out</label>
                    <input type="date" name="checkout" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Adults</label>
                    <select name="adults">
                        <option value="1">1 Adult</option>
                        <option value="2">2 Adults</option>
                        <option value="3">3 Adults</option>
                        <option value="4">4 Adults</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Children</label>
                    <select name="children">
                        <option value="0">0 Children</option>
                        <option value="1">1 Child</option>
                        <option value="2">2 Children</option>
                        <option value="3">3 Children</option>
                        <option value="4">4 Children</option>
                    </select>
                </div>
            </div>
            <div class="form-group full-width">
                <button type="submit" class="btn-check">Check Availability</button>
            </div>
        </form>
    </section>



    <section class="info">
        <div class="info-container">
            <div class="info-col">
                <h2>About Hotel</h2>
                <p class="aboutinfo">
                    Shepherd's Palace Garden &amp; Resort is a premier destination in Pampanga where elegance meets comfort. Our villas and rooms offer luxurious accommodations with serene garden views.
                </p>
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
        
<footer class="footer">&copy; <?php echo date("Y"); ?> <?php echo $hotel_name; ?>. All Rights Reserved.</footer>
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

// Flip card on click/tap (mobile) - hover already flips on desktop
    document.querySelectorAll(".room-card-flip").forEach(function(card) {
        card.addEventListener("click", function(e) {
            if (e.target.closest("a") || e.target.closest("button")) return;
            if (window.matchMedia("(hover: none)").matches) {
                e.preventDefault();
                this.classList.toggle("flipped");
            }
        });
    });
</script>

<script>

const filterBtns = document.querySelectorAll(".filter-btn");
const rooms = document.querySelectorAll(".room-card-flip");

filterBtns.forEach(btn => {

    btn.addEventListener("click", () => {

        document.querySelector(".filter-btn.active").classList.remove("active");
        btn.classList.add("active");

        let filter = btn.getAttribute("data-filter");

        rooms.forEach(room => {

            if(filter == "all"){
                room.style.display = "";
            }
            else if(room.classList.contains(filter)){
                room.style.display = "";
            }
            else{
                room.style.display = "none";
            }

        });

    });

});

</script>
</body>
</html>