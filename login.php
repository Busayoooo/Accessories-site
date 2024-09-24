<?php
include("./templates/navbar.php");
include("./templates/connect.php");

$username = "";
$password = "";
$error_msg = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fetch_login_details = "SELECT * FROM `login_tb` WHERE `username` = '$username'";

    // send query to server
    $send_query = mysqli_query($db_connect, $fetch_login_details);

    // check if username matches
    if (mysqli_num_rows($send_query)>0) {
        $login_details = mysqli_fetch_assoc($send_query);
        // check if password matches
        if ($login_details['password']=== $password) {
            session_start();
            $_SESSION['username'] = $login_details['username'];
            header('Location: landing.php');
        }else {
            $error_msg="wrong password";
        }
    } else{
        $error_msg="Incorrect details";
    }
    // print_r($login_details);
}
?>
<main class="section">
    <div class="container">
        <div class="container">
            <div class="row">
                <h1 class="center">Login</h1>
                <span class="red-text"> <?php echo $error_msg ; ?> </span> 
                    <form action="login.php" method="post">
                        <div class="col s12 input-field">
                            <input type="text" name="username" id="username" placeholder="username">
                        </div>
                        <div class="col s12 input-field">
                            <input type="password" name="password" id="password" placeholder="password">
                        </div>
                        <div class="col s12 center input-field">
                            <input type="submit" name="login" value="login" id="login" class="btn btn-flat btn-large blush-pink white-text">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</main>


