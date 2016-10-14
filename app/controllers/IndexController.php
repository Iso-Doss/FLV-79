<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller {

    public function initialize() {
        $this->view->setMainView('main');
    }
    
    public function indexAction() {
        //$this->assets->addCss("css/bootstrap/dist/css/bootstrap.css");
        //$base = $this->url->getBaseUri();
        //$mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre',);
    }

}
