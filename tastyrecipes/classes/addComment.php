<?php
    session_start();
    if(isset($_GET['text']) && isset($_SESSION['user'])){
        include 'dbh.php';

        //add a comment to the database
        $sql = "INSERT INTO comments(c_user, c_message, recipe, c_date) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $usr = $_SESSION['user'];
        $mess = htmlentities($_GET['text'], ENT_QUOTES);
        $rec = $_SESSION['recipe_id'];
        $date = date("l Y/m/d h:i a");
        $stmt->bind_param('ssss',$usr,$mess,$rec,$date);
        $stmt->execute();

        //Retrieving the comment ID
        $query = "SELECT * FROM comments WHERE c_user=? AND c_date=?";
        $st = $conn->prepare($query);
        $st->bind_param('ss',$usr,$date);
        $st->execute();
        $result = $st->get_result();
        $row = $result->fetch_assoc();
        $c_id = $row['c_id'];
        $comment = array();
        array_push($comment, $usr);
        array_push($comment, $mess);
        array_push($comment, $c_id);
        array_push($comment, $date);
        echo \json_encode($comment);
    }
   
?>