<?php

include("connection.php");
if(isset($_POST['submit']))
{
$amt = $_POST['amt'];
$id1 = $conn->real_escape_string($_POST['account']);
$sql = "select amount from account where id = '$id1'";
$res = mysqli_query(  $conn , $sql);
$amount = mysqli_fetch_array($res, MYSQLI_NUM);
$sub = $amount[0] - $amt;
$sql = "UPDATE account  SET amount = $sub WHERE id = '$id1' ";
$retval = mysqli_query(  $conn , $sql);

$id = $conn->real_escape_string($_POST['accno']);
$sql = "select amount from account where id = '$id'";
$res = mysqli_query(  $conn , $sql);
$tamount = mysqli_fetch_array($res, MYSQLI_NUM);
$add = $tamount[0] + $amt;
$sql = "UPDATE account  SET amount = $add WHERE id = '$id' ";
$retval = mysqli_query(  $conn , $sql);
if(!$id){
  echo "<script language='javascript'>" ;
  echo "alert('please fill your id')";
 echo "</script>";
}
if($amt > $amount[0] ) {
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
