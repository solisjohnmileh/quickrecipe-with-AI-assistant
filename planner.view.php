<?php

  declare (strict_types=1);

function render (){

 


  // Handle delete request before any output
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_recipe'])) {
      $deleteIndex = (int)$_POST['delete_index'];
      if (isset($_SESSION['recipes'][$deleteIndex])) {
          unset($_SESSION['recipes'][$deleteIndex]);
          // Re-index the array to keep indexes sequential (optional)
         $_SESSION['recipes'] = array_values($_SESSION['recipes']);
      }

      // Redirect back to the page to refresh the session data and display the updated list
      header("Location: " . $_SERVER['PHP_SELF']);
      exit;
  }



function recipeRender() {
    if (isset($_SESSION['recipes']) && !empty($_SESSION['recipes'])) {
        foreach ($_SESSION['recipes'] as $index => $recipe) {
            $recipe_img = $recipe['recipe_img'];
            $recipe_name = htmlspecialchars($recipe['recipe_name']);
            $recipe_need = htmlspecialchars($recipe['recipe_need']);
            $cooking_date = $recipe['cooking_date'];

            echo '<div class="col-md-6 col-lg-4 mb-4">';
                echo '<div class="card h-100">';
                    echo '<img src="' . $recipe_img . '" alt="Recipe Image" class="card-img-top img-fluid fixed-img">';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $recipe_name . '</h5>';
                        echo '<p class="card-text">Ingredients: ' . $recipe_need . '</p>';
                        echo '<p class="date card-text"><small>Cooking date: ' . $cooking_date . '</small></p>';
                    echo '</div>';
                    echo '<div class="card-footer text-end">';
                        echo '<form action="" method="post">';
                            echo '<input type="hidden" name="delete_index" value="' . $index . '">';
                            echo '<button type="submit" name="delete_recipe" class="btn btn-danger btn-sm">';
                                echo '<i class="fa-solid fa-circle-minus"></i> Delete';
                            echo '</button>';
                        echo '</form>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }
}




  function check_errors () {

     if (isset($_SESSION["errors_input"])) {
        $error = $_SESSION["errors_input"];
          foreach ($error as $errors){
              echo '<p class="input-errors"> ' . $errors . ' </p>';
          }

            unset($_SESSION["errors_input"]);
    }
    else if (isset($_GET['recipe']) && $_GET['recipe'] === "success"){

              echo '<p class="input-errors"> Recipe inputed! </p>';
    }

  }

}  

render ();