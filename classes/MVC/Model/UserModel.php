<?php

namespace MVC\Model;
ob_start();
class UserModel {
    
    function setUser ($username, $password, $conn) {
        if($username !== null){
            $encryptPwd = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users(username, pass) VALUES(?, ?)");
            $stmt->bind_param('ss', $username, $encryptPwd);
            $stmt->execute();
        }
    }
        
    function login($username, $password,$conn){
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();        
        $row = $result->fetch_assoc();       
        $hash_pwd = $row['pass'];
        $hash = password_verify($password, $hash_pwd);

        if($hash === 0){
            return 0;
        } else {
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND pass= ?");
            $stmt->bind_param('ss', $username, $hash_pwd);
            $stmt->execute();
            $result = $stmt->get_result(); 
            if (mysqli_num_rows($result) > 0) {
                if($row = $result->fetch_assoc()){
                    return $row['id'];
                }
            }
            else{
                return 0;
            }
        }
    }
}