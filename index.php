
<?php  
	session_start();
include("connection.php");
?>
<html>
    <head>
        <title> Online Banking Ethiopia</title>
        <script type = "text/javascript" src="js.js"></script>
     <link rel="stylesheet" href="mystyle.css">   
     <style>
      body{
          background-image:url("forlog2.png");
      }
      p{
         background-image:url("forlog2.png");
      }
      h1{
         background-image:url("forlog2.png");
      }
     </style>
    </head>
    <body>
    <div class="goes">
 <div>
        <div>
          <nav>
            <div class="nav-links">
              <button class="btnn">
                <p>Home</p>
              </button>
              <button onclick={handleClickScroll()} class="btnn">
                Our Banks
              </button>
              <button onclick={handleClickScroll1()} class="btnn">
                <p>About</p>
              </button>
              <div class="dropdown dropbtn ">
                <button
                  class="  btnn"
                  onclick={handleClickScroll2()}
                
                >
                  <p>Services</p>
                </button>
                <div class="dropdown-content">
                  <a href="#hotel">Hotel reservation</a>
                  <a href="#utility">Utility Payments</a>
                  <a href="#charity">Charity Donations</a>
                  <a href="#hospital">Hospital Bills</a>
                  <a href="#ticketing">Ticketing</a>
                  <a href="#loan">Apply for Loan</a>
                  <a href="#btob">Transfer B to B</a>
                </div>
              </div>

              <button onclick={handleClickScroll3()} class="btnn">
                <p>Contact</p>
              </button>

            </div>
          </nav>
        </div>
        </div>
        <div class="trans">
          <header class="go">
            <h1> Online Banking Ethiopia</h1>
          </header>
        </div>
      
         <div>
      <button onclick="location.href='login.php'" class="bcenter btn" >
        Log in
      </button>
      <button onclick="location.href='signup.php'" class="bcenter btn" >
        Sign up
      </button>
    </div>

    <div>
      <div id="section-1" class="bolding">
        <h1 >Our Banks</h1>
        </div>
       
 <div  class="hover02 column">
     <div class="row">
          <div class="spacings">
          <figure>
 <img src="7.jpg" width="300" height="200" />
</figure>
           
          </div>
          <div class="spacings">
          <figure>
             <img src="8.png" width="300" height="200" />
          </figure>
           
          </div>
          <div class="spacings">
          <figure>
             <img src="9.png" width="300" height="200" />
          </figure>
           
          </div>
          <div class="spacings">
          <figure>
              <img src="10.png" width="300" height="200" />
          </figure>
          
          </div>
          <div class="spacings">
         <figure>
             <img src="11.png" width="300" height="200" />
          </figure>
           
          </div>
          <div class="spacings">
          <figure>
             <img src="12.jpg" width="300" height="200" />
          </figure>
            
</div>    
        </div>
        </div>
       
      </div>
  <div>
        <div id="section-2" class="bold">
          <h1 > About Us</h1>
        </div>
        <body>
          <div class="writing">
            <div class="roww">
              <div class="space">
               
                <img src="30.jpg" width="300" height="200" />
              </div>
              <div class="space">
               
                <img src="31.jpg" width="300" height="200" />
              </div>
              <div class="space">
               
                <img src="32.png" width="300" height="200" />
              </div>
              <div class="space">
               
                <img src="33.jpg" width="300" height="200" />
              </div>
            </div>
          </div>
          <h2 style=" color : #f8d50b;">
            What Is Online Banking? 
            Definition and How It Work......
              What Is Online Banking?

               Online banking allows you to conduct financial transactions via the Internet.
            Online banking is also known as Internet banking or web banking.
            Online banking offers customers almost every service traditionally
            available through a local branch including deposits, transfers, and
            online bill payments. Virtually every banking institution has some
            form of online banking you can access through a computer or app.
            
              Online banking allows you to conduct financial
            transactions via the Internet. You aren't required to visit a bank
            branch in order to complete basic online banking transactions. You
            need a device, an Internet connection, and a bank card to register
            for online banking.
              
               Understanding Online Banking With online
            banking, you aren't required to visit a bank branch to complete most
            of your basic banking transactions. You can do all of this at your
            own convenience, wherever you want—at home, at work, or on the go.
            Online banking can be done using a browser or app. 

            Online banking Ethiopia is a project done by fourth year Computer Enginnering
            students in Bahirdar University . it provides benefits like payments
            and loans can be done by by simply siting at home
          </h2>
        </body>
      </div>
      <div>
        <div id="section-3" class="bolding">
          <h1 > Service We Provide </h1>
        </div>

        <div id="hotel">
          <h2>1.HOTEL RESERVATIONS</h2>
        </div>
        <div class="row1">
          <div class="colomn">
            <img src="h1.jpg" width="300" height="200" />
          </div>
          <div class="colomn">
            <img src="h2.jpg" width="300" height="200" />
          </div>
          <div class="colomn">
            <img src="h3.jpg" width="300" height="200" />
          </div>
          <div class="colomn">
            <img src="h4.jpg" width="300" height="200" />
          </div>
        </div>
        <div>
          <h2 style=" color : #f8d50b;"> Hotel Rooms and Wedding Hall Reservations </h2>
        </div>

        <div>
          <div id="utility">
            <h2 style=" color : #f8d50b;">2.Utility Payments</h2>
          </div>
          <div class="row1">
            <div class="colomn">
              <img src="u1.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="u2.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="u3.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="u4.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="u5.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="u6.jpg" width="300" height="200" />
            </div>
            <div class="b">
              <h2>
              Payments For Utilities Like :- Electric Bills, Water Bills ,
                Mobile card, School Fees, Gus Payments also provides recipt and
                payment informations
              </h2>
            </div>
          </div>
        </div>

        <div>
          <div id="charity">
            <h2 style=" color : #f8d50b;">3. Charity Works </h2>
          </div>
          <div class="row1">
            <div class="colomn">
              <img src="c1.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="c2.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="c3.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="c4.png" width="300" height="200" />
            </div>
            <div class="b">
              <h2>
                Charity works provides a platform to donate any amount of money
                to charity organizations that work in hand with us .
              </h2>
            </div>
          </div>
        </div>

        <div>
          <div id="hospital">
            <h2>3.Hospital Payment </h2>
          </div>
          <div class="row1">
            <div class="colomn">
              <img src="ho1.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="ho2.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="ho3.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="ho4.jpg" width="300" height="200" />
            </div>
            <div class="b">
              <h2>
                Hospital Payments provides an online paying mechanism with
                hospitals working in hand with us .
              </h2>
            </div>
          </div>
        </div>

        <div>
          <div id="ticketing">
            <h2 style=" color : #f8d50b;">4. Ticketing </h2>
          </div>
          <div class="row1">
            <div class="colomn">
              <img src="t1.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="t2.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="t3.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="t4.jpg" width="300" height="200" />
            </div>
            <div class="b">
              <h2>
                Ticketing services are for transportation (both air and land)
                and entertainment services . we provide digital tickets.
              </h2>
            </div>
          </div>
        </div>

        <div>
          <div id="loan">
            <h2>5. Apply For Loan </h2>
          </div>
          <div class="row1">
            <div class="colomn">
              <img src="l1.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="l2.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="l3.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="l4.png" width="300" height="200" />
            </div>
            <div class="b">
              <h2>
                We Offer loan applyong platforms , ypu can applu for loan
                anytime and from anywhere choosing what is the ideal bet
                matterial for you !!
              </h2>
            </div>
          </div>
        </div>

        <div>
          <div id="btob">
            <h2 style=" color : #f8d50b;">6. Transfer B to B</h2>
          </div>
          <div class="row1">
            <div class="colomn">
              <img src="b1.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="b2.jpg" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="b3.png" width="300" height="200" />
            </div>
            <div class="colomn">
              <img src="b.png" width="300" height="200" />
            </div>
          </div>
          <div class="b">
            <h2>
              We made it possible to transfer to any bank in ethiopia from home !!!
            </h2>
          </div>
        </div>
      </div>
         <div>
        <div>
          <h1 id="section-4"> Contact Us </h1>
        </div>
        <footer class="footer-p">
          <div>
            <h2> Email Address :- </h2>
          </div>
          <div>
            <h2> Phone Number :- </h2>
          </div>
          <div>
            <h2> POX:- :- </h2>
          </div>
        </footer>
      </div>
</body>
    
</html>