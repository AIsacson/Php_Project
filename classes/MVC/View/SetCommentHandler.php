<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;
use MVC\Util\Constants;

class SetCommentHandler extends AbstractRequestHandler{
    private $username;
    private $message;
    
    function setUsername(){
        $id = $this->session->get('id');
        $this->username = $id;
    }
    
    function setMessage($message){
        if(!empty($message)){
            if(ctype_alnum($message)) {
                $this->message = $message;
            }
        } else {
        $this->message = NULL;
        }
    }

    protected function doExecute(){
        $select = "comments";
        $controller =  $this->session->get(Constants::CONTR_KEY_NAME);
        $controller->setComment($this->username, $this->message, $select);
        $controller->getComments($this->username, $select);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
        return 'meatballs';
    }

}