<?php  
session_start();
include("connection.php");
?>
<html>
    <head>
        <title>
            login page
        </title>
        <link rel="stylesheet" href="mystyle.css">   
        <style>
body{
    background-image:url("forlog2.png");
}
 .home{
        margin-top:20px;
        background-color:#EEEE;
        text-decoration:none;
      }  
      .home:active{
background-color:pink;
      }
        </style>
    </head>
    <body>
     

    <div class="forbox">
    
<form action="logaction.php" method="post">
        <fieldset class="logfield1">
    <legend>For Individual</legend>
    <div>
        <div>
 <label> <b>Username : </b> </label>
    <input type="text" placeholder="Enter Username" name="uname"
     value= "<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" >
    </div>
     <div>
 <label> <b>Password : </b> </label>
    <input type="password" placeholder="Enter password" name="pword"
     value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" >
    </div>
  <button type="submit" name="submit">Log In :</button>
        </fieldset>
        </form>

        <?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
        
	?>


        <form action="clogaction.php" method="post">
        <fieldset class="logfield2">
    <legend>For Organization</legend>
    <div>
        <div>
 <label> <b> Company Username : </b> </label>
    <input type="text" placeholder="Enter Username" name="cuname" >
    </div>
     <div>
 <label> <b>Company Password : </b> </label>
    <input type="password" placeholder="Enter password" name="copsw" >
    </div>
  <button type="submit" name="submit">Log In :</button>
  <div class="home">
  <a href="index.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                           Home
                        </span>
                    </a>
</div>
        </fieldset>
        </form>
<div>
    </body>

    

</html>