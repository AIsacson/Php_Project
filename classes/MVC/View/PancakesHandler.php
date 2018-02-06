<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;
use MVC\Util\Constants;

class PancakesHandler extends AbstractRequestHandler {
    private $username;
    
    function setUsername(){
        $id = $this->session->get('id');
        $this->username = $id;
    }

    protected function doExecute() {
        $select = "comments_2";
        $selectDelete = "DeleteCommentHandler2";
        $id = $this->session->get('id');
        $this->username = $id;
        $controller =  $this->session->get(Constants::CONTR_KEY_NAME);
        $comments = $controller->getComments($this->username, $select, $selectDelete);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
        $this->addVariable('comment', $comments);
        return 'pancakes';
    }
}