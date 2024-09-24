<?php
include("./templates/header.php");
include("./templates/connect.php");

//write the fetch query
$fetch_query = "SELECT * FROM `reviews`";

//send the query to the server
$send_fetch_query = mysqli_query($db_connect, $fetch_query);

//receive data from server
$reviews = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);

// print_r($recipes);

?>

<!-- <div id="customers_session" class="container scrollspy">
        <h2 class="center blush-pink-text">What our customers say...</h2>
            <div class="row">
                <div class="col s12">
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle blush-pink">person</i>
                            <h6 class="charcoal bold-text">Ryan Kingfisher</h6>
                            <i><p class="warm-gray">"In life there will be road blocks but we will over come it. Hammock talk come soon. Let's see what chef Dee got that they don't want us to eat "</p></i> 
                        </li> -->

<main>
    <div class="container">
        <a href="index.php" class="left blush-pink-text"><i class="blush-pink-text material-icons">home</i>Back home</a>
        <h1 class="center-align blush-pink-text">Reviews</h1>
        <div class="row">
            <?php foreach ($reviews as $review) { ?>
            <div class="col s12">
                <ul class="collection">
                    <li class="collection-item avatar">
                    <i class="material-icons circle blush-pink">person</i>
                    <h6 class="charcoal bold-text"><?php echo $review['first_name'] . $review['last_name'] ;?></h6>
                    <i><p class="warm-gray">"<?php echo $review['review'];?>"</p></i>
                    <p class="charcoal right">Created by: <?php echo $review['email'];?></p>
                    </li>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php
include("./templates/footer.php"); ?>
