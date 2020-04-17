<?php
class RecipeController{

    public function addForm()
    {
        require 'View/insert_form.php';
        
    }
    public function persistForm()
    {
        $recipe = new Recipe(null, $_POST['titre'], $_POST['ingredient'], $_POST['recette']);
        $recipeManager = new RecipeManager();
        $recipeManager->insert($recipe);
        header('Location: /Exam_Hanier_Julien/index.php?controller=default&action=home');
    }


    public function delete($id)
    {
        $recipeManager = new RecipeManager();
        $recipeManager->delete($id);
        header('Location: /Exam_Hanier_Julien/index.php?controller=default&action=home');
    }

    public function updateForm($id)
    {

        require 'View/update_form.php';
        $recipeManager = new RecipeManager();
        $recipe = $recipeManager->select($id);
        $recipe = new Recipe($id, $_POST['titre'], $_POST['ingredient'],$_POST['recette']);
        $recipeManager->update($recipe);

        header('Location: /Exam_Hanier_Julien/index.php?controller=default&action=home');
    }

}
