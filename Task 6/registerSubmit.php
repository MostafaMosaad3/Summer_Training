<?php
global $connect;
if(isset($_SESSION['email'])){
    header("location:index.php");
}
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES['image'];
    /*echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";
     */
    if (empty($name)) {
        $errors['name'] = "Name is required";
    }

    if (empty($phone)) {
        $errors['phone'] = "Phone is required";
    } else {
        if (!preg_match('/^[0-9]{11}+$/', $phone)) {
            $errors['phone'] = "Phone must be 11 numbers";
        }
    }
    if (empty($email)) {
        $errors['email'] = "Email is required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email is not valid";
        }
    }

    if(empty($password)){
        $errors['password'] = "Password is required";
    }else{
        if(strlen($password) < 6){
            $errors['password'] = "Password must be 6 characters";
        }
    }
    if($image['error'] ==4){
        $errors['image'] = "Image is required";
    }else{
        $allowed_extensions= ['png','jpg','jpeg'];
        $image_etension=pathinfo($image['name'],PATHINFO_EXTENSION);
        if(!in_array($image_etension,$allowed_extensions)){
            $errors['image'] = "Image is not valid";
        }
        elseif($image['size'] > 3 * 1024 * 1024){
            $errors['image'] = "Image size must be less than 3MB";
        }

    }
    if(empty($errors)){
        $user= $_POST;
        unset($user['submit']);
        if(!is_dir('images'))
        {
            mkdir('images');
        }
        //move file to my storage
        move_uploaded_file($image['tmp_name'],'images/'.$image['name']);
        // addd image in user data
        $user['image']='images/'.$image['name'];

    }

    $mysql = require __DIR__ ."/dbconnection.php" ;

    $query = "INSERT INTO users (name , email , password , phone) 
            VALUES ('$name' , '$email' , '$password' , '$phone')";

    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "user added successfully";
    } else {
        echo "error in adding user " . mysqli_error($connect);
    }


}


