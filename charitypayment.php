
<html>
<head>
<link rel="stylesheet" href="mystyle.css"> 
<style>
  .waterdisplay{

    width: 30%;
  background-image:url("forlog2.png");
  color:black;
  font-weight: bolder;
  border-radius: 40px;
  border-color:  #854D4D;
  box-shadow: #666666;
  float: left;
  padding: 10px;
   margin-top:200px;
 margin-right: 70px;
 margin-bottom: 20px;
 margin-left: 400px;
 
}
</style> 
</head>
<fieldset class="waterdisplay" >
<legend>
Please Confirm Your Account Number  :
</legend>
<form method="post">
<
    <label ><b>Account Number : </b></label>
    <input type="text" placeholder="Enter Account Number" name="acountnum"  required>
 
<button type="submit" name="pay" class="pay">Confirm</button>
</form>


</fieldset>
  </html>
<?php

include("connection.php");
if(isset($_POST['pay']))
{
   
   $ano = $conn->real_escape_string($_POST['acountnum']);
$sql = "select donateamt from charity where accno = '$ano'";
$res = mysqli_query(  $conn , $sql);
$donationamount = mysqli_fetch_array($res, MYSQLI_NUM);

$id = $conn->real_escape_string($_POST['acountnum']);
$sql = "select amount from account where ID = '$id'";
$res = mysqli_query($conn , $sql);
$amount = mysqli_fetch_array($res, MYSQLI_NUM);

$sub = $amount[0] - $donationamount[0];

$sql = "UPDATE account  SET amount = '$sub' WHERE ID = '$id' ";
$retval = mysqli_query(  $conn , $sql);

$sql = "select balance from mekedoniaacc where ano = '100024'";
$res = mysqli_query(  $conn , $sql);
$balance = mysqli_fetch_array($res, MYSQLI_NUM);

$add = $donationamount[0] + $balance[0];

$sql = "UPDATE mekedoniaacc  SET balance = '$add' WHERE ano = '100024' ";
$retval = mysqli_query(  $conn , $sql);

if($donationamount[0] > $amount[0]) {
  echo "<script language='javascript'>" ;
  echo "alert('you dont have enough balance')";
 echo "</script>";
 die();
}
  else{
    echo "<script language='javascript'>" ;
    echo "alert('payment sucessusful !!!')";
   echo "</script>";
   die();
   
  }
  header("location: home.php");
 mysqli_close($conn);
}
?>
