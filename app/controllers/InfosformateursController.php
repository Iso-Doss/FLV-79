<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InfosformateursController
 *
 * @author USER
 */

use Phalcon\Mvc\Controller;

class InfosformateursController extends Controller {
    public function initialize() {
        $this->view->setMainView('other');
    }
    
    public function indexAction() {
        
    }
}

