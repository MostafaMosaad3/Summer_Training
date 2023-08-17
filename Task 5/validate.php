<?php

//check about first name
if(empty($_POST['first_name']))
{
   die("first name is required") ;
}


//check about last name
if(empty($_POST['last_name']))
{
    die("last name is required") ;
}


//check about email
if(empty($_POST['email']))
{
    die("email is required") ;
}
else
{
    if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    {
        die("email  is not valid") ;
    }
}


//check about password
if(empty($_POST['password']))
{
    die("password is required");
}
else
{
    if(strlen($_POST['password'] < 8))
    {
        die("password must be at least 8 characters") ;
    }
}


//check about confirm_password
if(empty($_POST['confirm_password']))
{
    die("confirm_password is required");
}
else
{
    if(strlen($_POST['confirm_password'] < 8))
    {
        die("password must be at least 8 characters") ;
    }
}


//check about password and confirm-password
if($_POST['password'] != $_POST['confirm_password'])
{
    die("Passwords must match");
}

header('location:upload_image.php') ;
