<?php

include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hotel Website</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="hotel.css">
   <style>
      .fetch{
         background-color:#EEEEEE;
         margin-left:3%;
         margin-right:3%;
         padding-left:1%;
      }
      p{
         font-weight:bold;
         font-size:17px
      }
      .btnn{
          font: inherit;
  padding: 0.5rem 1.5rem;
  cursor: pointer;
  border-radius: 4px;
  background-color: #885233;
  color: #000000;
  background-image: url("forlog2.png");
  margin: 0 1rem;
      }
      .btnn:hover{
          background-image: #EEEEEE;
      }
   </style>
</head>
<body>

    <!-- header -->
 
    <header class="header">
 
       <a href="#" class="logo"> <i class="fas fa-hotel"></i> Ethiopia Skylight Hotel </a>
 
       <nav class="navbar">
          <a href="#availablity">Availablity</a>
          <a href="#room">room</a>
          <a href="#galleryy">gallery</a>
        
     
          
       </nav>
 
       <div id="menu-btn" class="fas fa-bars"></div>
 
    </header>
 
    <!-- end -->

     <!-- availability -->

   <section class="availability">

    <form method="post">

       <div class="box" >
          <p>check in <span>*</span></p>
          <input type="date" class="input" name="checkin">
       </div>

       <div class="box" >
          <p>check out <span>*</span></p>
          <input type="date" class="input" name="checkout">
       </div>


         <div class="box">
          <p>rooms <span>*</span></p>
          <select name="rooms" id="" class="input">
             <option value="1">1 rooms</option>
             <option value="2">2 rooms</option>
             <option value="3">3 rooms</option>
             <option value="4">4 rooms</option>
             <option value="5">5 rooms</option>
             <option value="6">6 rooms</option>
          </select>
       </div>

        <div class="box">
         <p>room type <span>*</span></p>
         <select  class="input" name="roomtype">
            <option value="standard room">standard room</option>
            <option value="Mini suite">Mini suite</option>
            <option value="Executive suite">Executive suite</option>
            <option value="Family suite">Family suite</option>
            <option value="Apartment-style">Apartment-style</option>
            <option value="presidentential suite">presidentential suite</option>
      </div>
       <input type="submit" name="check" value="check availability" class="btnn">

    </form>
    <div class="fetch">
    <p>
<?php
include("connection.php");
if(isset($_POST['check']))
{
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$rooms = $_POST['rooms'];
$roomtype = $_POST['roomtype'];

$sql = "INSERT INTO availablerooms(checkin,checkout,rooms,roomtype) 
    VALUES('$checkin','$checkout','$rooms','$roomtype')";
   $res = mysqli_query($conn,$sql);

   $checkin = $conn->real_escape_string($_POST['checkin']);
      $checkout = $conn->real_escape_string($_POST['checkout']);
       $roomtype = $conn->real_escape_string($_POST['roomtype']);
    $query = "select * from rooms where availablecheckin = '$checkin' AND availablecheckout = '$checkout' 
    AND roomtype ='$roomtype'";
    if ($result = $conn->query($query)) {

      $row = $result->fetch_assoc();
          $field1name = $row["roomtype"];
          $field2name = $row["roomsleft"];
          $field3name = $row["availablecheckin"];
          $field4name = $row["availablecheckout"];
          $field5name = $row["bednumbers"];

      $result->free();
  }

 echo "Room Type :  ";
 echo '<b>'.$field1name.'</b><br />';
 echo  "Room Left :  " ;
echo $field2name.'<br />';
echo  "Available Checkin :  " ;
echo $field3name.'<br />';
echo " Available Checkout  :  " ;
echo $field4name.'<br />';
echo " Bed numbers  :  "; 
echo $field5name;

mysqli_close($conn);
}

?></p></div>
 </section>

 <!-- end -->

 <!-- room -->

 <section class="room" id="room">

    <h1 class="heading">our room</h1>

    <div class="swiper room-slider">

       <div class="swiper-wrapper">

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">8,969.20 birr/night</span>
                <img src="images/standard.jpg" alt="">
                
             </div>
             <div class="content">
                <h3>standard room</h3>
                <p>Comfortable and inviting features with modern amenities. Pick from king-size beds with shower or bathtub</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">21,955.27/night</span>
                <img src="images/mini suite.jpg" alt="">
            
             </div>
             <div class="content">
                <h3>Mini suite </h3>
                <p>separate living area with a comfortable sofa and chairs </p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">27,459.85 birr/night</span>
                <img src="images/executive suite.jpg" alt="">
                
             </div>
             <div class="content">
                <h3>Executive suite </h3>
                <p>Air Conditioning ,Desk or Workplace, Hair Dryer, Bathtub , breakfast included</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">54,475.49 birr/night</span>
                <img src="images/family suite.jpg" alt="">
                
             </div>
             <div class="content">
                <h3>Family suite</h3> 
                <p>Desk or Workplace,Hair Dryer,Free Wifi,Bathtub for family</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">38,352.95 birr/night</span>
                <img src="images/apartment.jpg" alt="">
                
             </div>
             <div class="content">
                <h3>Apartment-style</h3>  
                <p> 1-bedroom, 2-bedroom, and 3-bedroom apartments that are suitable for long-stay guests and residents.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">book now</a>
             </div>
          </div>

          <div class="swiper-slide slide">
             <div class="image">
                <span class="price">165,022.22 birr/night</span>
                <img src="images/presidentential suite.jpg" alt="">
               
             </div>
             <div class="content">
                <h3>presidentential suite</h3>
                <p>spacious living room, dining room, two bedrooms, and a guest bathroom.</p>
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">book now</a>
             </div>
          </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

 </section>

 <!-- end -->

 <!-- gallery -->

 <section class="gallery" id="galleryy">

   <h1 class="heading">our gallery</h1>

   <div class="swiper gallery-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/gallery1.jpg" alt="">
            <div class="icon">
               <i class="fas fa-magnifying-glass-plus"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/gallery2.jpg" alt="">
            <div class="icon">
               <i class="fas fa-magnifying-glass-plus"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/gallery3.jpg" alt="">
            <div class="icon">
               <i class="fas fa-magnifying-glass-plus"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/gallery4.jpg" alt="">
            <div class="icon">
               <i class="fas fa-magnifying-glass-plus"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/gallery5.jpg" alt="">
            <div class="icon">
               <i class="fas fa-magnifying-glass-plus"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/gallery6.jpg" alt="">
            <div class="icon">
               <i class="fas fa-magnifying-glass-plus"></i>
            </div>
         </div>

      </div>

   </div>

</section>

<!-- end -->
 

 <!-- services -->

 <section class="services">

   <div class="box-container">

      <div class="box">
         <img src="images/service1.png" alt="">
         <h3>swimming pool</h3>
      </div>

      <div class="box">
         <img src="images/service2.png" alt="">
         <h3>food & drink</h3>
      </div>

      <div class="box">
         <img src="images/service3.png" alt="">
         <h3>Wifi</h3>
      </div>

      <div class="box">
         <img src="images/service4.png" alt="">
         <h3>fitness</h3>
      </div>

      <div class="box">
         <img src="images/service5.png" alt="">
         <h3>beauty spa</h3>
      </div>

      <div class="box">
         <img src="images/service6.png" alt="">
         <h3>Events</h3>
      </div>

   </div>

</section>

<!-- end -->


 <!-- faq -->

 <section class="faqs" id="faq">

   <h1 class="heading">frequently asked questions</h1>

   <div class="row">

      <div class="image">
         <img src="images/FAQs.png" alt="">
      </div>

      <div class="content">

         <div class="box active">
            <h3>How do I make a hotel reservation?</h3>
            <p>To make a hotel reservation, simply visit our website and enter your desired location, check-in and check-out dates, and the number of guests. Browse through the available options and select the hotel that best suits your preferences. Finally, provide your personal details and payment information to confirm your reservation.</p>
         </div>

         <div class="box">
            <h3>Can I modify or cancel my hotel reservation?</h3>
            <p>Yes, you can modify or cancel your hotel reservation, depending on the hotel's cancellation policy. </p>
         </div>

         <div class="box">
            <h3>what are payment methods?</h3>
            <p>We accept various payment methods, including credit cards, debit cards, and online payment platforms. The available payment options will be displayed during the booking process.</p>
         </div>

         <div class="box">
            <h3>How do I know if my hotel reservation is confirmed?</h3>
            <p>Once you complete the booking process and make the payment, you will receive a confirmation email with all the details of your reservation. You can also log in to your account on our website to view and print your reservation voucher.</p>
         </div>

      </div>

   </div>

</section>

<!-- end -->

 <!-- reservation -->

 <section class="reservation" id="reservation">

<h1 class="heading">book now</h1>

<form method="post">

   <div class="container">

      <div class="box" style=" float:bottom;">
         <p>name <span>*</span></p>
         <input type="text" class="input" placeholder="Your Name" name="name">
      </div>

      <div class="box">
         <p>email <span>*</span></p>
         <input type="text" class="input" placeholder="Your Email" name="email">
      </div>
      <div class="box">
         <p>Account Number <span>*</span></p>
         <input type="number" class="input" placeholder="Your Account Number" name="ano">
      </div>

      <div class="box">
         <p>check in <span>*</span></p>
         <input type="date" class="input" name="checkin">
      </div>

      <div class="box">
         <p>check out <span>*</span></p>
         <input type="date" class="input" name="checkout">
      </div>

      <div class="box">
         <p>adults <span>*</span></p>
         <select name="adults" class="input" name="adults">
            <option value="1">1 </option>
            <option value="2">2 </option>
            <option value="3">3 </option>
            <option value="4">4 </option>
            <option value="5">5 </option>
            <option value="6">6 </option>
         </select>
      </div>

      <div class="box">
         <p>children <span>*</span></p>
         <select name="child" class="input" name="child">
            <option value="1">1 </option>
            <option value="2">2 </option>
            <option value="3">3 </option>
            <option value="4">4 </option>
            <option value="5">5 </option>
            <option value="6">6 </option>
         </select>
      </div>

      <div class="box">
         <p>rooms <span>*</span></p>
         <select name="rooms" class="input" name="rooms">
            <option value="1">1 </option>
            <option value="2">2 </option>
            <option value="3">3 </option>
            <option value="4">4 </option>
            <option value="5">5 </option>
            <option value="6">6 </option>
         </select>
      </div>

      <div class="box">
         <p>room type <span>*</span></p>
         <select  class="input" name="roomtype">
            <option value="standard room">standard room</option>
            <option value="Mini suite">Mini suite</option>
            <option value="Executive suite">Executive suite</option>
            <option value="Family suite">Family suite</option>
            <option value="Apartment-style">Apartment-style</option>
            <option value="presidentential suite">presidentential suite</option>
      </div>
      
<input type="submit" name="submit" value="Book Now" class="btn">

   </div>
</form>
<?php

include("connection.php");
if(isset($_POST['submit']))
{ 
$name = $_POST['name'];
$ano = $_POST['ano'];
$email = $_POST['email'];
$adults = $_POST['adults'];
$child = $_POST['child'];
$rooms = $_POST['rooms'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$roomtype = $_POST['roomtype'];

  $sql = "INSERT INTO booknow(checkin,checkout,adult,children,rooms,roomtype,name,email,ano) 
    VALUES('$checkin','$checkout','$adults','$child','$rooms','$roomtype','$name','$email','$ano')";
   $res = mysqli_query($conn,$sql);
$sql = "INSERT INTO bookedrooms(type,number) 
    VALUES('$roomtype','$rooms')";
    $res = mysqli_query($conn,$sql);

     $checkin = $conn->real_escape_string($_POST['checkin']);
   $checkout = $conn->real_escape_string($_POST['checkout']);
      $roomtype = $conn->real_escape_string($_POST['roomtype']);
       $ano = $conn->real_escape_string($_POST['ano']);
   $sql = "select roomsleft from rooms where availablecheckin = '$checkin' AND 
   availablecheckout = '$checkout' AND roomtype = '$roomtype' ";
$res = mysqli_query(  $conn , $sql);
$room_available = mysqli_fetch_array($res, MYSQLI_NUM);

   $sql = "select rooms from booknow where checkin = '$checkin' AND checkout = '$checkout' 
   AND roomtype = '$roomtype'";
$res = mysqli_query(  $conn , $sql);
$room_booked = mysqli_fetch_array($res, MYSQLI_NUM);
$sub = $room_available[0] - $room_booked[0];

$sql = "UPDATE `rooms` SET `roomsleft`='$sub' WHERE availablecheckin = '$checkin' AND
   availablecheckout = '$checkout' AND roomtype = '$roomtype' ";
$res = mysqli_query(  $conn , $sql);

$sql = "select prices from rooms where availablecheckin = '$checkin' AND availablecheckout = '$checkout' 
   AND roomtype = '$roomtype'";
$res = mysqli_query(  $conn,$sql);
$prices = mysqli_fetch_array($res, MYSQLI_NUM);

$sql = "select amount from account where id = '$ano '";
$res = mysqli_query(  $conn , $sql);
$amount = mysqli_fetch_array($res, MYSQLI_NUM);

$sub = $amount[0] - $prices[0];
$sql = "UPDATE account  SET amount = '$sub' WHERE id = '$ano' ";
$res = mysqli_query(  $conn , $sql);

$sql = "select balance from hotelbalance where accno = '100022'";
$res = mysqli_query(  $conn , $sql);
$hotel_balance = mysqli_fetch_array($res, MYSQLI_NUM);
$add = $hotel_balance[0] + $prices[0];

$sql = "UPDATE `hotelbalance` SET `balance`='$add' WHERE accno = '100022'";
$res = mysqli_query($conn,$sql);
if($room_available[0] <= 0 ){
     echo "<script language='javascript'>" ;
  echo "alert('No rooms available')";
 echo "</script>";
 die();
}

if($room_booked[0] > $room_available[0] ) {
  echo "<script language='javascript'>" ;
  echo "alert('only'+$room_available+'rooms available')";
 echo "</script>";
 die();
}
  else{
    echo "<script language='javascript'>" ;
    echo "alert('Rooms Booked sucessusfully !!!')";
   echo "</script>";
   die();
   
  }
mysqli_close($conn);
}
?>
</section>

<!-- end -->
<!-- footer -->

<section class="footer">

<div class="box-container">

   <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +251901035591 </a>
      <a href="#"> <i class="fas fa-phone"></i> +251922337855</a>
      <a href="#"> <i class="fas fa-phone"></i> +251991149937</a>
      <a href="#"> <i class="fas fa-envelope"></i> onlinebankingethiopia@gmail.com</a>
      <a href="#"> <i class="fas fa-map"></i> Addis Ababa,Ethiopia</a>
   </div>

   <div class="box">
      <h3>quick links</h3>
      <a href="#"> <i class="fas fa-arrow-right"></i> home</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> about</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> rooms</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> gallery</a>
      
   </div>

   <div class="box">
      <h3>extra links</h3>
      <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
      <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
     
   </div>

</div>

<div class="share">
   <a href="#" class="fab fa-facebook-f"></a>
   <a href="#" class="fab fa-instagram"></a>
   <a href="#" class="fab fa-twitter"></a>
   <a href="#" class="fab fa-pinterest"></a>
</div>

<div class="credit">&copy; copyright @ 2023 by <span>Online Banking Ethiopia</span></div>

</section>

<!-- end -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>



 
 