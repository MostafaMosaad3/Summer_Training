<?php
$title = "Login";
include 'includes/init.php';
include 'loginSubmit.php';
?>
    <div class="container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo isset($email) ? $email : '' ?>">
                <?php if (isset($errors['email'])) { ?>
                    <span class="error"><?php echo $errors['email']; ?></span>
                <?php } ?>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                <?php if (isset($errors['password'])) { ?>
                    <span class="error"><?php echo $errors['password']; ?></span>
                <?php } ?>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1"  name="remember" value="1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php
include('includes/footer.php');
?>