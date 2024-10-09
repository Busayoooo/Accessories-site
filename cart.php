<?php 

include("./templates/navbar.php");
include("./templates/connect.php");

// create blank variables
$product_id = "";
$error_msg = "";

// check if a particular recipe id is selected

if (isset($_GET['product_id'])) {
    // assign receipe id to the local variable
    $product_id = $_GET['product_id'];

    // fetch data from the table using row id
    $fetch_query = "SELECT * FROM `products` WHERE `product_id` = $product_id";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $product = mysqli_fetch_assoc($send_fetch_query);

    // print_r($recipe);

} else {
    $error_msg = "No bracelet selected!";

    // output content to the html no loops.
}
?>

<style>
    .cart-color{
        background-color: #e7ded32d;
        border: solid #ff4d88;
        border-width: 2px;
    }

    .pay-on-delivery{
        font-size: 25px;
        font-weight: bold;
    }

    .summary{
        background-color: #e7ded32d;
        border: solid #ff4d88;
        border-width: 2px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .outline{
        border: solid #f7cd45;
        border-width: 1px;
    }
</style>

<main>
    <br> <br>
    <div class="container cart-color z-depth-4">
        <div class="row">
            <div class="col l8"></div>
            <div class="col l3">
                <br>
                <div class="summary center">
                    <h3 class=" center blush-pink-text">Summary</h3>
                    <div class="divider gold"></div>
                    <br>
                    <h5 class="warm-gray">Total:</h5>
                    <br>
                    <form action="./cart.php" method="post">
                        <a href="./confirmation.php" class=" outline center btn btn-flat btn-large creamy-white-text blush-pink">Place Order</a>
                    </form>
                </div>
                <br>
                <div class="blush-pink gold-text bold-text col l12 outline "><p class="center pay-on-delivery">Pay On <br> Delivery</p></div>
            </div>
        </div>
    </div>
    <br> <br>
</main>


<?php include("./templates/footer.php"); ?>