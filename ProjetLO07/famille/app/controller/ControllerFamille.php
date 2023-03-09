
<!-- ----- debut ControllerFamille -->
<?php
session_start();
require_once '../model/ModelFamille.php';

class ControllerFamille {

    // --- page d'acceuil
    public static function familleAccueil() {
        include 'config.php';
        $vue = $root . '/app/view/viewGenealogieAccueil.php';
        if (DEBUG)
            echo ("ControllerFamille : caveAccueil : vue = $vue");
        require ($vue);
    }

    // --- Liste des familles
    public static function familleReadAll() {
        $results = ModelFamille::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewAll.php';
        if (DEBUG)
            echo ("ControllerFamille : familleReadAll : vue = $vue");
        require ($vue);
    }

    // Affiche un formulaire pour sélectionner un nom qui existe
    public static function familleReadNom() {
        $results = ModelFamille::getAllNom();

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewNom.php';
        require ($vue);
    }

    // sauve le nom en variable de session
    public static function familleReadOne() {
        $get = $_GET['famille'];
        $get_array = explode("|", $get);
        $famille_id = $get_array[0];
        $nom = $get_array[1];
        $_SESSION["nom"] = $nom;
        $_SESSION["famille_id"] = $famille_id;

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/viewGenealogieAccueil.php';
        require ($vue);
    }

    // Affiche le formulaire de creation d'une famille
    public static function familleCreate() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'une nouvelle famille.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function familleCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelFamille::insert(
                        htmlspecialchars($_GET['nom'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInserted.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerFamille -->


