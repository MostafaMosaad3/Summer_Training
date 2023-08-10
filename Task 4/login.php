<?php
$is_valid = false ;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc() ;
    if($user){
        if(password_verify($_POST["password"] , $user["password_hash"])){
            die("successful login") ;
        }
    }
    $is_valid = true ;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
</head>
<body>
    <h1>login</h1>

    <?php if ($is_valid == true){
        echo "invalid login" ;
    } ?>

    <form action="TODO list/index.php" method = "post">
        <div>
        <label for="email">email</label>
        <input type = email  name = "email"  id = "email"
        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        </div>

        <div>
        <label for="password">password</label>
        <input type = password  name = "password"  id = "password" >
        </div>

        <button>Log in</button>
    </form>