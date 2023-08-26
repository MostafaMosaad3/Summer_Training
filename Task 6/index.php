<?php
$title = "Profile";
include 'includes/init.php';
;
if(!isset($_SESSION['email'])){
    header("location:login.php");
    die();
}
?>
    <div class="container">
        <?php echo $_SESSION['email']; ?>
    </div>


<?php
include('includes/footer.php');
?>