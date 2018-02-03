<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;
use MVC\Util\Constants;

class MeatballsHandler extends AbstractRequestHandler {
    private $username;
    
    function setUsername(){
        $id = $this->session->get('id');
        $this->username = $id;
    }

    protected function doExecute() {
        $select = "comments";
        $id = $this->session->get('id');
        $this->username = $id;
        $controller =  $this->session->get(Constants::CONTR_KEY_NAME);
        $controller->getComments($this->username, $select);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);

        return 'meatballs';
    }
}