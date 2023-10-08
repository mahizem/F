


<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hotel Website</title>
<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<!-- swiper js cdn link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<!-- custom css link -->
<link rel="stylesheet" href="hotel.css">
         <link rel="stylesheet" href="mystyle.css">    
<!-- swiper js cdn link -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<style>
    .header{
       margin-left:21%;
    }
    .home1{
        margin-left:21%;
    }
  
    .slider{
        margin-left:21%;
    }
    .regionnn{
        margin-left:21%;
        background-color:white;
    }
</style>
</head>
<body >

<!-- header -->

<header class="header">

<a href="#" class="logo"> <i class="fas fa-hotel"></i> hotel Reservation</a>
<h1>Find your next stay</h1>
</header>

<!-- home -->
<div class="home1">

<section class="home" id="home">
<div class="content">
<h3>Explore Ethiopia while you stay</h3>
<a href="#regions" class="btn"> Choose Your Region</a>
</div>
</section>
</div>

<!-- end -->
<!-- highlights section -->
<div class="slider">
<section class="highlights">
<h2>Discover the Beauty of Ethiopia</h2>
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<img src="images/cultural-heritage.jpg" alt="Cultural Heritage">
<h3>Cultural Heritage</h3>
<p>Immerse yourself in Ethiopia's rich history and cultural traditions.</p>
</div>
<div class="swiper-slide">
<img src="images/natural-wonders.jpg" alt="Natural Wonders">
<h3>Natural Wonders</h3>
<p>Experience breathtaking landscapes, waterfalls, and national parks.</p>
</div>
<div class="swiper-slide">
<img src="images/adventure.jpg" alt="Adventure">
<h3>Adventure</h3>
<p>Embark on thrilling adventures like hiking, trekking, and wildlife safaris.</p>
</div>
<div class="swiper-slide">
<img src="images/traditional-cuisine.jpg" alt="Traditional Cuisine">
<h3>Traditional Cuisine</h3>
<p>Savor delicious Ethiopian dishes and explore the vibrant food culture.</p>
</div>
</div>
<!-- Navigation buttons -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</section>
</div>
<!-- regions section -->
<div class="regionnn">
<section class="regions" id="regions">
<h1>Beautiful Regions of Ethiopia</h1>
<div class="region">
<a href="thehotels.php">
<img src="images/addis-ababa.jpg" alt="Addis Ababa">
<h2>Addis Ababa</h2>
<p>The vibrant capital city known for its rich history and cultural heritage.</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/lalibela.jpg" alt="Lalibela">
<h2>Lalibela</h2>
<p>Home to the famous rock-hewn churches, a UNESCO World Heritage site.</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/axum.jpg" alt="Axum">
<h2>Axum</h2>
<p>Discover the ancient ruins and archaeological sites of the Kingdom of Axum.</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/bahir-dar.jpg" alt="Bahir Dar">
<h2>Bahir Dar</h2>
<p>Experience the stunning Blue Nile Falls and the beautiful Lake Tana.</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/gondar.jpg" alt="Gondar">
<h2>Gondar</h2>
<p>Visit the Royal Enclosure and explore the medieval castles and churches.</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/harar.jpg" alt="Harar">
<h2>Harar</h2>
<p>Discover the ancient walled city and experience its unique cultural heritage.</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/nazret.jpg" alt="Nazret">
<h2>nazret</h2>
<p>Enjoy the scenic beauty and hot springs in this popular resort town.</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/hawasa.jpg" alt="Hawasa">
<h2>Hawasa</h2>
<p>Relax by the beautiful Lake Awasa and explore the surrounding nature.</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/debre-zeit.jpg" alt="Debre zeit">
<h2>Debre Zeit</h2>
<p>If you are looking for very original place where stay with animals in forest, in house made in wood near a lake, then ...</p>
</div>
<div class="region">
<a href="page1.html">
<img src="images/dire-dawa.jpg" alt="Dire Dawa">
<h2>Dire Dawa</h2>
<p> One of the biggest cities in Ethiopia that can surely steal your heart during your fortnight-long stay.</p>
</div>
<!-- Add more regions as needed -->
</section>
</div>

</body>




 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script src="hotelscript.js"></script>
</div>

</body>


<div class="container2">
<nav class="main-menu">
            <ul>
                <li>
                    <a href="utilitypayments.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                           Utility Payments
                        </span>
                    </a>
                  
                </li>
                 <li class="has-subnav">
                    <a href="$">
                        <i class="fa fa-globe fa-2x"></i>
                        <span class="nav-text">
                            Hotel Reservation
                        </span>
                    </a>
                    
                </li>
                    
                </li>
                <li class="has-subnav">
                    <a href="hospital.php">
                       <i class="fa fa-comments fa-2x"></i>
                        <span class="nav-text">
                          Hospital Bills
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="charity.php">
                       <i class="fa fa-camera-retro fa-2x"></i>
                        <span class="nav-text">
                            Charity Donations
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="ticketing.php">
                        <i class="fa fa-film fa-2x"></i>
                        <span class="nav-text">
                            Ticketing
                        </span>
                    </a>
                </li>
                <li>
                    <a href="btob.php">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                          Transfer Bank to Bank
                        </span>
                    </a>
                </li>
                
                <ul class="logout">
                <li>
                   <a href="report.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Reports
                        </span>
                    </a>
                </li>  
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>

</div>


</html>