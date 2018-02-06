<?php

namespace MVC\Model;
ob_start();
class Comments {
    function setComment($username, $message, $select, $conn) {
        $stmt = $conn->prepare("INSERT INTO $select (username, message) VALUES (?,?)");
        $stmt->bind_param('ss', $username, $message);
        $stmt->execute();
    }
        
    function getComments($username, $select, $selectDelete,$conn) {
        $comments = "";
        $sql = "SELECT * FROM $select";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            $id = $row['username'];
            $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $result_user = $stmt->get_result();
            if ($row_user = $result_user->fetch_assoc()) {
                $comments .= "<div class='comment-box'><p>";
                 $comments .= $row_user['username'].":<br>";
                 $comments .= nl2br($row['message']);
                $comments .= "</p>";
                if(!empty($username)) {
                    if ($username === $row_user['id']) {
                         $comments .= "<form class='delete-form' method='POST' action='$selectDelete'>
                                <input type='hidden' name= 'cid' value='".$row['cid']."'>
                                <input type='hidden' name= 'username' value='".$row['username']."'>
                                <button value='commentDelete' type='submit'>Delete</button>
                            </form>";                
                    }
                }
                 $comments .= "</div>";
            }
        }
        return $comments;
    }
    
    function deleteComment($cid, $select, $conn) {
        $stmt = $conn->prepare("DELETE FROM $select WHERE cid=?");
        $stmt->bind_param('s', $cid);
        $stmt->execute();
    }
}

