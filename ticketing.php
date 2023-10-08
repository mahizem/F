<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing</title>
      <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="ticketingstyle.css">
   <link rel="stylesheet" href="mystyle.css">  
   <style>
    .header{
        margin-left:21.5%;
    }
    button:hover{
        background-color:pink;
    }
    button{
        width:20%;
        height:30%;
       
    }
    h1{
        color:black;
        
    }
 
   </style>
   </head>
<body>

<!-- header -->

<header class="header">

<a href="#" class="logo"> <i class="fas fa-ticket-alt"></i> Ticketing </a>

</header>
<!-- end-->
<div class="board">

<h1>Select Ticket Type </h1>

    <button>Bus Tickets</button>
    <button>Airline Ticket</button>
     <form action="movie.php">
    <button>Movie Ticket</button>
    </form>
</div>
  
    
</body>
    
  
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


