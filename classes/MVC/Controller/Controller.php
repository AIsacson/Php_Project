<?php

namespace MVC\Controller;

use MVC\Model\UserModel;
use MVC\Integration\DB;
//use MVC\Model\Comments;

class Controller {
    private $usermodel;
    private $db;
    //private $commentsmodel;
    
    function __construct(){
        $this->usermodel = new UserModel();
        $this->db = new DB();
        //$this->commentsmodel = new Comments();
    }
    
    function setUser ($username, $password) {
        $this->usermodel->setUser($username, $password, $this->db->connect());
    }
    
    function login ($username, $password) {
        return $this->usermodel->login($username, $password, $this->db->connect());
    }
    
    function setComment($username, $message, $select){
        $this->usermodel->setComment($username, $message, $select, $this->db->connect());
    }
    
    function getComments($username, $select) {
        $this->usermodel->getComments($username, $select, $this->db->connect());
    }
    
    function deleteComment($cid, $select){
        $this->usermodel->deleteComment($cid, $select, $this->db->connect());
    }
}

