
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .g{
max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-image:url("forlog2.png");
  border-radius: 5px;
  margin-top:20%;
      }     
.price{
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-image:url("forlog2.png");
  border-radius: 5px;
  margin-top:20%;
}

    </style>
   
</head>
<body>
<div class="g">
     <form  method="post">
<label ><b>Confirm Payer Account : </b></label>
    <input type="text" placeholder="Enter Your ID" name="ID"  required>
 
<button type="submit" name="mpay" class="pay">Confirm and pay</button>
</form>
    <?php
  
    include("connection.php");
   if(isset($_POST['movie'])){
     $drinks = $_POST['drink'];
     $popcorn = $_POST['popcorn'];
     $price = $drinks + $popcorn;
        $sql = "INSERT INTO `popcorndrink`(`popcorn`, `drink`, `price`)
                 VALUES (' $popcorn','$drinks',' $price')";
     $res = mysqli_query(  $conn , $sql);
     $query = "SELECT * FROM availableshows WHERE price <> '0'";
$result= mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 $field1name = $row["price"];
}
$total_price = $field1name + $price;

 mysqli_close($conn);
}
     ?>
<div class="price">
 <p>
    <?php
    echo "<script language='javascript'>" ;
  echo "alert('Total Price'+$total_price+'birr')";
 echo "</script>";
    ?>
   </p>
</div>
  <?php
  include("connection.php");
   if(isset($_POST['mpay']))
   {
 $id = $_POST['ID'];
 $query = "SELECT * FROM availableshows WHERE price <> '0'";
$result= mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 $field1name = $row["price"];
}
$total_price = $field1name + $price;
$sql = "select amount from account where id = '$id'";
$res = mysqli_query(  $conn , $sql);
$amount = mysqli_fetch_array($res, MYSQLI_NUM);
$sub = $amount[0] - $total_price;
$sql = "UPDATE account  SET amount = $sub WHERE id = '$id' ";
$retval = mysqli_query(  $conn , $sql);
$sql = "select balance from movieamount where id = '100014'";
$res = mysqli_query(  $conn , $sql);
$balance = mysqli_fetch_array($res, MYSQLI_NUM);
$add = $balance[0] + $total_price;
$sql = "UPDATE movieamount  SET balance = $add WHERE id = '100014' ";
$retval = mysqli_query(  $conn , $sql);
 if($total_price > $amount[0] ) {
  echo "<script language='javascript'>" ;
  echo "alert('you dont have enough balance')";
 echo "</script>";
 die();
}
else{
    echo "<script language='javascript'>" ;
  echo "alert('payment completed')";
 echo "</script>";
}
   }
  ?>
   
    </div>
    
</body>
</html>




<!-- //     include("connection.php");
//    if(isset($_POST['movie'])){
//      $drinks = $_POST['drink'];
//      $popcorn = $_POST['popcorn'];
//      $price = $drinks[0]+$popcorn[0];
//         $sql = "INSERT INTO `popcorndrink`(`popcorn`, `drink`, `price`)
//                  VALUES (' $popcorn','$drinks',' $price')";
//      $res = mysqli_query(  $conn , $sql);
   
//      $id = $conn->real_escape_string($_POST['ID']);
//     $sql = "select amount from account where id = '$id'";
// $res = mysqli_query(  $conn , $sql);
// $amount = mysqli_fetch_array($res, MYSQLI_NUM);
//     $drinks = $_POST['drink'];
//      $popcorn = $_POST['popcorn'];
//     $amt= 300 + $drinks + $popcorn ;
//     echo "you are charged "; 
//     echo $amt ; 
//     echo "birr "; 
//     $sub = $amount[0] - $amt;
   
//    $sql = "UPDATE account  SET amount = $sub WHERE id = '$id' ";
// $retval = mysqli_query(  $conn , $sql);
// if(!$id){
//   echo "<script language='javascript'>" ;
//   echo "alert('please fill your id')";
//  echo "</script>";
// }
// if($amt > $amount[0] ) {
//   echo "<script language='javascript'>" ;
//   echo "alert('you dont have enough balance')";
//  echo "</script>";
//  die();
// }
//   else{
//     echo "<script language='javascript'>" ;
//     echo "alert('payment sucessusful !!!')";
//    echo "</script>";
//    die();
   
//   }
//   header("location: home.php");
//  mysqli_close($conn);
// } -->