<?php

//extension
$users = json_decode(file_get_contents('users.txt'), true);


session_start();


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    


    //loop on file
    foreach ($users as $user) {
        // check if key exist then password is same
        ;
        if (array_key_exists($username, $user) && $user[$username] == $password)
        {
            $_SESSION['username'] = $username;
            header('location:todo list/index.php');
        }
        else
        {
            echo "username or password not correct";
            header('refresh:5;location:login.php');
            exit();
        }
    }
}
else {
 echo "username or password not set";
 header('refresh:5;location:login.php');
 exit();



}