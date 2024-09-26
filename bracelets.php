<?php
include("./templates/navbar.php");
include("./templates/connect.php");

$product_type = "";

if (isset($_GET['product_type'])) {
    // assign receipe id to the local variable
$product_type= $_GET['product_type'];
//write the fetch query

// echo $product_type;
$fetch_query = "SELECT * FROM `products`  WHERE `product_type` = '$product_type'";

//send the query to the server
$send_fetch_query = mysqli_query($db_connect, $fetch_query);

//receive data from server
$products = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);

// print_r($products);

} else {
    $error_msg = "No bracelet selected!";

    // output content to the html no loops.
}

?>

<style>
    .bold-text{
        font-weight: bold;
    }
</style>
<main>
    <div class="container">
        <h1 class="center-align black-text">Bracelets</h1>
        <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col l4 ">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/<?php echo $product['img_name'];?>.jpeg" alt="" class="responsive-image">
                    </div>
                    <div class="card-content">
                        <div class=" center warm-gray"><?php echo $product['product_name'];?></div>
                        <strong class="charcoal">N<?php echo $product['price']?></strong> <br><br>
                    </div>
                    <div class="card-action">
                        <a href="view_product.php?product_id=<?php echo $product['product_id']; ?>" class="blush-pink-text bold-text center">Order Now</a>
                    </div>
                </div>
            </div>
            <?php } ?> 
        </div>
    </div>
</main>

<?php
include("./templates/footer.php");

?>