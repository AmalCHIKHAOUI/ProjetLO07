
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerFamille.php');
require ('../controller/ControllerIndividu.php');
require ('../controller/ControllerEvenement.php');
require ('../controller/ControllerLien.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées
switch ($action) {
    case "familleReadAll" :
    case "familleReadOne" :
    case "familleReadNom" :
    case "familleCreate" :
    case "familleCreated" :
        ControllerFamille::$action();
        break;

    case "individuReadAll" :
    case "individuCreate" :
    case "individuCreated" :
    case "individuReadName" :
    case "individuReadOne" :
        ControllerIndividu::$action();
        break;
    case "evenementReadNom":
    case "evenementReadOne" :
    case "evenementCreate" :
    case "evenementCreated":  
    case "individuReadAll":
        ControllerEvenement::$action();
        break;
    case "lienReadAll":
    case "LienParentalCreate":
    case "LienParentalCreated":
    case "LienUnionCreate":
    case "LienUnionCreated":
        ControllerLien::$action();
        break;
   
    default:
        $action = "familleAccueil";
        ControllerFamille::$action();
}

?>
<!-- ----- Fin Router1 -->