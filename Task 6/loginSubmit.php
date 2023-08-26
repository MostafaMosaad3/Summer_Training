<?php
if(isset($_SESSION['email'])){
    header("location:index.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mysqli = require __DIR__ . "/dbconnection.php";
    $query = "SELECT * FROM users where email = '$email' ";

    $result = mysqli_query($connect, $query);
    if ($result) {
        header('location:todo List/index.php');
    } else {
        echo "error in query " . mysqli_error($connect);
    }


}