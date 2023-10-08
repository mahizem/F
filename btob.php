<?php
include("connection.php");

?>
<html>
    <head>
        <title>

        </title>
        <script type = "text/javascript" src="js.js"></script>
        <link rel="stylesheet" href="mystyle.css">   
        <style>
          fieldset{
            margin-top:20%;
            margin-right:20%;
            margin-left:21%;
            color:white;
          }
        </style>
    </head>

    <form action="btobaction.php" method="post">
    <fieldset >
        <legend>
Bank TO Bank Transfer </legend>
<div >
   <h3>Choose Account:</h3>
  <select name="account">
     <option value="1202258" data-price="0">1202258</option>
    <option value="1202259" data-price="20">1202259</option>
  </select>
<br>
   <h3>Choose Banks:</h3>
  <select name="acc">
     <option value="" >Awash Banks</option>
    <option value="" >Abissinia Banks</option>
    <option value="" >Commercial Banks</option>
    <option value="" >Zemen Bank</option>
    <option value="" >Nib Banks</option>
    <option value="" >Amhara Banks</option>
  </select>
  <br>
<label >Account Number:</label>
        <input type="number" name="accno" required>
<br>
        <label >Transfer Amount:</label>
        <input type="number" name="amt" required>
<br>
        <button name="submit">Transfer</button>
        
    </fieldset>
</form>

    </html>

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