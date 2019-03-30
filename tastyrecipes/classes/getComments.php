<?php
    session_start();
    include 'dbh.php';
    //Retrieves all comments from the database
    $sql = "SELECT * FROM comments";
    $result =  mysqli_query($conn,$sql);
    $comments = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            if((int)$row['recipe'] == (int)$_SESSION['recipe_id']){
                array_push($comments, $row);
            }
        }
    }
    echo \json_encode($comments);
?>