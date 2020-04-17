<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
    <h1>Update recipe <?php echo $recipe->getTitre();?></h1>

    <a href="../correctionMVC/index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">Return</button>
    </a>

    <form method="post" action="index.php?controller=recipe&action=updateRecipe&id=<?php echo $recipe->getId()?>">
        <label>Titre</label>
        <input name="titre" value="<?php echo $recipe->getTitre()?>" class="form-control">
        <label>Ingrédient</label>
        <input name="ingredient" value="<?php echo $recipe->getIngredient()?>" class="form-control">
        <label>Recette</label>
        <input name="recette" value="<?php echo $recipe->getRecipe()?>" class="form-control">
        <input class="btn btn-success" type="submit" value="valider">
    </form>
</div>
<?php
include 'Parts/scripts.html'
?>
</body>