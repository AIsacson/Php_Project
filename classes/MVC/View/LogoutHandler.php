<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;

class LogoutHandler extends AbstractRequestHandler {
    
    protected function doExecute() {
        $this->session->invalidate();
        return 'login-page';
    }
}