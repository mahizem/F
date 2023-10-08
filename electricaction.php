<?php

include("connection.php");
 
global $fetchData;



if(isset($_POST['submit']))
{
    $id = $conn->real_escape_string($_POST['eid']);
    $query = "select * from electricbills where id = '$id'";
    if ($result = $conn->query($query)) {

      $row = $result->fetch_assoc();
          $field1name = $row["name"];
          $field2name = $row["chargeamt"];
          $field3name = $row["lastpay"];
          $field4name = $row["paydeadline"];
          $field5name = $row["id"];


         
      
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
<form action="elecpayaction.php" method="post">
<button type="submit" name="payy" class="pay">Make Payment </button>

</form>


</fieldset>
  


</html>