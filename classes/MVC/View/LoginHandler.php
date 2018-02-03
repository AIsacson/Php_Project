<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;
use MVC\Util\Constants;

class LoginHandler extends AbstractRequestHandler {
    private $username;
    private $password;
    
    public function setUsername($username) {
        if(!empty($username)){
            if(ctype_alnum($username)){
                $this->username = $username;
            }
        }else {
            $this->username = NULL;
        }
    }
    
    public function setPassword($password) {
        if(!empty($password)){
            if(ctype_alnum($password)){
                $this->password = $password;
            }
        }else {
            $this->password = NULL;
        }
    }
    
    protected function doExecute() {
        $this->session->restart();
        $controller =  $this->session->get(Constants::CONTR_KEY_NAME);
        $id = $controller->login($this->username, $this->password);
        if($id === 0){
            return 'login-page';
        } else {
            $this->session->set(Constants::CONTR_KEY_NAME, $controller);
            $this->session->set('id', $id);
            $this->addVariable('uid', $id);
        }
        return 'after-logging-in';
    }
}