<?php

include("connection.php");
?>
<html>
    <head>
        <title>
            utility payment
</title>
<link rel="stylesheet" href="mystyle.css"> 
<style>
.water{
  margin-left: 255px;
  margin-right: 300px;

color:black;
  font-weight: bolder;
  border-radius: 40px;

  box-shadow: #666666;
}
.payment{
    margin-left: 255px;
}
.mobile{
    display:inline;
}
p{
    background-color:yellow;
}
    </style>
</head>

<form action="wateraction.php" method="post">
<fieldset class="water" >
<legend>For water bill payment</legend>
   <label ><b>Payer ID : </b></label>
    <input type="text" placeholder="Enter Your ID" name="ID" >
<br/>
<button type="submit" name="submit" class="payment"> ok </button>
</fieldset>
 </form>

 <form action="electricaction.php" method="post">
<fieldset class="water" >
<legend>For Electric bill Payment</legend>
   <label ><b>Payer ID : </b></label>
    <input type="text" placeholder="Enter Your ID" name="eid" >
<br/>
<button type="submit" name="submit" class="payment"> ok </button>
</fieldset>
 </form>

 <form action="mobileaction.php" method="post">
<fieldset class="water" >
<legend> Top Up </legend>
   <label ><b>Phone number: </b></label>
   <input type="number" placeholder="Enter Your Phone number" name="pnum" >
   <label ><b>Amount: </b></label>
    <input type="text" placeholder="Enter amount" name="amt" >
    <br/>
    <button type="submit" name="submit" class="mobile"> for Safari-COM </button>
    <button type="submit" name="submit" class="mobile"> for ETHIO-TELE-COM </button>
</fieldset>
 </form>


 <form method="post">
<fieldset class="water" >
<legend> Top Up </legend>
   <label ><b> liter : </b></label>
   <input type="number" placeholder="Enter liter" name="liter" > <br>
      <label ><b>Account Number : </b></label>
    <input type="number" placeholder="Enter Account Number" name="ID"  ><br>
    <button type="submit" name="pay" class="mobile"> Make Payment: </button>
    <?php
      include("connection.php");
   if(isset($_POST['pay'])){
    $liter = $_POST['liter'];
    if(!$liter){
     echo "<script language='javascript'>" ;
  echo "alert('please fill liter amount')";
 echo "</script>";
  header("location: utilitypayments.php");
}
    $amt= 70.53 * $liter;
  $id = $conn->real_escape_string($_POST['ID']);
$sql = "select amount from account where id = '$id'";
$res = mysqli_query(  $conn , $sql);
$amount = mysqli_fetch_array($res, MYSQLI_NUM);
$sub = $amount[0] - $amt;
$sql = "UPDATE account  SET amount = $sub WHERE id = '$id' ";
$retval = mysqli_query(  $conn , $sql);

if(!$id){
  echo "<script language='javascript'>" ;
  echo "alert('please fill your account number')";
 echo "</script>";
   header("location: utilitypayments.php");
}
if($amt > $amount[0] ) {
  echo "<script language='javascript'>" ;
  echo "alert('you dont have enough balance')";
 echo "</script>";
  header("location: utilitypayments.php");
}
  else {
    echo "<script language='javascript'>" ;
    echo "let popup = alert('payment sucessusful !!! you are charged with '+ $amt+'birr')";
   echo "</script>";
  die();
  }
 mysqli_close($conn);
}?>
 </form>

</fieldset>

 <fieldset class="water">
    <legend>school payment</legend>
<form action="schoolfeepay.php" method="post">

       <label for="id">Id</label>
       <input type="text" id="id" name="id" required>
       <button type="submit" name="submit" class="mobile"> Enter </button>
    </form>

</fieldset>
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

<html>