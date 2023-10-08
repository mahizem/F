
 </html>
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
</style>
<body>

<!-- header -->

<header class="header">

<a href="#" class="logo"> <i class="fa-solid fa-film"></i>Movie Ticket </a>

</header>
<!-- end-->
<div class="cl">
 <form action="movieaction.php" method="post">
<label for="full name">Full Name:</label>
        <input type="text" name="name" required>
        <br>
          <label for="age">Age:</label>
        <input type="number" name="age" required>
        <br>
           <label for="time">Time :</label>
        <input type="time" name="time" required>
         <br>
           <label for="phono">Phone Number :</label>
        <input type="number" name="phono" required>

         <button type="submit" name="submit"> Available Shows</button>
         
  </form>
</div>
 