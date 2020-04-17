1)
interface loginInterface {
  public function login($user, $password);
}
class login implements loginInterface {
  public function login($user, $password){

2)
__construct() méthode appelée quand on utilise le mot clé new ...(). Elle sert comme son nom l'indique à construire l'objet 
__destruct() méthode appelée pour détruire un objet. Elle est appelé implicitement à la fin d'un script php 
__get() méthode appelée quand on cherche à accéder à un attribut dont on a pas l'accès (privé ou protected ou qui n'existe pas)
__set() méthode appelée quand on essaie d'attribuer une valeur à un attribut dont on a pas l'accès ou qui n'existe pas
__isset() détermine si une variable est considérée définie, ceci signifie qu'elle est déclarée et est différente de NULL. 
__unset() détruit la ou les variables dont le nom a été passé en argument.

__set($name, $value)
__get($name)
__construct()
__destruct()
__isset($name)
__unset($name)

3)
__destruct() : méthode appelée pour détruire un objet. Elle est appelé implicitement à la fin d'un script php 

4)
Une classe abstraite : Est une classe qui ne pourra pas être instancier (on ne pourra pas faire new Classe()). 
Elle servira de modèle à d'autres classes qui pourront en hériter.

5)
- public : les variables et fonctions sont accessible en dehors de l'objet
- protected: Les variables et fonctions sont accessible par l'objet lui même et les classes qui en hérite
- private : Accessible seulement à l'interieur de la classe (seul l'objet créé aura accès à ces attributs/fonctions)

6)exeptions: façon de gérer ses erreurs.Celles-ci sont en fait des erreurs lancées par PHP lorsque quelque chose qui ne va pas est survenu 
if(){
throw new exeption
}
try{}
catch{}

7)Le routeur(index.php): Je suis un élément du modèle MVC qui est la "porte d'entrée". Je manipule des variables globales $_GET pour orienter l'utilisateur.

8-9) Modèle MVC:(modèle, vue et contrôleur) est un concept très puissant qui intervient dans la réalisation d’une application en PHP. 
Son principal intérêt est la séparation des données (modèle), de l’affichage (vue) et des actions (contrôleur).

Structure : Un fichier pour le modèle, un fichier pour le contrôleur, un fichier pour la vue

Le modèle: Le modèle correspond aux données, la plupart du temps stockées dans une base de données.
Le contrôleur: Le contrôleur est l’élément qui va utiliser les données pour les envoyer à la vue. 
Son rôle est donc de récupérer les informations, de les traiter en fonction des paramètres demandés par la vue,
puis de renvoyer à la vue les données afin d’être affichées.
La vue: La vue correspond à un fichier HTML la plupart du temps.Elle se contente d’afficher le contenu qu’elle reçoit sans avoir connaissance des données.

Avantages: 
   - Une conception claire et efficace grâce à la séparation des données de la vue et du contrôleur
   - Utilise des standards
   - Dissocie le SQL du PHP et du HTML/CSS/JS
   - Un gain de temps de maintenance et d’évolution du site
   - Une plus grande souplesse pour organiser le développement du site entre différents développeurs (indépendance des données, de l’affichage (webdesign) et des actions)