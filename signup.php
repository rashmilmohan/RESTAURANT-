
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owen & Engine-Sign Up</title>
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <!-- custom css -->
    <link rel="stylesheet" href="landingStyle.css">
</head>
<body class="sign-bg">
    
            <form action="registration.php" method="post" style="border:1px solid #ccc">
            <div class="container">
              <h2>SIGN UP</h2>
              <hr>
                  <label for="name"><b>Name</b></label>
                  <input type="text" placeholder="Enter Your Name" name="username" required>
                  <label for="contact"><b>Phone Number</b></label>
                  <input type="text" placeholder="Enter Phone Number" name="contact" required>
              
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email"  required>
              
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" required>
              
                  <label for="psw-repeat"><b>Re- Enter Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="confirm_password" required>
                  
                  <p class="sign-p">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
              
                  <div class="clearfix">
                    <button type="button" class="cancelbtn" onclick="window.location.href='Index.php'" target="_self">Cancel</button>
                    <button type="submit" class="signupbtn" target="_self">Sign Up</button>
                  </div>
                </div>
              </form>
                
</body>
</html>