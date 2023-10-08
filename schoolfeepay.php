<?php
include("connection.php");

if(isset($_POST['submit']))
{
$id = $_POST['id'];
    $id = $conn->real_escape_string($_POST['id']);
    $query = "SELECT * FROM schoolfeepay WHERE id = '$id'";
    if ($result = $conn->query($query)) {

      $row = $result->fetch_assoc();
          $field1name = $row["name"];
          $field2name = $row["id"];
          $field3name = $row["sex"];
          $field4name = $row["grade"];
          $field5name = $row["club"];
  
      $result->free();
  }
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Retrieve Data</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
       
.payment-button {
display: inline-block;
margin-right: 10px;
}
#educationOptions {

display: inline-block;
margin-right: 50px;
}
#pdate {
/* Add your desired styles here */
border: 1px solid #ccc;
padding: 5px;
border-radius: 4px;
font-size: 14px;
width: 200px;

}
.input-container {
display: flex;
justify-content: flex-start;
align-items: center;
padding-top: 20px;
margin-bottom: 10px;
}

.input-container label {
   margin-right: 10px;
}

.input-container input[type="date"] {
    width: 150px;
   
}
.input{

margin-left:3%;

}
.input2{
margin-left:50%;
}
.label {
display: block;
margin-bottom: 5px;
}


input[type="date"], input[type="reset"], input[type="submit"] {
padding: 5px;
}
.button {
width: 100px; /* Adjust the width as needed */
}
header {
background-color:;
padding: 2px;
text-align: center;
}

    /* Add your footer styles here */
    footer {
        background-color: #f2f2f2;
        padding: 5px;
        text-align: center;
    }
img{
 
    display:block;
    margin:0 auto;
border-radius: 50px;
height: 100px;
width: 100px;
}
.payment-button {
display: inline-block;
margin-right: 10px;
}
#educationOptions {

display: inline-block;
margin-right: 50px;
}
.container{
    display:block;
    margin:0 auto;
    margin-right:25%;
    margin-left:25%;
    margin-bottom:2%;
    margin-top:5%;
    border-radius: 4px;
    background: radial-gradient(859px at 10% 20%, rgb(245, 220, 154) 0%, rgb(164, 78, 51) 90%);
    color:#fffff;
}
.fill{
    margin-right:25%;
   margin-left:25%;
   margin-bottom:5%;
}
body{
    
    background-image:url("images/hss.jpg");
    height: 100%;
width: 100%;
}

</style>

</head>
<body>
<div class="bigfiled">
<fieldset class="container">
<legend> student information</legend>
<img src="images (1).jpg"/><br>
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

</fieldset>

<fieldset class="fill">
<legend>Payment details</legend>
<form action="schoolfeeaction.php" method="POST">
<input type="button" id="educationButton" class="payment-button" value="Educational Payment">
<input type="button" id="tutorialButton" class="payment-button" value="Tutorial Payment">
<input type="button" id="clubButton" class="payment-button" value="Club Payment">
<br><br>

<div id="educationOptions" style="display: none;">
  <input type="radio" id="monthly" name="educationalpayment" value="2500">
  <label class="label" for="monthly">Monthly</label><br>
  <input type="radio" id="quarterly" name="educationalpayment" value="3000">
  <label for="quarterly">Quarterly</label><br>
  <input type="radio" id="halfyearly" name="educationalpayment" value="4000">
  <label for="halfyearly">Half-yearly</label>

  <?php

 $monthly=$_POST['monthly'];
 echo $monthly;
 
  ?>
</div>

<div id="tutorialOptions" style="display: none;">
  <input type="radio" id="tutorialMonthly" name="tutorialpayment" value="Monthly">
  <label class="label" for="tutorialMonthly">Monthly</label><br>
  <input type="radio" id="tutorialQuarterly" name="tutorialpayment" value="Quarterly">
  <label for="tutorialQuarterly">Quarterly</label><br>
  <input type="radio" id="tutorialHalfyearly" name="tutorialpayment" value="Half-yearly">
  <label for="tutorialHalfyearly">Half-yearly</label>
</div>

<div id="clubOptions" style="display: none;">
  <input type="checkbox" id="sport" name="clubpayment" value="sport">
  <label class="label" for="sport">Sport Club</label><br>
  <input type="checkbox" id="music" name="clubpayment" value="music">
  <label for="music">Music Club</label><br>
  <input type="checkbox" id="art" name="clubpayment" value="art">
  <label for="art">Art Club</label>
</div>
<input type="button" value="total amount">


<div class="input-container">
<label for="pdate">Enter Payment Date</label>
<input type="date" id="pdate" name="paymentdate">
</div>

<div class="input-container">

<div class="input2">
<input type="reset" value="Cancel" class="button">
</div>
<div class="input">
<input type="submit" value="Continue" class="button">
</div>
</form>
</fieldset>

<script>
document.getElementById("educationButton").addEventListener("click", function() {
var educationOptions = document.getElementById("educationOptions");
educationOptions.style.display = educationOptions.style.display === "none" ? "block" : "none";

var tutorialOptions = document.getElementById("tutorialOptions");
tutorialOptions.style.display = "none";

var clubOptions = document.getElementById("clubOptions");
clubOptions.style.display = "none";
});

document.getElementById("tutorialButton").addEventListener("click", function() {
var tutorialOptions = document.getElementById("tutorialOptions");
tutorialOptions.style.display = tutorialOptions.style.display === "none" ? "block" : "none";

var educationOptions = document.getElementById("educationOptions");
educationOptions.style.display = "none";

var clubOptions = document.getElementById("clubOptions");
clubOptions.style.display = "none";
});

document.getElementById("clubButton").addEventListener("click", function() {
var clubOptions = document.getElementById("clubOptions");
clubOptions.style.display = clubOptions.style.display === "none" ? "block" : "none";

var educationOptions = document.getElementById("educationOptions");
educationOptions.style.display = "none";

var tutorialOptions = document.getElementById("tutorialOptions");
tutorialOptions.style.display = "none";
});
// Get the radio buttons element
const radioButtons = document.querySelectorAll('input[type="radio"]');

// Initialize a variable to keep track of the last clicked radio button
let lastClickedRadioButton = null;

// Add click event listener to each radio button
radioButtons.forEach(function(radioButton) {
radioButton.addEventListener('click', function() {
// Check if the radio button is already selected
if (this === lastClickedRadioButton) {
// Deselect the radio button by setting its checked property to false
this.checked = false;
// Reset the last clicked radio button variable
lastClickedRadioButton = null;
} else {
// Update the last clicked radio button variable
lastClickedRadioButton = this;
}
});
});


</script>
</body>
</div>

</html>


