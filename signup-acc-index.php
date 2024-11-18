<?php

  require_once 'includes/config_session.inc.php';
  require_once 'includes/signup-view.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/Capstone/signup-css/signup.css">
 <script src="https://kit.fontawesome.com/2ff8122d7a.js" crossorigin="anonymous"></script>
  <title>Sign Up</title>
</head>
<style>

    body{

  background-image: url(screen.jpg);
  background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 100rem;
    z-index: 100;
}




  </style>
<body>
  

<div class="container d-flex justify-content-center align-items-center create-user relative">

  <div class="form-container">

    <div class="text-center errors-handler">
      <?php 
          check_signup_errors();
        ?>
    </div>


    <h3 class="text-center signup-title">Sign up!</h3>
  

    <form action="includes/signup.inc.php" class="signup-container relative" method="post">

      
      

       
        <div class="user-name-container  paddingTop">

            <label for="username">Username:</label>
              <?php signup_username(); ?>
        </div>

        <div class="user-password-container paddingTop">
          
          <label for="password">Password:</label>
            <input class="input  input-design" type="password" name="password" placeholder="password...">
        </div>

        <div class="user-email-container  paddingTop">
          
          <label for="email">Email:</label>
          <?php signup_email(); ?>

        </div>
       
       <div class="form-buttons-container paddingTop">
        
             <button formaction="/Capstone/landing-page.php" class="form-btn create-account btn btn-dark">Back to Home</button>
<button class="form-btn create-account btn btn-success">Create</button>

       </div>
       
    </form>

  </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>



