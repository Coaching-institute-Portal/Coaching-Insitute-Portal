
<?php
      session_start();
      if(isset($_SESSION['name'])){

echo "


<!DOCTYPE html>
<html>
  <head>
   
    <title></title>
    
    <link href='css/font.css' rel='stylesheet'>

<style>
 
</style>

  </head>
  <body>
    
    
    <div id='img'>
            <a href='home.php'><div id='logo'><img src='img/mainlogo.jpg' width='200' height='100'></div></a>
         </div>
  <div id='nav'>
            <ul>
              <li><a href='home.php'>Home</a></li>
              <li><a href='courses.php'>Courses</a></li>
              <li><a href='about.php'>About Us</a></li>
              <li><a href='contact.php'>Contact</a></li>
              <li><a href='sign_up.php'>Sign_Up</a></li>
              <li><a href='login.php'>Sign-in</a></li>
             </ul>
             
   </div><br><br><br>
    
      <section>
                
                <div class='container'>
                  <h2>Students please enroll here!!</h2>
                  <p>Please enter your info in below form</p>
                  <form action='enroll_insert.php' method='post'>
                    <div class='row'>
                    <div class='col-25'>
                      <label for='name'>Full Name</label></div>
                      <div class='col-75'><input type='text' id='name' name='name' pattern='[A-Za-z]+' title='Provide Your Proper name and no space is allowed'required>
                    </div></div>
                    <div class='row'>
                    <div class='col-25'>
                      <label for='email'>Email</label></div>
                      <div class='col-75'>
                      <input type='email' id='email' name='email' required>
                    </div>
                  </div>

                        <div class='row'>
                        <div class='col-25'>
                         <label for='experience'>Course</label>
                       </div>
                  <div class='col-75'>
                        <select id='experience' name='course' required>
                          <option selected disabled value=''>please select your course.</option>
                          <option value='Bachelor in Information And  Communication Technology'>Bachelor in Information And  Communication Technology</option>
                          <option value='Bachelor of Business'>Bachelor of Business</option>
                          <option value='Bachelor in Commerce'>Bachelor in Commerce</option>
                          <option value='Master of Business Administration'>Master of Business Administration</option>
                          <option value='Master of Business Administration(Extended)'>Master of Business Administration(Extended)</option>
                          <option value='Master of International Business'>Master of International Business</option>
                          <option value='Master of Professional Accounting'>Master of Professional Accounting</option>
                          <option value='Master of Information and Communication Technology'>Master of Information and Communication Technology</option>
                        </select>
                      </div>
                </div>
                    
                   
                      <div class='row'>
                      <div class='col-25'>
                      <label for='contact_no'>Phone_Number</label></div>
                      <div class='col-75'>
                      <input type='tel' name='Phone_Number' id='pon' pattern='[0-9]{10}' title='please enter your proper contact number!!!' required>
                      </div>
                    </div>
                     
                    <br>
                    <br>

                    <div>
                      <input type='submit' id='submit' >
                    </div>
                  </form>
                </div>
      </section>
     
          <footer>
  
             <div style='float: left;'>   
              <h3 style='color: white;'>About Us</h3> <pre style='color: white'>Beyond Teaching was established in 1994, 
and officialy opened in 1996, as the first completely 
new university in Australia since 1971. Since then our 
student population has grown considerably.Beyond Teaching 
and Beyond Teaching work together to provide students with 
relevant, high quality education.</pre>
             </div>

              <div style='float: left; margin-left: 300px'>
                  <h3 style='color: white;'>Links</h3>
                  <a href='home.php'>Home</a><br>
                  <a href='courses.php'>Courses</a><br>
                  <a href='about.php'>About Us</a><br>
                  <a href='contact.php'>Contact</a><br>
                  <a href='sign_up.php'>Sign_Up</a><br>
                  <a href='login.php'>Sign-in</a><br>                  
</div>  
<div style='margin-left: 1000px;'>
 <h3 style='color: white;'>Contact_Info</h3>
                
            
                

                  <pre style='color: white'>399 Lonsdale Street,Melbourne,VIC 3000, Australia</pre>
                  <pre style='color: white'>info@atmc.edu.au</pre>
                  <pre style='color: white'>+61383273100</pre>          
                
              </div>

             
              <div style='margin-top: 150px'>
                <p style='color: white; display: inline-block;'>&copy; 2018 All Rights Reserved. Designed & developed by beyond teaching.</p>
                <p style='display: inline-block; margin-left: 800px'><a href='#' class='js-backtotop'>Back to top <i class='icon-arrow-long-up'></i></a></p>
              </div>
              
                
              
</footer>
    
    
  </body>
</html>


";

      }



else {

  echo "Please log-in first. <a href= 'login.php'>Go to the Login-page</a>";
}


?>