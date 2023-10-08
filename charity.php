<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Works</title>
      <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="charitystyle.css">
   <link rel="stylesheet" href="mystyle.css"> 
</head>
<style>
   .header{
    margin-left:21%;
    background-image:url("forlog2.png");
    color:black;
  }
  body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
background-image:url("forlog2.png");
    background-position: center;
    margin-top: 120px;
    background-size: cover;
    background-repeat: no-repeat;
}
a{
    color:black;
}
form {
  
    margin: 0 auto;
    padding: 20px;
   background-image:url("forlog2.png");
    border-radius: 5px;
    width:100%;
    margin-left: 40%;
  }
  
  label {
    display:block;
  
  }
  .boxes{
     margin-left:5%;
  }

</style>

<body>
     <!-- header -->

   <header class="header">

    <a href="#" class="logo"> <i class="fas fa-hand-holding-heart"></i> Charity and Donation </a>
   </header>
    <!--end-->

<div class="boxes">
    <form action ="charityaction.php" method="post">
        <label for="donor-name">Donor Name:</label>
        <input type="text" id="donor-name" name="donorname" required>
    
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
    
        <label for="bank">Choose Bank:</label>
        <select id="bank" name="bank">
          <option value="Nib bank">Nib bank</option>
          <option value="Commercial bank of ethiopia">Commercial bank of ethiopia</option>
          <option value="Awash bank">Awash bank</option>
          <option value="Ahadu bank">Ahadu bank</option>
        </select>
    
        <label for="account-number">Account Number:</label>
        <input type="text"  name="accountnumber" required>
    
        <label >Donating Amount:</label>
        <input type="number"  name="donationamount" required>
    
        <label >Choose Organization to Donate to:</label>
        <select  name="organization">
          <option value="Mekedonia Homes">Mekedonia Homes </option>
          
        </select>
    
        <button type="submit" name="pay">Make Donation </button>
      </form>
</body>
</div>


<nav class="main-menu" style=" margin-bottom:200%;">
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
                    <a href="hotel.php">
                        <i class="fa fa-globe fa-2x"></i>
                        <span class="nav-text">
                            Hotel Reservation
                        </span>
                    </a>
                    
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