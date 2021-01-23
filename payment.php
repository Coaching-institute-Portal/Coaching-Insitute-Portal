<!DOCTYPE html>
<html>
  <head>
   
    <title></title>
    
    <link href="css/font.css" rel="stylesheet">

<style>
 
</style>

  </head>
  <body>
    
    
    <div id="img">
            <a href="home.php"><div id="logo"><img src="img/mainlogo.jpg" width="200" height="100"></div></a>
         </div>
  <div id="nav">
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="sign_up.php">Sign_Up</a></li>
              <li><a href="login.php">Sign-in</a></li>
             </ul>
             
   </div><br><br><br>
    
      <section>
                
                <div class="container">
                  <h2>Payment</h2>
                  <p>We accept the following cards inluding paypal !!!</p>
                  <img src="img/payment.png" width="250px" height="100px">
                  <form action="payment_insert.php" method="post">
                    <div class="row">
                    <div class="col-25">
                      <label for="name">Name on Card</label></div>
                      <div class="col-75"><input type="text" id="name" name="Cname" pattern="[A-Za-z]+ \" placeholder="John Francis Kennedy"
                        title="Provide Your Proper name and no space is allowed"required>
                    </div></div>
                    <div class="row">
                    <div class="col-25">
                      <label for="c_number">Card Number</label></div>
                      <div class="col-75">
                      <input type="text" id="card_number" pattern="[0-9]{13,16}" name="card_number" placeholder="1111-2222-3333-4444" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="Expiry">Exp. Month/ Year (mm/yy)</label></div>
                      <div class="col-75">
                      <input type="month" id="expiry_month" name="expiry_month" placeholder="mm/yy" required>
                    </div>
                  </div>
                  
                      <div class="row">
                      <div class="col-25">
                      <label for="CVV">CVV</label>
                    </div>
                      <div class="col-75">
                      <input type="tel" name="CVV" id="pon" pattern="[0-9]{3}" title="please enter your proper security number!!!" placeholder="000" required>
                      </div>
                    </div>
                      <h3> Billing Address </h3> 
                     <div class="row">
                    <div class="col-25">
                      <label for="name">Full Name</label></div>
                      <div class="col-75"><input type="text" id="name" name="name" pattern="[A-Za-z]+ \" placeholder="John F. Kennedy" 
                        title="Provide Your Proper name and no space is allowed"required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="email">Email</label></div>
                      <div class="col-75">
                      <input type="email" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="Address">Resedential_Address</label></div>
                      <div class="col-75">
                      <input type="text" id="address" name="address" placeholder="85 highway, Melbourne VIC" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="Address">City</label></div>
                      <div class="col-75">
                      <input type="text" id="city" name="city" placeholder="Melbourne" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="Address">Zip Code</label></div>
                      <div class="col-75">
                      <input type="text" id="zip" name="zip"  placeholder="10001" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="Address">State</label></div>
                      <div class="col-75">
                      <input type="text" id="state" name="state" placeholder="VIC" required>
                    </div>
                  </div>
                  <br><br>
                    <div>
                      <input type="submit" id="submit" >
                    </div>
                  </form>
                </div>
      </section>
     
          <footer>
  
             <div style="float: left;">   
              <h3 style="color: white;">About Us</h3> <pre style="color: white">Beyond Teaching was established in 1994, 
and officialy opened in 1996, as the first completely 
new university in Australia since 1971. Since then our 
student population has grown considerably.Beyond Teaching 
and Beyond Teaching work together to provide students with 
relevant, high quality education.</pre>
             </div>

              <div style="float: left; margin-left: 300px">
                  <h3 style="color: white;">Links</h3>
                  <a href="home.php">Home</a><br>
                  <a href="courses.php">Courses</a><br>
                  <a href="about.php">About Us</a><br>
                  <a href="contact.php">Contact</a><br>
                  <a href="sign_up.php">Sign_Up</a><br>
                  <a href="login.php">Sign-in</a><br>                  
</div>  
<div style="margin-left: 1000px;">
 <h3 style="color: white;">Contact_Info</h3>
                
            
                

                  <pre style="color: white">399 Lonsdale Street,Melbourne,VIC 3000, Australia</pre>
                  <pre style="color: white">info@atmc.edu.au</pre>
                  <pre style="color: white">+61383273100</pre>          
                
              </div>

             
              <div style="margin-top: 150px">
                <p style="color: white; display: inline-block;">&copy; 2018 All Rights Reserved. Designed & developed by beyond teaching.</p>
                <p style="display: inline-block; margin-left: 800px"><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
              
                
              
</footer>
 </body>
</html>