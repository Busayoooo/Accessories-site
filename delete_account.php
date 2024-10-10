<?php 
include("./templates/navbar.php");
include("./templates/connect.php");

// create blank variables to fetch
$user_id = "";
$error_msg = "";

// check if a particular recipe id is selected

if (isset($_GET['user_id'])) {
    // assign receipe id to the local variable
    $user_id = $_GET['user_id'];

    // fetch data from the table using row id
    $fetch_query = "SELECT * FROM `login_tb` WHERE `user_id` = $user_id";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $users = mysqli_fetch_assoc($send_fetch_query);

    // print_r($users);

} else {
    $error_msg = "No user logged in";
}

// Delete the data once edited

$delete_user_id = "";

if (isset($_POST['delete'])) {
    $delete_user_id = $_POST['delete_user_id'];

    $delete_query = "DELETE FROM login_tb WHERE user_id='$delete_user_id'";

if (mysqli_query($db_connect, $delete_query)) {
    echo "Account deleted successfully";

    header("Location: ./deleted_account.php");
} 
else {
    echo "Error deleting account: " . mysqli_error($db_connect);}
mysqli_close($db_connect);
}

?>

<main>
    <h1 class="blush-pink-text center"> Are you sure you want to delete your account? </h1>

    <div class="container">
        <form action="./delete_account.php" method="post">
            <div class="row">
                <div class="container center">
                    <div class="input-field col s12 l3">
                        <input type="hidden" name="delete_user_id" id="delete_user_id" value="<?php echo $users['user_id'] ?>" >
                        </div>
                        <div class="col s12 input-field">
                        <input type="submit" name="delete" value="delete" class="blush-pink btn-large btn-flat white-text">
                            <a href="./index.php" class="btn btn-large btn-flat blush-pink white-text">Back</a>
                        </div>
                </div>
            </div>
        </form>
    </div>
</main>

<?php 
include("./templates/footer.php");
?>