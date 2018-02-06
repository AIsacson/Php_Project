<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;
use MVC\Util\Constants;

class SetCommentHandler2 extends AbstractRequestHandler{
    private $username;
    private $message;
    
    function setUsername(){
        $id = $this->session->get('id');
        $this->username = $id;
    }
    
    function setMessage($message){
        if(!empty($message)){
            $this->message = htmlentities($message, ENT_QUOTES);
        } else {
            $this->message = NULL;
        }
    }

    protected function doExecute(){
        $select = "comments_2";
        $selectDelete = "DeleteCommentHandler2";
        $controller = $this->session->get(Constants::CONTR_KEY_NAME);
        $controller->setComment($this->username, $this->message, $select);
        $controller->getComments($this->username, $select, $selectDelete);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
        return 'pancakes';
    }

}