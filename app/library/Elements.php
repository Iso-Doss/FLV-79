<?php

use Phalcon\Mvc\User\Component;

class  Elements extends Component {

    public function getMenu() {

        $isLogged = $this->session->has("userid") && preg_match('/^\d+$/', $this->session->get("userid"));
        return $isLogged ? "layout/menu_apprenant" : "layout/menu_default";
    }

}

