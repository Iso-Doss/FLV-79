<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Agence Karth
 */
class IndexController extends BaseController {

    public function initialize() {
        $this->view->setMainView('main');
        //parent::initialize();
    }
    
    public function indexAction() {
        
    }
    
    public function loginAction() {

        $username = trim($this->request->getPost('username', 'string'));
        $password = trim($this->request->getPost('secret', 'string'));
        //die(print_r($_POST));
        if (empty($username) || empty($password)) {
            return $this->response->redirect($this->url->get(""));                  
        }
                
        $this->session->start();
        $this->session->set('userid', '15');

        return $this->response->redirect($this->url->get("formations/list"));
    }

    public function loggoutAction() {
        $this->session->destroy();
        return $this->response->redirect($this->url->getBaseUri());
    }

}
