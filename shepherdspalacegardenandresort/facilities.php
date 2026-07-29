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
    <link rel="stylesheet" href="stylefacilities.css">
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
    <img src="images/shepherdsImg4.jpg" alt="Banner" class="banner">
    
    <div class="page-hero-title">
        <h1>Facilities</h1>
        <p class="rooms-tagline">So many ways to unwind at Shepherd's Palace.</p>
    </div>

    <div class="rooms-klir">
        <div class="rooms-klir-grid">
            
            <!-- Lobby -->
            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/mainlobby.jpg" alt="Lobby">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Lobby</h3>
                            <p class="room-card-price">Warm &amp; welcoming</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Lobby</h3>
                            <p class="room-card-desc">
                                Step into our bright, garden-inspired lobby where our staff are ready to assist you. 
                                Comfortable seating, relaxing music, and complimentary Wi‑Fi set the tone for a stress‑free stay.
                            </p>
                            <ul class="room-card-amenities">
                                <li>24/7 Front Desk Assistance</li>
                                <li>Comfortable Lounge Seating</li>
                                <li>Welcome Drinks (select dates)</li>
                                <li>Complimentary Wi‑Fi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Pools -->
            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/poolarea1.jpg" alt="Pools">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Pool Area</h3>
                            <p class="room-card-price">Day &amp; night swimming</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Pool Area</h3>
                            <p class="room-card-desc">
                                Take a refreshing dip in our pools surrounded by lush gardens. 
                                Ideal for families, barkadas, and guests who simply want to relax by the water.
                            </p>
                            <ul class="room-card-amenities">
                                <li>Adult &amp; Kiddie Pools</li>
                                <li>Poolside Showers &amp; Changing Rooms</li>
                                <li>Daytime &amp; Evening Swimming (scheduled)</li>
                                <li>Poolside Seating &amp; Loungers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Cottages & Garden -->
            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/poolarea.jpg" alt="Garden Cottages">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Garden Cottages</h3>
                            <p class="room-card-price">Your private retreat</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Garden Cottages</h3>
                            <p class="room-card-desc">
                                Enjoy open‑air cottages surrounded by greenery—perfect for family bonding, 
                                team outings, or quiet afternoon merienda.
                            </p>
                            <ul class="room-card-amenities">
                                <li>Open &amp; Covered Cottages</li>
                                <li>Garden View Seating</li>
                                <li>Near Pools &amp; Common Areas</li>
                                <li>Ideal for Day Tours &amp; Small Gatherings</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Function Area -->
            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/event3.jpg" alt="Function Area">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Function Area</h3>
                            <p class="room-card-price">Events &amp; celebrations</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Function Area</h3>
                            <p class="room-card-desc">
                                Host intimate to medium‑sized events in our flexible function spaces—great for weddings, 
                                birthdays, reunions, and corporate gatherings.
                            </p>
                            <ul class="room-card-amenities">
                                <li>Event Styling Ready Venue</li>
                                <li>Sound System Ready (by arrangement)</li>
                                <li>Indoor &amp; Semi‑Outdoor Options</li>
                                <li>Customizable Layouts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Café / Dining 
            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/roomcv.jpg" alt="Dining Area">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Dining &amp; Café</h3>
                            <p class="room-card-price">Good food, great views</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Dining &amp; Café</h3>
                            <p class="room-card-desc">
                                Savor your favorite comfort dishes and refreshing drinks in relaxing indoor and outdoor 
                                dining spaces overlooking the gardens and pools.
                            </p>
                            <ul class="room-card-amenities">
                                <li>All‑Day Dining (resort schedule)</li>
                                <li>Indoor &amp; Al‑Fresco Seating</li>
                                <li>Group Set Menus (by reservation)</li>
                                <li>Coffee, Snacks &amp; Refreshments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article> -->

            <!-- Parking & Access 
            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/shepherdsImg1.jpg" alt="Parking & Access">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Parking &amp; Access</h3>
                            <p class="room-card-price">Convenient location</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Parking &amp; Access</h3>
                            <p class="room-card-desc">
                                Located along the highway in Brgy. Dalayap, our resort offers convenient access 
                                and on‑site parking for day guests and checked‑in visitors.
                            </p>
                            <ul class="room-card-amenities">
                                <li>On‑Site Vehicle Parking</li>
                                <li>Direct Highway Access</li>
                                <li>Signage &amp; Guard Assistance</li>
                                <li>Drop‑off Zone for Guests</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article> -->

            <!-- BILLIARD -->
            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/billiard.png" alt="Parking & Access">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Billiards</h3>
                            <p class="room-card-price">Convenient location</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Billiards</h3>
                            <p class="room-card-desc">
                                Located along the highway in Brgy. Dalayap, our resort offers convenient access 
                                and on‑site parking for day guests and checked‑in visitors.
                            </p>
                            <ul class="room-card-amenities">
                                <li>On‑Site Vehicle Parking</li>
                                <li>Direct Highway Access</li>
                                <li>Signage &amp; Guard Assistance</li>
                                <li>Drop‑off Zone for Guests</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/tabletennis.png" alt="Parking & Access">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Table Tennis</h3>
                            <p class="room-card-price">Convenient location</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Billiards &amp; Table Tennis</h3>
                            <p class="room-card-desc">
                                Located along the highway in Brgy. Dalayap, our resort offers convenient access 
                                and on‑site parking for day guests and checked‑in visitors.
                            </p>
                            <ul class="room-card-amenities">
                                <li>On‑Site Vehicle Parking</li>
                                <li>Direct Highway Access</li>
                                <li>Signage &amp; Guard Assistance</li>
                                <li>Drop‑off Zone for Guests</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <!-- GYM -->
            <article class="room-card-flip" tabindex="0">
                <div class="room-card-inner">
                    <div class="room-card-front">
                        <div class="room-card-image">
                            <img src="images/gym.jpg" alt="Parking & Access">
                        </div>
                        <div class="room-card-front-overlay">
                            <h3 class="room-card-title">Gym Area</h3>
                            <p class="room-card-price">Convenient location</p>
                            <span class="flip-hint"><i class="fa-solid fa-rotate"></i> Hover or tap to see details</span>
                        </div>
                    </div>
                    <div class="room-card-back">
                        <div class="room-card-body">
                            <h3 class="room-card-title">Billiards &amp; Table Tennis</h3>
                            <p class="room-card-desc">
                                Located along the highway in Brgy. Dalayap, our resort offers convenient access 
                                and on‑site parking for day guests and checked‑in visitors.
                            </p>
                            <ul class="room-card-amenities">
                                <li>On‑Site Vehicle Parking</li>
                                <li>Direct Highway Access</li>
                                <li>Signage &amp; Guard Assistance</li>
                                <li>Drop‑off Zone for Guests</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
           
        </div>

        <p class="rooms-tagline">Indulge in our relaxing facilities designed for families, friends, and unforgettable celebrations.</p>
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
</body>
</html>