<?php

include("connection.php");
?>

<html>
    <head>
        <title>
            sign up page
        </title>
        <link rel="stylesheet" href="mystyle.css">   
        <style>
          body{
             background-image:url("forlog2.png");
          }
        </style>
    </head>
<body>
    <form action="action_page.php" method="post">
     

      <fieldset class="field1">
    <legend>For Individual</legend>
    <div>


   <label for="fname"><b>First Name : </b></label>
    <input type="text" placeholder="Enter First name" name="fname" >
    </div>
       
<br/>
   <label for="lname"><b>Last Name : </b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" >
    </div>
       
<br/>
 <label for="uname"><b>Username : </b></label>
    <input type="text" placeholder="Enter Username" name="uname" >
    </div>
       
<br/>
<div>
 <label for="psw"><b>Password :  </b></label>
    <input type="password" placeholder="Enter Password" name="psw" >
</div>
    <br/>
    <div>
<label for="cpsw"><b> Confirm Password :</b></label>
    <input type="password" placeholder="Confirm Password" name="cpsw" >
    </div>
  <br/>
  <div>
<label for="banks">Banks used:</label>

<select name="bank" id="bankss" multiple>
  <option value="awash">Awash Banks</option>
  <option value="nib">Nib Banks</option>
  <option value="abiss">Abissinia Banks</option>
  <option value="comm">Commercial Banks</option>
   <option value="Zemen">Zemen Bank</option>
    <option value="abay">Abay Banks</option>
     <option value="amhara">Amhara Banks</option>
     hold on control + windows key for multiple choice
</select>
    </div>
  <br/>
  <div>
<label for="accounts"><b> Account Number :</b></label>
    <input type="number"  name="account"  >
    </div>
  <br/>
  <div>
<label for="address"><b> Address : </b></label>
    <input type="address"  name="address" >
    </div>
  <br/>
  <div>
<label for="pno"><b> Phone Number :</b></label>
    <input type="number"  name="pnumber" >
    </div>
  <br/>
   <div>
<label for="email"><b> Email :</b></label>
    <input type="email"  name="email" >
    </div>
  <br/>
  <div>
  Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
  <br/>
    <div>
<label for="age"><b> Age :</b></label>
    <input type="number"  name="age" >
    </div>
  <br/>

  </div>
    <button type="submit" name="submit" class="signup">Sign Up </button>
    <label>
 
       
        </fieldset>
        </form>
        <form action="actionforcompany.php" method="post">
        <fieldset class="field2">
            <legend> For Organization</legend>
            <label for="cname"><b>Company Name: </b></label>
    <input type="text" placeholder="Enter First name" name="cname" >
    </div>
       
<br/>
 <label for="cuname"><b>Company Username : </b></label>
    <input type="text" placeholder="Enter Username" name="cuname" >
    </div>
       
<br/>
<div>
 <label for="copsw"><b>Password :  </b></label>
    <input type="password" placeholder="Enter Password" name="copsw" >
</div>
    <br/>
    <div>
<label for="cpsw"><b> Confirm Password :</b></label>
    <input type="password" placeholder="Confirm Password" name="cpsw" >
    </div>
  <br/>
  <div>
<label for="cbanks">Banks used:</label>

<select name="cbank" id="bankss" >
  <option value="awash">Awash Banks</option>
  <option value="nib">Nib Banks</option>
  <option value="abiss">Abissinia Banks</option>
  <option value="comm">Commercial Banks</option>
   <option value="Zemen">Zemen Bank</option>
    <option value="abay">Abay Banks</option>
     <option value="amhara">Amhara Banks</option>
</select>
    </div>
  <br/>
  <div>
<label for="caccounts"><b> Account Number :</b></label>
    <input type="number"  name="caccount"  >
    </div>
  <br/>
  <div>
<label for="caddress"><b> Address : </b></label>
    <input type="address"  name="caddress" >
    </div>
  <br/>
  <div>
<label for="cpno"><b> Phone Number :</b></label>
    <input type="number"  name="cpnumber" >
    </div>
  <br/>
   <div>
<label for="cemail"><b> Email :</b></label>
    <input type="email"  name="cemail" >
    </div>
  <br/>
  

  </div>
    <button type="submit" name="submit" class="signup">Sign Up </button>
    <label>
 
</fieldset>

        </form>

       
</body>
       
        
</html>