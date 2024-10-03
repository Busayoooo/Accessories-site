<?php
include("./templates/navbar.php");
include("./templates/connect.php");

// Create blank variables
$error_msg = "";
$password = $email = $first_name = $last_name = " ";

// Check if the submit button is pressed
if (isset($_POST['sign-up'])) {

    // store array to array variables
    $username = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];;

    // Write the insert query
    $insert_query = "INSERT INTO `login_tb`(`username`, `email`, `first_name`, `last_name`, `password`) VALUES ('$username', '$email', '$first_name', '$last_name' , '$password')";
    
    // Send query to the server
    $send_query = mysqli_query($db_connect, $insert_query);    

    if ($send_query) {
        header('Location: index.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($db_connect);
    }
}else{
    $error_msg = "Password do not match";

}


?>
<main class="section">
    <div class="container">
        <div class="row">
            <!-- <span class="red-text"> <?php echo $error_msg ; ?> </span> -->
            <div class="container">
                <h1 class="center"> Sign-Up </h1>
                <form action="sign-up.php" method="post">
                    <div class="col s12 input-field">
                        <input type="text" name="username" id="username" placeholder="username">
                    </div>
                    <div class="col s12 input-field">
                        <input type="text" name="first_name" id="first_name" placeholder="First name">
                    </div>
                    <div class="col s12 input-field">
                        <input type="text" name="last_name" id="last_name" placeholder="Last name">
                    </div>
                    <div class="col s12 input-field">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col s12 input-field">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="col s12 input-field">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password">
                    </div>
                    
                    <div class="col s12 center input-field">
                        <input type="submit" name="sign-up" value="Sign-Up" id="sign-up" class="btn btn-flat btn-large blush-pink white-text">
                    </div>
                </form>
                <p class="center">Already have an account?<a href="./login.php"> Login</a></p>
            </div>
        </div>
    </div>
</main>

<?php
include("./templates/footer.php");
?>