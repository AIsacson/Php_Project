<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;

/* 
 *Show the first page of the website
 */

class FirstPageHandler extends AbstractRequestHandler {
    
    protected function doExecute() {
        $this->session->restart();
        return 'index';
    }
}