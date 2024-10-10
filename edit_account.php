<?php 

include('./templates/navbar.php');
include('./templates/connect.php');


// create blank variables to fetch
$user_id = "";
$error_msg = "";

// check if a particular user id is selected

// echo $_GET['user_id'];

if (isset($_GET['user_id'])) {
    // assign receipe id to the local variable
    $user_id = $_GET['user_id'];

    // fetch data from the table using row id
    $fetch_query = "SELECT * FROM `login_tb` WHERE `user_id` = $user_id";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $user = mysqli_fetch_assoc($send_fetch_query);

    // print_r($user);

    if (!$user) {
        $error_msg = "user not found";
    }

} else {
    $error_msg = "You are not logged in!";
}

// Update the data once edited
$update_user_id = "";
$update_username = "";
$update_password = "";

if (isset($_POST['edit'])) {
    $update_user_id = $_POST['update_user_id'];

    $update_username = $_POST['update_username'];

    $update_password = $_POST['update_password'];

    $update_query="UPDATE `login_tb` SET `username`='$update_username',`password`='$update_password' WHERE `user_id`='$update_user_id'";

    $send_update_query= mysqli_query($db_connect, $update_query);

    if ($send_update_query) {
        header('Location: login.php');
        exit();
    }
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Chic Charms</title>
</head>

<style>
    * playwrite-de-grund-font {
    font-family: "Playwrite DE Grund", cursive;
    font-optical-sizing: auto;
    font-weight: 100;
    font-style: normal;
    }

    .brand-logo{
        margin-left: 50px;
    }

    .blush-pink{
        background-color: #ff4d88 !important;
    }

    .blush-pink-text{
        color: #ff4d88 !important;
    }

    .gold{
        background-color: #f7cd45 !important;
    }

    .gold-text{
        color: #f8e79b !important;
    }

    body{
    background-color: #fdf3e7 !important;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    }
    main{
        flex: 1 0 auto;
    }

    .creamy-white-text{
        color: #fdf3e7 !important;
    }
    .creamy-white{
        background-color: #fdf3e7 !important;
    }

    .charcoal{
        color: #333333 !important;
    }

    .warm-gray{
        color: #7d7d7d !important;
    }

    @media only screen and (min-width: 601px) {
        nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i {
            height: 85;
        }
    }

    .mobile_logo{
        margin-bottom: 50px;
    }

    .navbar{
        padding-bottom: 15px;
    }
    .page-footer .footer-copyright {
        justify-content: center;
        align-items: center;
    }
    .big_font{
        font-size: 30px;
    }
    .input-field input:focus {
            border-bottom: 1px solid #ff4d88 !important;
            box-shadow: 0 1px 0 0 #ff4d88 !important;
    }
    label {
        color: black !important;
        /* font-weight: bold; */
        font-size: 15px !important;
    }
    .input-field .prefix.active, label.active{
        color: #ff4d88 !important;
    }
</style>

<main>
    <div class="section container">
        <!-- ENsures the user is set before using it -->
        <?php if (isset($user)){ ?>
            <br> <br>
        <div class="center-align">
            <span class="big_font">Hi <?php echo $_SESSION['username'] ; ?>!  </span> <br>   
            <span class=" warm-gray" >
                You would be redirected to the login page after editing.
            </span>
        </div>
        <div class="container">
            <form action="./edit_account.php" method="post">
                <div class="container">
                    <div class="row">
                        <!-- this div hides the user id of the user so the user can't change the user id -->
                        <div class="input-field col s12 l2">
                            <input type="hidden" name="update_user_id" id="update_user_id" value="<?php echo htmlspecialchars($user['user_id']) ?>" >
                        </div>
                        <div class="input-field col s12 l12">
                            <i class="material-icons prefix">person</i>
                            <label for="">Username:</label>
                            <input type="text" value="<?php echo $user['username'] ?>" name="update_username" id="update_username">
                        </div>


                        <div class="input-field col s12 l2"></div>
                        <div class="input-field col s12 l12">
                            <i class="material-icons prefix">lock</i>
                            <label for="">Password:</label>
                            <input type="text" value="<?php echo $user['password'] ?>" name="update_password" id="update_password">
                        </div>


                        <div class="col s12 input-field center-align">
                            <input type="submit" value="Edit" name="edit" class="blush-pink btn-large btn-flat white-text">
                            <a href="index.php" class="btn btn-large btn-flat blush-pink white-text">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <h1><?php echo htmlspecialchars($error_msg); ?></h1>
        <?php }else {
            echo '<h1 class="center-align">You are not logged in.</h1> ';
        } ?>
    </div>
</main>
