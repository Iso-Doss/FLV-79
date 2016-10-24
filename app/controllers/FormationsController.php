<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormationsController
 *
 * @author Agence Karth
 */
class FormationsController extends BaseController {

    public function initialize() {
        $this->view->setMainView('main');
    }

    public function indexAction() {
        
    }

    public function listAction() {
        
    }

    public function descriptionAction() {
        
    }

    public function ajoutAction() {
        if (isset($_POST['libelle_formation']) AND isset($_POST['description_formation']) AND isset($_POST['cout_formation']) ) {
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=fvl79', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

            $req = $bdd->prepare('INSERT INTO client (codeclient, nom, prenoms, datenaissance, email, ville, telephone) VALUES(?, ?, ?, ?, ?, ?, ?)');
            $req->execute(array($_POST['codeclient'], $_POST['nom'], $_POST['prenoms'], $date, $_POST['email'], $_POST['ville'], $_POST['telephone']));

            echo "Formation créée";
            header('Location: index1.php?pg=clients');
        } else {
            echo "echec! reessayez";
        }
        ?>
}

public function creationAction() {

}
}
