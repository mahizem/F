<?php

include("connection.php");
 
global $fetchData;



if(isset($_POST['submit']))
{
    $id = $conn->real_escape_string($_POST['cardnumber']);
    $query = "select * from hospital where id = '$id'";
    if ($result = $conn->query($query)) {

      $row = $result->fetch_assoc();
          $field1name = $row["hname"];
             $field2name = $row["dname"];
                $field3name = $row["pname"];
          $field4name = $row["id"];
          $field5name = $row["service"];
          $field6name = $row["charge"];
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
Patient informations
</legend>
<?php
echo "Hospital Name :  ";
 echo '<b>'.$field1name.'</b><br />';
 echo "Docter Name :  ";
 echo '<b>'.$field2name.'</b><br />';
 echo "Patient Name :  ";
 echo '<b>'.$field3name.'</b><br />';
 echo  "Card Number :  " ;
echo $field4name.'<br />';
echo  "Services used :  " ;
echo $field5name.'<br />';
echo " Charge Amount  :  " ;
echo $field6name.'<br />';

?> 
<form action="hospitalpayaction.php" method="post">
<button type="submit" name="payy" class="pay">Make Payment </button>

</form>


</fieldset>
  


</html>