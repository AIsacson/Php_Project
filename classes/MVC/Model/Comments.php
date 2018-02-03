<?php

namespace MVC\Model;

class Comments {
    private $username;

    function connectDatabase() {
        $conn = mysqli_connect('localhost', 'root', 'root', 'commentsection');
            if (!$conn) {
                die("Connection failed: " .mysqli_connect_error());
            }
        $this->connect = $conn;
    }

    function setComment($username, $message, $select) {
        $this->username = $username;
        $this->message = $message;
        
        $sql = "INSERT INTO $select (username, message) VALUES ('$this->username', '$this->message')";
        
        $result = mysqli_query($this->connect, $sql);
    }
        
    function getComments($username, $select) {
    $comments ="";
    
        $id = $row['username'];
        $sql_user = "SELECT * FROM users WHERE id='".$id."'";
        $result_user = $this->connect->query($sql_user);
        
        if ($row_user = $result_user->fetch_assoc()) {
            $comments .= "<div class='comment-box'><p>";
            $comments .= $row_user['username'].":<br>";
            $comments .= nl2br($row['message']);
            $comments .= "</p>";
            if(!empty($username)) {
                if ($username === $row_user['id']) {
                    $cid = $row['cid'];
                    $uid = $row['username'];
                    $comments .= "<form class='delete-form' method='POST' action='DeleteCommentHandler'>
                    <input type='hidden' name= 'cid' value='$cid'>
                    <input type='hidden' name= 'username' value='$uid'>
                    <button type='submit'>Delete</button>
                    </form>";                   
                    }
                }
                $comments .= "</div>";
            }
        return $comments;
    }
    
    function deleteComments() {
        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $this->connect->query($sql);
    }
}

