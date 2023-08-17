<?php
session_start() ;
require('partials/head.php');
require('partials/nav.php') ;
$heading = "Home" ;
require('partials/banner.php') ;

?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p>Hello. Welcome to the home page <?=$_SESSION['username']?>.</p>
        </div>
    </main>


<?php
echo "<a href='../logout.php'> log out </a>" ;
require('partials/footer.php') ;

?>
