<?php
$title ="Register";
include 'includes/init.php';
include 'registerSubmit.php';
?>
    <div class="container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3 ">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name" value="<?php echo isset($name) ? $name : '' ?>">

                <?php if (isset($errors['name'])) { ?>
                    <span class="error"><?php echo $errors['name']; ?></span>
                <?php } ?>
            </div>
            <div class="form-group mb-3">
                <label for="phone">phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Your phone" name="phone" value ="<?php echo isset($phone) ? $phone : '' ?>">
                <?php if (isset($errors['phone'])) { ?>
                    <span class="error"><?php echo $errors['phone']; ?></span>
                <?php } ?>
            </div>

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


            <div class="form-group mb-3">
                <label for="upload_image">Upload Your Profile </label>
                <input type="file" class="form-control" name="image" id="upload_image" >
                <?php if (isset($errors['image'])) { ?>
                    <span class="error"><?php echo $errors['image']; ?></span>
                <?php } ?>
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php
include('includes/footer.php');
?>