<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;
use MVC\Util\Constants;

class SignupHandler extends AbstractRequestHandler {
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
        $controller = $this->session->get(Constants::CONTR_KEY_NAME);
        
        $controller->setUser($this->username, $this->password);
        
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
                
        return 'signup-page';
    }

}