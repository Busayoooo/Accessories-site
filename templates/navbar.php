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

<style>
    .qwitcher-grypen-regular {
  font-family: "Qwitcher Grypen", cursive;
  font-weight: 400;
  font-style: normal;
}

.qwitcher-grypen-bold {
  font-family: "Qwitcher Grypen", cursive;
  font-weight: 700;
  font-style: normal;
}

</style>

<!DOCTYPE html>
<body>

    <!-- header -->
    <header>
        <div class="navbar-fixed">  
            <nav class="z-depth-0 nav-wrapper blush-pink">
                <div class="container">
                    <div class="row">
                        <a href="index.php" class="left" ><img src="./img/logo.png" alt="" class=" left col s1 hide-on-large-only brand-logo responsive-img" width="150px" ></a>
                        <!-- sidenav -->
                        <a href="index.php" class="qwitcher-grypen-regular gold-text brand-logo hide-on-med-and-down">Chic Charms</a>
                        <a href="#sidenav" class="col push-s1 sidenav-trigger creamy-white-text"><i class="material-icons">menu</i></a>

                        <ul class="right hide-on-med-and-down">
                            <li><a href="index.php" class="creamy-white-text"><i class="material-icons left">home</i>Home</a></li>
                            <!-- desktop dropdown -->
                            <?php if (isset($_SESSION["username"])) { ?>
                            <li><a class="creamy-white-text dropdown-trigger" data-target="dropdown1"><i class="material-icons left">account_circle</i><?php echo $username; echo $account; ?></a></li>
                            <?php }else{ ?>
                            <li> <a class="btn gold darken-4" href="login.php"><i class="material-icons left">input</i>Login</a></li>
                            <?php }  ?>
                            <li><a href="cart.php" class="creamy-white-text"><i class="material-icons left">shopping_cart</i>Cart</a></li>
                        </ul>
                        <!-- dropdown content -->
                        <ul class="dropdown-content hide-on-med-and-down" id="dropdown1">
                            <?php if(isset($_SESSION["username"])) {?>
                                <li> <a class="charcoal center bold-text" href="#!">Account Settings</a> </li>
                                <li> <a class="charcoal" href="#!">My Orders</a></li>
                                <li> <a class="charcoal" href="edit_account.php?user_id=<?php echo $users['user_id'];?>"> Edit Account</a> </li> 
                                <li> <a class=" charcoal red-text" href="logout.php"><i class="material-icons">input</i>Logout</a> </li>
                                <li class="divider" tabindex="-1"></li>
                                <li> <a class=" center charcoal red white-text" href="delete_account.php"><i class="material-icons">delete_forever</i>Delete Account</a> </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div>
                        
                    </div>
                </div>
            </nav>
        </div>
        <ul id="sidenav" class="sidenav blush-pink">
            <h5 class="center gold-text ">Categories</h5>
            <li>
                <a href="" class="creamy-white-text">Bracelets</a>
            </li>
            <li>
                <a href="" class="creamy-white-text">Earrings</a>
            </li>
            <li>
                <a href="" class="creamy-white-text">Rings</a>
            </li>
            <li>
                <a href="" class="creamy-white-text">Necklaces</a>
            </li>
            <li>
                <a href="" class="creamy-white-text">Headbands</a>
            </li>
            <li>
                <a href="" class="creamy-white-text">Hair Clips</a>
            </li>
        </ul>
    </header>
</body>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
        });
    </script>