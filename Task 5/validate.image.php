<?php

$images=$_POST['images'];

//check if there is an image
    if ($_FILES['image']['error'] == 4) {
        die("you must upload image");
    }


//check the size
    if ($_FILES['image']['size'] > 100000000) {
        die("image size must be less than 500");
    }


//check the type of image
    $allowedExtensions = ['jpg', 'png', 'gif', 'jpeg'];
    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    if (!in_array(strtolower($extension), $allowedExtensions)) {
        die("image extension must be jpg or png or gif or jpeg");
    }


    if (!file_exists('images')) {
        mkdir('images');
    }

    move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $_FILES['image']['name']);


header('location:login.html');