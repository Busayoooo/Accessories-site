<?php 

include("./templates/header.php");
include("./templates/connect.php");

$first_name = "";
$last_name = "";
$phone_number = "";
$email = "";
$review = "";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number =  $_POST['phone_number'];
    $email = $_POST['email'];
    $review = $_POST['review'];

    // insert query, to insert the data into the database
    $insert_query = "INSERT INTO `reviews`(`first_name`, `last_name`, `phone_number`, `email`, `review`) VALUES ( '$first_name', '$last_name', '$phone_number', '$email', '$review')";

    // send query to server
    $send_query = mysqli_query($db_connect, $insert_query);   

    if ($send_query) {
    } else {
        echo 'error: ' . mysqli_error($db_connect);
    }
}
?>
<style>
    .bold-text{
        font-weight: bold;
    }
</style>
<main>
    <div class="container">
        <div class="row">
            <h1 class=" bold-text center blush-pink-text">Leave a review</h1>
            <form action="review_form.php" method="post">
                <div class="col s12 l6 input-field">
                    <input type="text" name="first_name" id="first_name">
                    <label for="first_name">First Name</label>
                </div>
                <div class="col s12 l6 input-field">
                    <input type="text" name="last_name" id="last_name">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="col s12 l6 input-field">
                    <input type="tel" name="phone_number" id="phone_number">
                    <label for="phone_number">Phone Number</label>
                </div>
                <div class="col s12 l6 input-field">
                    <input type="email" name="email" id="email">
                    <label for="email">Your Email</label>
                </div>
                <div class="col s12 input-field">
                    <input type="text" name="review" id="review">
                    <label for="review">Enter your review</label>
                </div>
                <div class="center">
                    <input class="btn btn-large blush-pink creamy-white-text center" type="submit" name="submit" id="submit" value="Submit">
                    <a href="index.php" class="btn btn-large blush-pink">Back</a>
                        </div>
            </form>
        </div>
    </div>
</main>