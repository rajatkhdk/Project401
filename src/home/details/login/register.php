<?php

require_once("config.php");

$USERNAME = $PASSWORD = "";
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password= $_POST['confirm_password'];

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    if (empty($username)){
        echo "Please enter username <br>";
    }
    else{
        $sql = "SELECT * from register where username = '$username';";
        $stmt = mysqli_prepare($conn,$sql);
        if( mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1){
                echo "Username already taken <br>";
            }
            else{
                $USERNAME = $username;
            }
            mysqli_stmt_close($stmt);
        }
        else{
            echo "Couldn't execute the query";
        }
    }

    if (empty($password)){
        echo "Please enter password";
    }
    elseif (strlen($password)<8){
        echo "Password must contain at least 8 characters.";
    }
    else{
        $PASSWORD = $password;
    }

    if ($password != $confirm_password){
        echo "Password didn't match";
    }

    if (!empty($USERNAME) && !empty($PASSWORD)){
    $sql = "INSERT INTO register(username,password) VALUES ('$USERNAME','$PASSWORD');";
    $stmt = mysqli_prepare($conn,$sql);
    if( mysqli_stmt_execute($stmt)){
       header("location: login.html"); 
    }
    else{
        echo "Couldn't execute the query";
    }
mysqli_stmt_close($stmt);
    }

}

?>