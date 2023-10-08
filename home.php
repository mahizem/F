<?php
include("connection.php");
?>
<html>
    <head>
        <title> home page 
</title>
<link rel="stylesheet" href="mystyle.css">   
</head>
<body><div class="area"></div><nav class="main-menu">
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
  </body>
  
</html>
