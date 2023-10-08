<?php
include("connection.php");
if(isset($_POST['pay']))
{
    $donorname = $_POST['donorname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bank = $_POST['bank'];
    $accountnumber = $_POST['accountnumber'];
    $donationamount = $_POST['donationamount'];
    $organization = $_POST['organization'];

    $sql = "INSERT INTO charity (donorname, address, email, phono, choosbank, accno, donateamt, organization) 
            VALUES ('$donorname', '$address', '$email', '$phone', '$bank', '$accountnumber', '$donationamount', '$organization')";
   $res = mysqli_query($conn,$sql);

    if(!$res) {
         echo "<script>alert('Error inserting donation.');</script>";
       
    }
    $accountnumber = $conn->real_escape_string($_POST['accountnumber']);
    $query = "select * from charity where accno = '$accountnumber'";
    if ($result = $conn->query($query)) {

      $row = $result->fetch_assoc();
          $field1name = $row["donorname"];
          $field2name = $row["address"];
          $field3name = $row["email"];
          $field4name = $row["phono"];
          $field5name = $row["choosbank"];
  $field6name = $row["accno"];
    $field7name = $row["donateamt"];
      $field8name = $row["organization"];
      $result->free();
}}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
background-image:url("forlog2.png");
    background-position: center;
    margin-top: 120px;
    background-size: cover;
    background-repeat: no-repeat;
}
.boxes{
    background-image:url("forlog2.png");
    margin-bottom:20%;
    border-radius:4px;
    padding-left:5%;
    padding-right:5%;
    font-weight:bold;
}
button{
    margin-top:20px;
      background-image:url("forlog2.png");
}
</style>
</head>
<body>
    <div class="boxes">
        <?php
 echo " Name :  ";
 echo '<b>'.$field1name.'</b><br />';
 echo  "Address :  " ;
echo $field2name.'<br />';
echo  "Email :  " ;
echo $field3name.'<br />';
echo " Phone Number  :  " ;
echo $field4name.'<br />';
echo " Bank  :  "; 
echo $field5name;
 echo  "Account Number :  " ;
echo $field6name.'<br />';
 echo  "Donated Amount :  " ;
echo $field7name.'<br />';
 echo  "Donate To  :  " ;
echo $field8name.'<br />';

?> 
    <form action ="charitypayment.php" method="post">
    
        <button type="submit" name="donate">Make Donation </button>
      </form>
      
</body>
</div>
</body>
</html>