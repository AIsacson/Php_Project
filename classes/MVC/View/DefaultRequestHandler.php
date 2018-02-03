<?php
namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;
use MVC\Util\Constants;
use MVC\Controller\Controller;

/**
 * All the requests without a URL matching an existing request handler will be
 * redirected to the application's index page.
 */

class DefaultRequestHandler extends AbstractRequestHandler {
    
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
        $this->session->set(Constants::CONTR_KEY_NAME, new Controller());
        
        \header('Location: /Tastymvc/MVC/View/FirstPageHandler');
    }

}