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

<main>
    <div class="section container">
        <!-- ENsures the user is set before using it -->
        <?php if (isset($user)){ ?>
        <div class="center-align">
            <span class="big_font">Hi, <?php echo $_SESSION['username'] ; ?></span>
            <span >
                (You would be redirected to the login page after editing.)
            </span>
        </div><br>
        <div class="container">
            <form action="./edit_account.php" method="post">
                <div class="container">
                    <div class="row">
                        <!-- this div hides the user id of the user so the user can't change the user id -->
                        <div class="input-field col s12 l2">
                            <input type="hidden" name="update_user_id" id="update_user_id" value="<?php echo htmlspecialchars($user['user_id']) ?>" >
                        </div>
                        <div class="input-field col s12 l10">
                            <i class="material-icons prefix">person</i>
                            <label for="">Username:</label>
                            <input type="text" value="<?php echo $user['username'] ?>" name="update_username" id="update_username">
                        </div>


                        <div class="input-field col s12 l2"></div>
                        <div class="input-field col s12 l10">
                            <i class="material-icons prefix">lock</i>
                            <label for="">Password:</label>
                            <input type="text" value="<?php echo $user['password'] ?>" name="update_password" id="update_password">
                        </div>


                        <div class="col s12 input-field center-align">
                            <input type="submit" value="Edit" name="edit" class="blush-pink btn-large btn-flat white-text">
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

<?php 
include('./templates/footer.php');
?>