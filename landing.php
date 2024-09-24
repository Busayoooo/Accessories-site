<?php
include("./templates/navbar.php");
include("./templates/connect.php");
?>
<main>
    <h1 class="center">Welcome <?php session_start(); echo $_SESSION['username'];?> </h1>
</main>
<?php include("./templates/footer.php"); ?>