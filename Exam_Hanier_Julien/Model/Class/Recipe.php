<?php
    class Recipe{
        private $id;
        private $titre;
        private $ingredient;
        private $recette;

 
        public function __construct($id = null, $titre, $ingredient, $recette)
        {
            $this->id = $id;
            $this->titre = $titre;
            $this->ingredient = $ingredient;
            $this->recette = $recette;
            
            
        }


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getTitre()
        {
            return $this->titre;
        }

        /**
         * @param mixed $titre
         */
        public function setTitre($titre)
        {
            $this->titre = $titre;
        }

        /**
         * @return mixed
         */
        public function getIngredient()
        {
            return $this->ingredient;
        }

        /**
         * @param mixed $contenu
         */
        public function setIngredient($ingredient)
        {
            $this->ingredient = $ingredient;
        }

        /**
         * @return mixed
         */
        public function getRecette()
        {
            return $this->recette;
        }

        public function setRecette($recette)
        {
            $this->recette = $recette;
        }

         
    }
?>