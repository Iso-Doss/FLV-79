<?php
use Phalcon\Mvc\Controller;
abstract class BaseController extends Controller {

    public function initialize() {
        $this->view->setMainView('main');
//        $elts = new Elements();
//        $this->view->setVar("menuView", $elts->getMenu(false));
    }

}
