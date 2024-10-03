<?php 
include('./templates/navbar.php');
include('./templates/connect.php');

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

<main> 
    <div class="section">
        <div class="row product_card ">
            <div class="card hoverable ">
                <div class="col s6">
                    <div class="card-image">
                        <img src="./img/<?php echo $product['img_name']; ?>.jpeg" alt="product image" class="responsive-img">
                    </div>
                </div>
                <div class="col s6 card-content">
                    <h1 class="charcoal">N<?php echo $product['price'];?> </h1>
                    <p class="warm-gray"><?php echo $product['product_name'];?></p>
                    <br>
                    <div class="card-action center">
                        <a href="" class=""><i class="material-icons">shopping_cart</i> Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
