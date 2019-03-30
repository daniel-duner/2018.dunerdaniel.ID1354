<?php
    session_start();
    if($_POST['userCheck'] == true){
        $usr = $_POST['usr'];
        $pwd = $_POST['pwd'];
        
        if(validateFormat(array($usr,$pwd))){
            include 'dbh.php';
            $sql = "SELECT * FROM users WHERE user_id =?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s",$usr);
            $stmt->execute();
            $result = $stmt->get_result();
            if(mysqli_num_rows($result)>0){
                echo "usr";
            }else {
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users(user_id, user_pwd) VALUES(?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss',$usr,$hashedPwd);
                $stmt->execute();
                $_SESSION['user'] = $usr;
                $_SESSION['newUser'] = true;
                echo "success";
                }
            }else {
                echo "format";
            } 
        }


function validateFormat(array $var){
    foreach($var as $val){
        if(!preg_match("/^[a-zA-Z0-9]*$/",$val)){
            return false;
        } 
    }
    return true;
}
?>