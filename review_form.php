<?php 

include("./templates/navbar.php");
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Chic Charms</title>

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
            height: 65;
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
    .bold-text{
        font-weight: bold;
    }
</style>
</head>
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