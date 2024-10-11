<?php 

include("./templates/navbar.php");
include("./templates/connect.php");

// create blank variables
$product_id = "";
$error_msg = "";

$select_query = "SELECT * FROM `cart`";

$send_query = mysqli_query($db_connect, $select_query);

$carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

echo isset($_POST['quantity']);
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

    .cart-text{
        padding: 20px;
    }
    .cart-text span{
        margin-right: 200px;
    }
    .row{
        height: 500px !important;
        overflow: scroll;
    }
    .quantity{
        width: 50px !important;
        margin-left: 20px !important;
        text-align: center;
    }
</style>

<main>
    <br> <br>
    <div class="container cart-color z-depth-4">
        <form action="cart.php" method="post">
            <?php if($carts){ ?>
            <div class="row">
                <div class="col l8">
                        <?php 
                        $total_price = 0;
                        foreach ($carts as $cart) {
                        $total_price += $cart['price'];
                        ?>
                        
                        <div class="cart-text">
                            <h5><?php echo $cart['item_description']; ?></h5>
                            <span><?php echo '₦' . number_format($cart['price'], 2); ?></span>
                            <button class="btn" type="submit"><i class="material-icons">delete</i></button>
                            <input type="number" name="quantity" id="quantity" value="1" class="quantity">
                        </div>
                        <?php } ?>
                </div>
                <div class="col l3">
                    <br>
                    <div class="summary center">
                        <h3 class=" center blush-pink-text">Summary</h3>
                        <div class="divider gold"></div>
                        <br>
                        <h5 class="warm-gray">Total: <?php echo $total_price; ?></h5>
                        <br>
                            <a href="./confirmation.php" class=" outline center btn btn-flat btn-large creamy-white-text blush-pink">Place Order</a>
                    </div>
                    <br>
                    <div class="blush-pink gold-text bold-text col l12 outline "><p class="center pay-on-delivery">Pay On <br> Delivery</p></div>
                </div>
            </div>
            <?php }else { echo 'cart is empty'; } ?>
        </form>
    </div>
    <br> <br>
</main>


<?php include("./templates/footer.php"); ?>