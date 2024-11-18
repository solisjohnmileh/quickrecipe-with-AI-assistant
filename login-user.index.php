<?php require_once 'includes/login_view.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Capstone/mediaQueries/media-queries.css">
   <link rel="stylesheet" href="/Capstone/userFormcss/user-form.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 <script src="https://kit.fontawesome.com/2ff8122d7a.js" crossorigin="anonymous"></script>
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

.log-out-container{
  display: flex;
  flex-direction: row;
}

.form-container{
  position: relative;
}

.logout-btn{
  border: none;
  position: absolute;
  top: 0;
  left: 5px;
  padding: 10px;
  
}
  </style>

<body>
  



<div class="user-login relative">

  <h3><?php session_start(); output_username(); ?></h3>



  <?php if (!isset($_SESSION["user_id"])) { ?>

  
    <form action="/Capstone/includes/login.inc.php" class="form-container" method="post">

      <div class="logout-btn" >
       <a href="landing-page.php" style="text-decoration: none; color: #4a90e2;">
    <i class="fas fa-home"></i> Back to Home
</a>

      </div>

        <?php check_login_errors(); ?>
      <div class="user-name-container">
        <label for="username">Username:</label>
        <input class="input" type="text" name="username" placeholder="username...">
      </div>

      <div class="user-password-container">
        <label for="password">Password:</label>
        <input class="input" type="password" name="pass" placeholder="password...">
      </div>

      <div class="form-buttons-container">
        <button formaction="/Capstone/signup-acc-index.php" class="form-btn btn btn-success create-account">Create Account</button>
          <button class="form-btn btn btn-dark log-in">Log In</button>
      </div>

    </form>
  <?php } ?>

</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>




</body>
</html>