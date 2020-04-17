<?php
    class RecipeManager extends DbManager {
        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $recipes = [];
            $sql =  'SELECT * FROM raviole ';
            foreach  ($this->bdd->query($sql) as $row) {
                $recipes[] = new Recipe($row['id'], $row['titre'], $row['ingredient'], $row['recette']);
            }

            return $recipes;
        }

        public function insert(Recipe $recipe)
        {
            $titre = $recipe->getTitre();
            $ingredient = $recipe->getIngredient();
            $recette = $recipe->getRecette();
            $requete = $this->bdd->prepare("INSERT INTO raviole (titre, ingredient, recette) VALUES (?,?,?)");
            $requete->bindParam(1, $titre);
            $requete->bindParam(2, $ingredient);
            $requete->bindParam(3, $recette);
            $requete->execute();
            $recipe->setId($this->bdd->lastInsertId());
        }

    
        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM raviole where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM raviole WHERE id=?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $recipe = new Recipe($res['id'], $res['titre'], $res['ingredient'], $res['recette']);

            return $recipe;
        }

        public function update(Recipe $recipe)
        {
            $titre = $recipe->getTitre();
            $ingredient = $recipe->getIngredient();
            $recette = $recipe->getRecette();
            $id = $recipe->getId();
            $requete = $this->bdd->prepare("UPDATE  raviole SET titre =? , ingredient = ?, recette = ? WHERE id = ?");
            $requete->bindParam(1, $titre);
            $requete->bindParam(2, $ingredient);
            $requete->bindParam(3, $recette);
            $requete->bindParam(4, $id);
            $requete->execute();
        }

    }
?>