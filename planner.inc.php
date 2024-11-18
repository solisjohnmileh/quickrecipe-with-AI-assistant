<?php

session_start();


  if($_SERVER["REQUEST_METHOD"] === "POST"){

      $recipes = $_POST["recipes"];
      $date = $_POST["date"];

      try {
        
        require_once '/XAMPP/htdocs/Capstone/includes/dbQuick.inc.php';
        require_once 'planner.model.php';
        require_once 'planner.ctrl.php';

        
         //ERROR HANDLERS

          $error =[];

          //result
          $result = get_recipe($pdo, $recipes);

           if(is_inputEmptyRecipe($recipes, $date)){
          $error["empty_input"] = "Fill in all Fields!";
          } 


            if (is_recipe_wrong($result)){
         $error["input_incorrect"] = "Recipe you input not available";
            }
      
           

            if ($error) {

                

                $_SESSION["errors_input"] = $error;
                 header("Location:  planner.page.php");
                die();

            }

          //recipe stored

          if(!isset($_SESSION['recipes'])){
              $_SESSION['recipes'] = [];
          }

          if($result) {
              $_SESSION['recipes'][] = [

                'recipe_img' => $result['recipe_pic'] ?? 'default.jpg',
                'recipe_name' => $result['recipe_name'] ?? 'unknown',
                'recipe_need' => $result['ingredients_need'],
                'cooking_date' => $date

              ];
          }




            
           
         header("Location: planner.page.php?recipe=success");

            $pdo = null;
            $stmt = null;

            die();






      } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
      }
  }else{

       header("Location: planner.page.php?recipe=success");
            die();


  }