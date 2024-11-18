<?php 

  declare(strict_types=1);

  function get_recipe(object $pdo, string $recipes) {

  $query = "SELECT * FROM recipestbl WHERE LOWER(REPLACE(recipe_name, ' ', '')) = LOWER(REPLACE(:recipes, ' ', ''));";
  $stmt = $pdo->prepare($query);

  $stmt->bindParam(':recipes', $recipes);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;

}