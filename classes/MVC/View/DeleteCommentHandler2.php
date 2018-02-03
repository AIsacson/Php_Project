<?php

namespace MVC\View;

use Id1354fw\View\AbstractRequestHandler;
use MVC\Util\Constants;

class DeleteCommentHandler2 extends AbstractRequestHandler {
    private $username;
    private $cid;
    
    public function setUsername() {
        $id = $this->session->get('id');
        $this->username = $id;
    }
    
    public function setCid($cid) {
        if(!empty($cid)){
            $this->cid = (int) $cid;
        } else {
            $this->cid = 0;
        }
    }

    protected function doExecute() {
        $select = "comments_2";
        $selectDelete = "DeleteCommentHandler2";
        $controller =  $this->session->get(Constants::CONTR_KEY_NAME);
        $controller->deleteComment($this->cid, $select);
        $controller->getComments($this->username, $select, $selectDelete);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
        $this->session->restart();
        return 'pancakes';
    }
}

