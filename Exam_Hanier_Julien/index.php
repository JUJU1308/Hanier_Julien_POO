<?php
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $recipeController = new DefaultController();
        $recipeController->home();
    }
    else if($_GET['controller'] === 'recipe' && $_GET['action'] === 'addForm'){
        $recipeController = new RecipeController();
        $recipeController->addForm();
    }
    else if($_GET['controller'] === 'recipe' && $_GET['action'] === 'addRecipe'){
        $recipeController = new RecipeController();
        $recipeController->persistForm();
    }
    else if($_GET['controller'] === 'recipe' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $recipeController = new RecipeController();
        $recipeController->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'recipe' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $recipeController = new RecipeController();
        $recipeController->updateForm($_GET['id']);
    }
    else {
        throw new Exception('La page demandée n\'existe pas', 404);
    }
?>