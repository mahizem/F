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
Please Confirm Your ID :
</legend>
<form method="post">
<label ><b>Payer ID : </b></label>
    <input type="text" placeholder="Enter Your ID" name="eidreal"  required>
  <label ><b>Account Number : </b></label>
  <input type="text" placeholder="Enter Your Account Number" name="eid"  required>
<button type="submit" name="pay" class="pay">Confirm</button>
</form>


</fieldset>
  </html>
<?php

include("connection.php");
if(isset($_POST['pay']))
{

  $id = $conn->real_escape_string($_POST['eid']);
$sql = "select amount from account where id = '$id'";
$res = mysqli_query(  $conn , $sql);
$amount = mysqli_fetch_array($res, MYSQLI_NUM);
$sql = "select chargeamt from electricbills where id = '$id'";
$res = mysqli_query(  $conn , $sql);
$charge_amount = mysqli_fetch_array($res, MYSQLI_NUM);
$sub = $amount[0] - $charge_amount[0];
$sql = "UPDATE account  SET amount = $sub WHERE id = '$id' ";
$retval = mysqli_query(  $conn , $sql);
if(!$id){
  echo "<script language='javascript'>" ;
  echo "alert('please fill your id')";
 echo "</script>";
}
if($charge_amount[0] > $amount[0] ) {
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
