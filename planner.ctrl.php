<?php 

declare(strict_types=1);

function is_inputEmptyRecipe (string $recipes, string $date) {

  if(empty($recipes) || empty($date)){
      return true;
  }
  else{
       return false;
  }



}

function is_recipe_wrong(bool|array $result){

  if (!$result){
      return true;
  }
  else{
      return false;
  }
  
}

