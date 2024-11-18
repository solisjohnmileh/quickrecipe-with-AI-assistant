<?php require 'getingredients/getIngredients.view.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Capstone/css/nav-bar.css">
  <link rel="stylesheet" href="/Capstone/css/design-landing.css">
  <link rel="stylesheet" href="/Capstone/IngredientsCss/ingredients.css">
  <link rel="stylesheet" href="/Capstone/css/input.css">
  <link rel="stylesheet" href="/Capstone/mediaQueries/ingredients-queries.css">
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




  </style>


  <title>QuickRecipe</title>
</head>
<body>
 
<nav class="navbar position-fixed top-0 start-0 end-0 navbar-expand-lg bg-transparent">
  <div class="container">

  <a class="navbar-brand nav-bar nav-bar-ico" href="/Capstone/landing-page.php"><span class="Quick">Quick</span><span class="Recipe">Recipe</span></a>

    

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">


      <ul class="navbar-nav text-end">
        <li class="nav-item px-2">
          <a class="nav-btn relative pantry-btn" href="/Capstone/landing-page.php"><img class="img-fluid img-icon1" src="landing-page-imgs/Home.png" alt="">   
          <div class="tool-tip">Home</div>
          </a>
          
        </li>
        <li class="nav-item px-2">
         <a class="plan-btn btn-design relative" href="/Planner/planner.page.php"><img class="img-fluid img-icon2" src="landing-page-imgs/plani_co.png" alt="">
         <div class="tool-tip">Plan a Food</div>
         </a>
        </li>
        <li class="nav-item px-2">
          <a class="btn-design login-btn relative" href="/Capstone/login-user.index.php"><img  class="img-fluid img-icon3 user-ico" src="landing-page-imgs/userIcon.png" alt="">
           <div class="tool-tip">Log In</div>
          </a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>

<div class="title-pantry text-center">


    <h1 class="pantry-title">My pantry</h1>
</div>


<div class="main-container"> 

        <form action="" class="ingredient-form-container" method="">
          <div class="add-more-input relative">
              <input  class="add-more" type="text" placeholder="Add more..."> 
            <button class="add-more-btn"><i class="fa-solid fa-magnifying-glass-plus"></i></button>
          </div>

           <div class="see-recipe-container">
            <a class="see-recipe-btn" href="Recipes-page.php">Recipes</a>
          </div>

        </form>

      
      


      <div class="ingredients-container">
          <div class="ingredients">
                  <div class="initial-content">
                      <?php check ();  ?>
            </div>
        </div>    
  </div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script type="module"  src="Scripts/PantryPage.js"></script>


</body>
</html>