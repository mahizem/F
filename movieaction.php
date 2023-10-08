<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticketing</title>
      <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
     <link rel="stylesheet" href="mystyle.css">  
    </head>
    <style>
        .header{
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    background: #885233;
    box-shadow: var(--box-shadow);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
       
}

.header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: #FEC232;
    text-decoration: none;
}
    body {
  font-family: Arial, sans-serif;
   background-image:url("forlog2.png");
}

form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-image:url("forlog2.png");
  border-radius: 5px;
}

h3 {
  margin-top: 10px;
}

select {
  display: block;
  margin-bottom: 10px;
  padding: 5px;
  width: 100%;
}

button {
  display: block;
  margin-top: 10px;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#totalPrice {
  margin-top: 20px;
  font-weight: bold;
}
.cl{
  margin-top:13%;
}
input{
  margin-bottom:10px;
}
.mo{
    margin-left:35%;
    padding-left:30px;
    margin-right:35%;
    margin-bottom:5%;
    background-image:url("forlog2.png");
}
</style>
<?php
include("connection.php");


if(isset($_POST['submit']))
{
$fname = $_POST['name'];
$age = $_POST['age'];
$time = $_POST['time'];
$phono = $_POST['phono'];

  $sql = "INSERT INTO movie (name,age,time,phono) 
    VALUES('$fname','$age','$time','$phono')";
   $res = mysqli_query($conn,$sql);

   if(!$res){
    header("location: movie.php");
}
 

   $query = "SELECT * FROM availableshows WHERE minage = ' $age' AND time = '$time'";
$result= mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
 $field1name = $row["moviename"];
       $field2name = $row["minage"];
       $field3name = $row["time"];
        $field4name = $row["sitsleft"];
        $field5name = $row["price"];
}

      mysqli_free_result($result);

mysqli_close($conn);
}

?>

<body>
<header class="header">

<a href="#" class="logo"> <i class="fa-solid fa-film"></i>Movie Ticket </a>

</header>
<div class="cl">
    <div class="mo">
    <?php
 echo "Movie Name :  ";
 echo '<b>'.$field1name.'</b><br />';
 echo  "Parental Guidance if bellow age :  " ;
echo $field2name.'<br />';
echo  "Starting Time : " ;
echo $field3name.'<br />';
echo  "Open sits left : " ;
echo $field4name.'<br />';
echo  "Price : " ;
echo $field5name.'<br />';
?> 
</div>
 
<form action="mpayment.php" method="post">
       

  <h3>Choose a popcorn type:</h3>
  <select type ="number" name="popcorn">
    <option type ="number" value="null" >none</option>
    <option type ="number" value="25.67" >Small</option>
    <option type ="number" value="35.54" >Medium</option>
   
  </select>

 
  <h3>Choose a drink type:</h3>
  <select type ="number" name="drink">
     <option type ="number" value="null" >none</option>
    <option type ="number" value="30.54" >Coke</option>
    <option type ="number" value="30.54" >Pepsi</option>
    
  </select>
  <button type="submit" name="movie" > Calculate Price: </button>
</form>
</body>