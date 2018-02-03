<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;

class AfterLoggingInPageHandler extends AbstractRequestHandler {
    
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
        return 'after-logging-in';
    }
}
