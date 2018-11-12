<?php
   session_start();
   if (isset($_SESSION['userID'])
   &&
   !empty($_SESSION['userID'])) {
      var_dump($_SESSION['userID']);
        header('Location: HPg.php');
   }
   ?>
<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title></title>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="handler col-xs-12 col-sm-9 col-md-6 ">
         <form method="post" action="#" id="loginForm">
            <div class="log ">
               <h3>login</h3>
               <p>Email</p>
               <input type="text" id="usrNameOrEmail" class="form-control" name="userName">
               <p>Password</p>
               <input type="password" id="pass"  class="form-control" name="password">
               <br>
               <button id="login">login</button>
               <span>Don't have an account! <a href="signUpForm.php" >Sign Up Here</a></span>
               <div id="warning"></div>
            </div>
         </form>
      </div>
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script  src="js/validateAtSignUpAndValidateUser.js"></script>
   </body>
</html>