<!-- ----- debut ModelEvenement -->
<?php

require_once 'Model.php';

class ModelEvenement {

    private $famille_id, $id, $iid, $event_type, $event_date, $event_lieu;

    // pas possible d'avoir 2 constructeurs
    public function __construct($famille_id = NULL, $id = NULL, $iid = NULL, $event_type = NULL, $event_date = NULL, $event_lieu = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->famille_id = $famille_id;
            $this->id = $id;
            $this->iid = $iid;
            $this->event_type = $event_type;
            $this->event_date = $event_date;
            $this->event_lieu = $event_lieu;
        }
    }

    public function getFamille_id() {
        return $this->famille_id;
    }

    public function getId() {
        return $this->id;
    }

    public function getIid() {
        return $this->iid;
    }

    public function getEvent_type() {
        return $this->event_type;
    }

    public function getEvent_date() {
        return $this->event_date;
    }

    public function getEvent_lieu() {
        return $this->event_lieu;
    }

    /* public function setFamille_id($famille_id) {
      $this->famille_id = $famille_id;
      }

      public function setId($id) {
      $this->id = $id;
      }

      public function setIid($iid) {
      $this->iid = $iid;
      }

      public function setEvent_type($event_type) {
      $this->event_type = $event_type;
      }

      public function setEvent_date($event_date){
      $this->event_date = $event_date;
      }

      public function setEvent_lieu($event_lieu){
      $this->event_lieu = $event_lieu;
      }
     */
//tous les noms des familles dans la base
    public static function getAllNom() {
        try {
            $database = Model::getInstance();
            $query = "select nom from famille";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
//afficher les evenement par famille que le nom etait deja donne par l'utilisateur
    public static function getOneNom($nom) {
        try {
            $database = Model::getInstance();
            $query = "select * from evenement e , famille f  where f.nom = :nom and e.famille_id=f.id";
            $statement = $database->prepare($query);
            $statement->execute([
                'nom' => $nom
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelEvenement");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
//inserer un nouveau evenement 
    public static function insert($famille_id, $iid, $event_type, $event_date, $event_lieu) {
        try {
            $database = Model::getInstance();

            // recherche de la valeur de la clé = max(id) + 1
            $query = "select max(id) from evenement";
            $statement = $database->query($query);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;

            // ajout d'un nouveau tuple;
            $query = "insert into evenement (famille_id, id, iid, event_type, event_date, event_lieu) values(:famille_id, :id , :iid, :event_type, :event_date, :event_lieu)";
            $statement = $database->prepare($query);
            $statement->execute([
                'famille_id' => $famille_id,
                'id' => $id,
                'iid' => $iid,
                'event_type' => $event_type,
                'event_date' => $event_date,
                'event_lieu' => $event_lieu,
            ]);
            $results = array("id" => $id, "famille_id" => $famille_id, "iid" => $iid);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    //liste des individu
    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from individu ";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelIndividu");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

}
?>
<!-- ----- debut ModelEvenemet -->
