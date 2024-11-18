<?php
    require_once 'getingredients/getIngredients.view.php';
   
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Capstone/css/nav-bar.css">
  <link rel="stylesheet" href="/Capstone/css/design-landing.css">
  <link rel="stylesheet" href="/Capstone/mediaQueries/media-queries.css">
  <link rel="stylesheet" href="/Capstone/mediaQueries/media-queries.css">
  <link rel="stylesheet" href="/Capstone/css/input.css">
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
    
}




  </style>


  <title>QuickRecipe</title>
</head>

<body>
 
<nav class="navbar position-fixed top-0 start-0 end-0 navbar-expand-lg bg-transparent">
  <div class="container">
    <a class="navbar-brand nav-bar nav-bar-ico" href="#"><span class="Quick">Quick</span><span class="Recipe">Recipe</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

      <ul class="navbar-nav text-center">
        <li class="nav-item px-2">
          <a class="nav-btn pantry-btn relative z-index100" href="/Capstone/Ingredients-page.php"><img class="img-fluid img-icon1 relative" src="landing-page-imgs/storage_ico.png" alt="">
            <div class="storage-count"><?php renderQuantity(); ?></div>
              <div class="tool-tip">Pantry</div>
          </a>
          
        </li>
        <li class="nav-item px-2">
         <a class="nav-btn plan-btn btn-design relative z-index100" href="/Planner/planner.page.php"><img class="img-fluid img-icon2" src="landing-page-imgs/plani_co.png" alt="">
         <div class="tool-tip">Plan a Food</div>
         </a>
        </li>
        <li class="nav-item px-2">
          <a class="btn-design login-btn relative z-index100" href="/Capstone/login-user.index.php"><img  class="img-fluid img-icon3 user-ico" src="landing-page-imgs/userIcon.png" alt="">
           <div class="tool-tip">Log In</div>
          </a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>







<div class="input-container flex">
    <div class="text-input relative">
        <div class="flex-container">
            <!-- Form for adding/searching ingredients -->
            <form action="/CAPSTONE/getingredients/getIngredients.inc.php" method="post">


                
                <?php  check_input_errors();  ?>
                 
              
                 
                <input class="input-user" type="text" placeholder="Add Ingredients" name="Ingredients">

                <div class="add-btn">
                    <!-- Add Ingredient Button -->
                    <button class="add-btn">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>

                <div>
                    <!-- Search Button -->
                    <button class="search-btn">
                        <i class="fa-solid fa-magnifying-glass glass-btn"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="user-button">

        <!-- Button for viewing the ingredients list and recipes -->
        <form>
             <button formaction="Ingredients-page.php" class="btn-user">Ingredients (<?php renderQuantity(); ?>)</button>
            <button formaction="Recipes-page.php"  class="btn-user">See Recipes</button>
        </form>
       
    </div>
</div>
        
            






<div class="circle-container relative">

  <div class="circle">
 
  </div>

 <div class="pan-container">
    <img  class="pan-img" src="Pan.png" alt="">
  </div>    

 <div class="plan-text-container">

    Plan Your Food Now!
    
  </div>    

 <div class="cuisine-text-container">

    FILIPINO CUISINE WITH <br>AI COOKING ASSISTANT
    
  </div>    

  
  <div class="circle-2">


  </div>




</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script type="module" src="Scripts/landingPage.js"></script>


</body>
</html>