<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
<h1>Add a new recipe</h1>

    <a href="../Exam_Hanier_Julien/index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">Return</button>
    </a>

<form method="post" action="index.php?controller=default&action=home">
<label>Titre</label>
<input name="titre" class="form-control">
<label>Ingrédient</label>
<input name="ingredient" class="form-control">
<label>Recette</label>
<input name="recette" class="form-control">

    <input class="btn btn-success" type="submit" value="valider">
</form>
</div>
<?php
 include 'Parts/scripts.html'
?>
</body>