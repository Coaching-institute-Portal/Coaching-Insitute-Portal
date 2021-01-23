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
                  <h2>Update your profile here!!</h2>
                  <p>Please enter your new information in below form</p>
                  <form action="profile_update.php" method="post">
                    <div class="row">
                    <div class="col-25">
                      <label for="ID">Tutor_ID</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="id" name="id" placeholder="You can not change your ID, please enter the TutorID which you already have." required>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-25">
                      <label for="name">Full Name</label>
                    </div>
                      <div class="col-75"><input type="text" id="name" name="name" pattern="[A-Za-z]+ \" title="Provide Your Proper name and no space is allowed"required>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-25">
                      <label for="email">Email</label>
                    </div>
                      <div class="col-75">
                      <input type="email" id="email" name="email" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="Address">Resedential_Address</label></div>
                      <div class="col-75">
                      <input type="text" id="subject" name="address" required>
                    </div></div>
                    <div class="row">
                    <div class="col-25">
                      <label for="date_of_birth">Date_Of_Birth</label></div>
                      <div class="col-75">
                      <input type="date" name="dob" id="dob" required>
                      </div>
                    </div>
                   


                  <div class="row">
                    <div class="col-25">
                      <label for="qualifications">Qualification</label></div>
                      <div class="col-75">
                      <input type="text" id="subject" name="subject" required>
                    </div>
                    </div>
                      <div class="row">
                        <div class="col-25">
                         <label for="experience">Experience</label>
                       </div>
                       <div class="col-75">
                        <select id="experience" name="experience" required>
                          <option selected disabled value="">please select your experience.</option>
                          <option value="0-6 Months">0-6 Months</option>
                          <option value="6-12 Months">6-12 Months</option>
                          <option value="1-3 Years">1-3 Years</option>
                          <option value="+5 years">+5 years</option>
                        </select>
                      </div>
                    </div>


                      <div class="row">
                      <div class="col-25">
                      <label for="contact_no">Phone_Number</label></div>
                      <div class="col-75">
                      <input type="tel" name="Phone_Number" id="pon" pattern="[0-9]{10}" title="please enter your proper contact number!!!" required>
                      </div>
                    </div>


                      <div class="row">
                      <div class="col-25">
                        <label>Please select your gender</label></div><br>
                        <div class="col-75"><input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label></div>
                      </div>

                
                    <div class="row">
                      <div class="col-25">
                      <label for="n_password">New_Password</label></div>
                      <div class="col-75">
                      <input type="password" name="password" id="n_p" pattern="[A-Za-z]{1,13}" title="numbers and special characters are not allowed"required></div>
                      <div class="col-75"><input type="checkbox" onclick="myFunction()">Show Password</div>
                      </div>
                    <div class="row">
                      <div class="col-25">
                      <label for="c_password">Confirm_Password</label></div>
                      <div class="col-75">
                      <input type="password" name="confirm_password"  id="c_p" pattern="[A-Za-z]{1,13}"  required></div>
                      <div class="col-75">
                      <input type="checkbox" onclick="conf_pass()">Show Password</div>
                      </div>
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
                <p style="color: white; display: inline-block;">&copy; 2018 All Rights Reserved. Designed & developed by Beyond Teaching.</p>
                <p style="display: inline-block; margin-left: 800px"><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
              
                
              
</footer>
    
    <script>
function myFunction() {
  var x = document.getElementById("n_p");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function conf_pass() {
  var x = document.getElementById("c_p");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script type="text/javascript">
  var password = document.getElementById("n_p")
  , confirm_password = document.getElementById("c_p");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
  </body>
</html>
