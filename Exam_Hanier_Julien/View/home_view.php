<html>
    <head>
        <?php
        include 'Parts/stylesheets.html'
        ?>
    </head>

    <body>
    <div class="container">
    <h1>Welcome to recipe page</h1>

    <a href="../Exam_Hanier_Julien/index.php?controller=recipe&action=addForm">
        <button style="margin-bottom:10px;" class="btn btn-success">Add a recipe</button>
    </a>
    <table class="table">
        <thead>
            <td>Id</td>
            <td>Titre</td>
            <td>Ingredient</td>
            <td>Recette</td>
            <td>Actions</td>
        </thead>

        <tbody>
            <?php
                foreach ($recipes as $rec) {
                    ?>
                    <tr>
                        <td><?php echo $rec->getId()?></td>
                        <td><?php echo $rec->getTitre()?></td>
                        <td><?php echo $rec->getIngredient()?></td>
                        <td><?php echo $rec->getRecette()?></td>

                        <td>
                            <a href="../Exam_Hanier_Julien/index.php?controller=recipe&action=delete&id=<?php echo $rec->getId()?>"> <button style="margin-bottom:10px;" class="btn btn-success">Delete<button></a>
                            <a href="../Exam_Hanier_Julien/index.php?controller=recipe&action=updateForm&id=<?php echo $rec->getId()?>"><button style="margin-bottom:10px;" class="btn btn-success">Modify<button></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
    </body>
</html>