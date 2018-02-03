<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;

class AfterLoggingInPageHandler extends AbstractRequestHandler {
    
    protected function doExecute() {
        return 'after-logging-in';
    }
}
