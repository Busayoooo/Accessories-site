<?php 
session_start();
include("./templates/connect.php");

$username = '';
$account = '';

if (isset($_SESSION["username"])) {
    $username = $_SESSION['username'];
    $fetch_query = "SELECT * FROM `login_tb` WHERE `username` = '$username' ";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $users = mysqli_fetch_assoc($send_fetch_query);

    // print_r($users);
}else {
    $account = 'Account';
}




?>

<!DOCTYPE html>
<body>

    <!-- header -->
    <header>
        <div class="navbar-fixed">
            <nav class="z-depth-0 nav-wrapper blush-pink">
                <div class="container">
                    <div class="row">
                        <a href="index.php" class="brand-logo hide-on-large-only mobile_logo"><img width="55px" src="./img/logo.png" alt="" class="responsive-img"></a>
                        <!-- sidenav -->
                        <a href="index.php" class="gold-text brand-logo hide-on-med-and-down">Chic Charms</a>
                        <a href="#sidenav" class="sidenav-trigger creamy-white-text"><i class="material-icons">menu</i></a>

                        <ul class="right">
                            <li><a href="index.php" class="creamy-white-text"><i class="material-icons left">home</i>Home</a></li>
                            <!-- desktop dropdown -->
                            <?php if (isset($_SESSION["username"])) { ?>
                            <li><a class="creamy-white-text dropdown-trigger" data-target="dropdown1"><i class="material-icons left">account_circle</i><?php echo $username; echo $account; ?></a></li>
                            <?php }else{ ?>
                            <li> <a class="btn gold darken-4" href="login.php"><i class="material-icons left">input</i>Login</a></li>
                            <?php }  ?>
                            <li><a href="#" class="creamy-white-text"><i class="material-icons left">shopping_cart</i>Cart</a></li>
                        </ul>
                        <!-- dropdown content -->
                        <ul class="dropdown-content" id="dropdown1">
                            <?php if(isset($_SESSION["username"])) {?>
                                <li> <a class="charcoal center bold-text" href="#!">Account Settings</a> </li>
                                <li> <a class="charcoal" href="#!">My Orders</a></li>
                                <li> <a class="charcoal" href="edit_account.php?user_id=<?php echo $users['user_id'];?>"> Edit Account</a> </li> 
                                <li> <a class=" charcoal red-text" href="logout.php"><i class="material-icons">input</i>Logout</a> </li>
                                <li class="divider" tabindex="-1"></li>
                                <li> <a class=" center charcoal red white-text" href="#!"><i class="material-icons">delete_forever</i>Delete Account</a> </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <ul id="sidenav" class="sidenav">
        <h5 class="charcoal">Type</h5>
            <ul>
                <li>
                    <a href="" class="warm-gray">Bracelets</a>
                </li>
                <li>
                    <a href="" class="warm-gray ">Earrings</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Rings</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Necklaces</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Headbands</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Hair Clips</a>
                </li>
            </ul>
        <h5 class="charcoal">Color</h5>
            <ul>
                <li>
                    <a href="" class="warm-gray">Blue</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Red</a>
                </li>
                <li>
                    <a href="" class="warm-gray">White</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Black</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Pink</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Multicolor</a>
                </li>
            </ul>
        </ul>
    </header>
</body>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
        });
    </script>