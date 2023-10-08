<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Bills</title>
      <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="hospitalstyle.css">
   <link rel="stylesheet" href="mystyle.css"> 
</head>
<style>
  .header{
    margin-left:21%;
  }
  body {
    
    display: flex; */
    align-items: center;
    justify-content: center;
    background-image: url(images/hospital111.jpg);
    margin-top:50%;
  background-repeat: no-repeat;
   }

form {
    margin-top: -400px; /* Adjust this value to move the form to the top*/
    margin-bottom: 20px;
    margin-left: 40%;
    margin-right: 20%;
    padding: 20px;
    background-color: rgba(167, 83, 15, 0.8);
    border-radius: 5px;
  width:40%;
  height:20%;
    align-items: center;
    text-align: center; 
}
label {
        display: block;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        padding: 10px;
        margin: 0 auto; 
        text-align: center;
    }
   
</style>
<body>
     <!-- header -->

   <header class="header">

    <a href="#" class="logo">  Hospital Bills </a>
   </header>
    <!--end-->

    <form action ="hospitalaction.php" method="post">
        <label for="card-number">Card-number:</label>
        <input type="text"  placeholder="enter your card number" name="cardnumber" required>

        <label for="hospital">Choose hospital:</label>
        <select id="hospital" name="hospital">
          <option value="Addis Hiwot Hospital ">Addis Hiwot Hospital </option>
          <option value="Gandhi Memorial Hospital">Gandhi Memorial Hospital</option>
          <option value="ICMC General Hospital">ICMC General Hospital</option>
          <option value="Landmark General Hospital">Landmark General Hospital</option>
          <option value="Zeweditu general hospital">Zeweditu General Hospital</option>
        </select>
       
        <button type="submit" name="submit"> Payment Info </button>
      </form>

    
</body>



<div class="area"><nav class="main-menu">
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
        </div></html>