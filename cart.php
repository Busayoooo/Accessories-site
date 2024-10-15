<?php 

include("./templates/navbar.php");
include("./templates/connect.php");

// create blank variables
$product_id = "";
$error_msg = "";
$user_id = "";
$quantity = 1;

$select_query = "SELECT * FROM `cart`";

$send_query = mysqli_query($db_connect, $select_query);

$carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);
$user_id = $_SESSION['user_id'];
$error_msg = "";

// check if a particular user id is selected

// echo $_GET['user_id'];



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
        
    }
    .quantity{
        width: 50px !important;
        margin-left: 20px !important;
        text-align: center;
    }

    .cart-items{
        overflow: scroll;
        height: 520px;
    }

    .playwrite-de-grund-font {
        font-family: "Playwrite DE Grund", cursive;
        font-optical-sizing: auto;
        font-weight: 100;
        font-style: normal;
    }
</style>

<main>
    <br> <br>
    <div class="container cart-color z-depth-4">
        <br>
        <form action="cart.php" method="post">
            <?php if($carts){ ?>
            <div class="row">
                <div class="col l8 cart-items">
                        <?php 
                        $total_price = 0;
                        foreach ($carts as $cart) {
                        $total_price += $cart['price'];
                        $quantity += $cart['quantity'];
                        ?>
                        
                        <div class="cart-text outline z-depth-1">
                            <h5><?php echo $cart['item_description']; ?></h5>
                            <span><?php echo '₦' . number_format($cart['price'], 2); ?></span>
                            <button type="submit" class="btn"><i class="material-icons">add</i></button>
                            <input type="number" name="quantity" id="quantity" value="1" class="quantity">
                            <button class="btn " type="submit"><i class="material-icons">delete</i></button>
                        </div>
                        <br>
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
                <!-- echo 'cart is empty'; -->
            </div>
            <?php }else {  
            echo '<br>
            <div class="center">
            <h1 class="blush-pink-text center bold-text playwrite-de-grund-font bold-text">Your Cart is empty !!!</h1>
            </div>
            <br>';
            } ?>
            
            
        </form>
    </div>
    <br> <br>
</main>


<?php include("./templates/footer.php"); ?>