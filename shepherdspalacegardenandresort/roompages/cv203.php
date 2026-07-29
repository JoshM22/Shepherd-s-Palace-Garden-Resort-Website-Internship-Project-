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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" href="../stylerooms.css">
</head>
<body>
<div class="page-wrapper">
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-logo">
            <a href="index.php">
                <img src="../images/shepherdslogo.png" alt="Hotel Logo">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../about.php">ABOUT</a></li>
            <li><a href="../rooms.php">ROOMS</a></li>
            <li><a href="../events.php">EVENTS</a></li>
            <li><a href="../events.php">FACILITIES</a></li>
            <li><a href="../contacts.php">CONTACT</a></li>
        </ul>
    </nav>

    
    <video class="banner" autoplay muted loop playsinline>
        <source src="../vids/cv203.mp4" type="video/mp4">
    </video>

    
    <div class="page-hero-title">
        <h1>Centro Villa 203</h1>
        <a href="#booking-form" class="book-now-link">Book Now</a>
    </div>

       <div class="room-slider">

            <div class="slider-track" id="sliderTrack">

                <img src="../rooms/cv203/cv203.jpg">
                <img src="../rooms/cv203/cv203(1).jpg">
                <img src="../rooms/cv203/cv203(2).jpg">
                <img src="../rooms/cv203/cv203(3).jpg">
                <img src="../rooms/cv203/cv203(7).jpg">
                <img src="../rooms/cv203/cv203(8).jpg">

            </div>

            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>

        </div>


    

    <!-- LEFT SIDE DETAILS -->
    <div class="room-details">
    </div>

        <ul class="amenities-row">
            <li><i class='bx bx-group'></i> <span>10 Guests</span></li>
            <li><i class='bx bx-wifi'></i> <span>Free Wifi</span></li>
            <li><i class='bx bx-restaurant'></i> <span>Breakfast</span></li>
            <li><i class='bx bx-coffee'></i> <span>Coffee</span></li>
            <li><i class='bx bx-swim'></i> <span>Swimming</span></li>
            <li><i class='bx bx-droplet'></i> <span>Towels</span></li>
            <li><i class='bx bx-bath'></i> <span>Toilet and Bath</span></li>
        </ul>
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
                    <a href="https://www.tiktok.com/@shepherdspalace"><i class="fa-brands fa-tiktok"></i></a>
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
const track = document.getElementById("sliderTrack");
let slides = track.children;
let index = 1;

// CLONE FIRST & LAST
const firstClone = slides[0].cloneNode(true);
const lastClone = slides[slides.length - 1].cloneNode(true);

track.appendChild(firstClone);
track.insertBefore(lastClone, slides[0]);

slides = track.children;

const slideWidth = slides[0].clientWidth;
track.style.transform = `translateX(-${slideWidth * index}px)`;

function changeSlide(direction) {
    if (direction === 1) {
        index++;
    } else {
        index--;
    }

    track.style.transition = "transform 0.5s ease-in-out";
    track.style.transform = `translateX(-${slideWidth * index}px)`;
}

track.addEventListener('transitionend', () => {
    if (slides[index].isSameNode(firstClone)) {
        track.style.transition = "none";
        index = 1;
        track.style.transform = `translateX(-${slideWidth * index}px)`;
    }

    if (slides[index].isSameNode(lastClone)) {
        track.style.transition = "none";
        index = slides.length - 2;
        track.style.transform = `translateX(-${slideWidth * index}px)`;
    }
});
</script>





</body>
</html>