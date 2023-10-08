<?php

include("connection.php");
 
global $fetchData;



if(isset($_POST['submit']))
{
    $id = $conn->real_escape_string($_POST['ID']);
    $query = "select * from waterbills where ID = '$id'";
    if ($result = $conn->query($query)) {

      $row = $result->fetch_assoc();
          $field1name = $row["name"];
          $field2name = $row["charge_amount"];
          $field3name = $row["last_payment"];
          $field4name = $row["pay_deadline"];
          $field5name = $row["ID"];


         
      
      $result->free();
  }
}
?>
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
 margin-right: 300px;
 margin-bottom: 20px;
 margin-left: 400px;
    padding: 10px;
   
 
}
</style> 
</head>
<fieldset class="waterdisplay" >
<legend>
Customer informations
</legend>
<?php
 echo "Customer Name :  ";
 echo '<b>'.$field1name.'</b><br />';
 echo  "Customer Charge amount :  " ;
echo $field2name.'<br />';
echo  "last payment date :  " ;
echo $field3name.'<br />';
echo " payment deadline  :  " ;
echo $field4name.'<br />';
echo " ID  :  "; 
echo $field5name;

?> 
<form action="paymentaction.php" method="post">
<button type="submit" name="payy" class="pay">Make Payment </button>

</form>


</fieldset>
  


</html>