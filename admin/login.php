<?php
require_once '../php/init.php';


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" href="images/circle-Logo1.png">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>
  <body>
      <div class="container">
          <div class="login-form">
              <div class="text-login">
                  <h1>LOGIN</h1>
                  <hr>
              </div>
              <div class="form-container">
                <form class="" action="" method="post">
                  <?php login(); ?>
                  <div class="username">

                      <label for="username">Username</label><br>
                      <input type="text" name="username" placeholder="Username">
                  </div>

                  <div class="password">
                      <label for="password">Password</label><br>
                      <input class="txt-password" type="password" name="password" placeholder="• • • • • • • • •">
                  </div>
                  <div class="btn-login">
                      <a href="#">Forgot Password?</a><br>
                      <button class ="btn-login" type="submit" name="submit">Login</button>
                  </div>
                </form>
              </div>
          </div>
          <div class="logo-container">
            <img class="img-logo" src="images/Logo1.png" alt="logo">
          </div>
    </div>
    <!-- <div class="modal-container">

      <div class="modal-login">
        <div class="header"></div>
        <p>Login Successfully!</p>
        <button class="btn-modal" type="button" name="button">Ok</button>
      </div>
    </div> -->
  </body>
</html>
