<?php

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

// MAKE FILE EXTENSION TEXT
    $file_name = 'users.txt';

    $accounts = [];

    // [username => password]
    array_push($accounts , [$username => $password]) ;

    $text = file_get_contents($file_name , filesize($file_name)) ;
    // check if file is not  empty
    if($text != null)
    {
        $accounts = array_merge($accounts , json_decode($text)) ;
    }

    file_put_contents($file_name, json_encode($accounts)) ;

    $text = file_get_contents($file_name , filesize($file_name)) ;
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register page</title>
</head>
<body>
<h1>register here</h1>
<form method="post" >
    <div>
        <label>username:</label>
        <input type="text" name="username" placeholder="enter your name" required>

    </div>
    <br>
    <div>
        <label>password:</label>
        <input type="password" name="password" placeholder="enter your password" required>

    </div>
    <br>
    <input type="submit" name="submit" >

</form >


</body>

</html>