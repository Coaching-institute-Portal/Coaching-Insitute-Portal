<!DOCTYPE html>
<html>
  <head>
   
    <title></title>
    
    
    
<link href="css/font.css" rel="stylesheet">
    
   
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
             
   </div>  <br><br><br>
    
      <section>

                <div class="container">
                  <h2>Staff please sign-in here!!!</h2>
                  <p>Fill up your details in the below given form.</p>
                  <form action="t_login.php" method="post">
                     <div class="row">
                      <div class="col-25">
                      <label for="name">User Name</label></div>
                      <div class="col-75">
                      <input type="text" id="name" name="name" pattern="[A-Za-z]+" title="no symbols, punctuation marks and no white space is allowed"required>
                    </div>
                    </div>
                     <div class="row">
                      <div class="col-25">
                    <label for="n_password">Password</label></div>
                    <div class="col-75">
                      <input type="password" name="password" id="n_p" pattern="[A-Za-z]{1,13}" title="numbers and special characters are not allowed"required>
                    </div>
                    </div><br>
                    <div>
                      <input type="submit" id="submit" >
                    </div>
                  </form>
                </div>
      </section>
          <br><br><br><br><br><br>
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
                <p style="color: white; display: inline-block;">&copy; 2018 All Rights Reserved. Designed & developed by Beyoond Teaching.</p>
                <p style="display: inline-block; margin-left: 800px"><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
              
                
              
</footer>
    

  </body>
</html>