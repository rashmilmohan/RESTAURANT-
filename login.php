<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owen & Engine-Login</title>
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <!-- custom css -->
    <link rel="stylesheet" href="landingStyle.css">
</head>
<body>
    <div class="login-bg"></div>
            
     <form action="validation.php" method="post" style="border:1px solid #ccc">
        <div class="login-container">
          <h2>LOGIN</h2>
          <hr>
          
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
          
              <div class="clearfix">
                <button type="submit" class="loginbtn" target="_self">Login</button>
              </div>
            </div>
       </form>
</body>
</html>