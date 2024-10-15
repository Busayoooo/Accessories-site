<?php
session_start();
include("./templates/connect.php");


$username = "";
$password = "";
$error_msg = null;

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password = mysqli_real_escape_string($db_connect,$_POST['password']);
    $fetch_login_details = "SELECT * FROM `login_tb` WHERE `username` = '$username'";

    // send query to server
    $send_query = mysqli_query($db_connect, $fetch_login_details);

    print_r($send_query);

    // check if username matches
    if (mysqli_num_rows($send_query)>0) {
        $login_details = mysqli_fetch_assoc($send_query);
        // check if password matches
        if ($login_details['password'] === $password) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['user_id'] = $_login_details['user_id'];
            echo $_login_details['user_id'];
            // header('Location: index.php');
            // exit();
        }else {
            echo 'wrong password';
        }
    } else{
        $error_msg="Incorrect details";
    }
    // print_r($login_details);
}
?>
<style>
    *{
        background-color: #fdf3e7 !important;
    }

    h1{
        color:#ff4d88 !important;
    }

    .blush-pink{
        background-color: #ff4d88 !important;
    }

    .creamy-white-text{
        color: #fdf3e7 !important;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Chic Charms</title>
</head>
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
                            <input type="submit" name="login" value="login" id="login" class="btn btn-flat btn-large blush-pink creamy-white-text">
                        </div>
                    </form>
                    <p class="center">Don't have an account?<a href="./sign-up.php"> Sign up</a></p>
            </div>
        </div>
    </div>
</main>


