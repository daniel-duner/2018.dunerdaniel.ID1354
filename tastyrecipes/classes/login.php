<?php
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];

    //Checks if empty fields
    if(empty($name) || empty($pwd)){
        echo "empty";
    } else{
        include 'dbh.php';
        $sql = "SELECT * FROM users WHERE user_id =?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$name);
        $stmt->execute();
        $result = $stmt->get_result();

        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            if(password_verify($pwd,$row['user_pwd'])){
               $_SESSION['user'] = $row['user_id'];
               $_SESSION['justLoggedIn'] = true;
               echo "success";
            } else {
                echo "pwd";
            }
        } else {
            echo "usr";
        }

    }
}


?>