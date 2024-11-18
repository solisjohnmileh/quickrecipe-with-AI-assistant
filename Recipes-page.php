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
  <link rel="stylesheet" href="/Capstone/recipeCss/recipe.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 <script src="https://kit.fontawesome.com/2ff8122d7a.js" crossorigin="anonymous"></script>
 <script src="/CAPSTONE/cookwithAI.js" defer></script>
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
 
<nav class="navbar position-fixed top-0 start-0 end-0 navbar-expand-lg bg-white">
  <div class="container">
    <a class="navbar-brand nav-bar nav-bar-ico" href="landing-page.php"><span class="Quick">Quick</span><span class="Recipe">Recipe</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

      <ul class="navbar-nav text-end">
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



<div class="container main-container">
    <h1 class="recipe-title">Recipes</h1>
    <div class="row recipe-container text-center">
        <?php renderRecipe(); ?>
        
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Cook with AI</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img class="img-fluid" id="voice-image" src="/Capstone/Voiceimg/voice.gif" alt="voice">
        <div class="container" id="assistant-container" style="display: none;">
          <div class="texts"></div>
        </div>
        <div class="spinner-border" role="status" id="loading-spinner" style="display: none;">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="start-assist" class="btn btn-success">Start AI Assistant</button>
        <button id="repeat-mode" class="btn btn-danger">Click to Talk</button>
      </div>
    </div>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script src="/Capstone/aiAssistant.js"></script>


</body>



</html>