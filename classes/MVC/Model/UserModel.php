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
    
    function setComment($username, $message, $select, $conn) {
        $stmt = $conn->prepare("INSERT INTO $select (username, message) VALUES (?,?)");
        $stmt->bind_param('ss', $username, $message);
        $stmt->execute();
    }
        
    function getComments($username, $select, $conn) {
        $sql = "SELECT * FROM $select";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            $id = $row['username'];
            $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $result_user = $stmt->get_result();
            if ($row_user = $result_user->fetch_assoc()) {
                echo"<div class='comment-box'><p>";
                echo $row_user['username'].":<br>";
                echo nl2br($row['message']);
                echo"</p>";
                if(!empty($username)) {
                    if ($username === $row_user['id']) {
                        echo "<form method='POST' action='DeleteCommentHandler'>
                                <input type='hidden' name= 'cid' value='".$row['cid']."'>
                                <input type='hidden' name= 'username' value='".$row['username']."'>
                                <button value='commentDelete' type='submit'>Delete</button>
                            </form>";                
                    }
                }
                echo "</div>";
            }
        }
    }
    
    function deleteComment($cid, $select, $conn) {
        $stmt = $conn->prepare("DELETE FROM $select WHERE cid=?");
        $stmt->bind_param('s', $cid);
        $stmt->execute();
    }
}