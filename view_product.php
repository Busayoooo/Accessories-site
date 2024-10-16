<?php 
include('./templates/navbar.php');
include('./templates/connect.php');

// create blank variables
$product_id = "";
$error_msg = "";


// check if a particular recipe id is selected
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $user_id = $_SESSION['user_id'];

    // fetch data from the table using row id
    $fetch_query = "SELECT * FROM `products` WHERE `product_id` = $product_id";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $order = mysqli_fetch_assoc($send_fetch_query);

    // print_r($recipe);
}

if (isset($_POST['add_to_cart'])) {

    if (isset($_GET['product_id'])) {

        $product_id = $_GET['product_id'];

        $fetch_query = "SELECT * FROM `products` WHERE `product_id` = $product_id ";
        $send_fetch_query = mysqli_query($db_connect, $fetch_query);
        $order = mysqli_fetch_assoc($send_fetch_query);

        $item_description = $order['product_name'];
        $price = $order['price'];

        $insert_query = "INSERT INTO `cart` (`item_description`, `price`, `user_id`) VALUES ('$item_description','$price','$user_id')";
        $insert_result = mysqli_query($db_connect, $insert_query);

        if ($insert_result) {
            header('Location: cart.php');
            exit();
        } else {
            echo "Error adding to cart:" . mysqli_error($db_connect);
        }

    }
}



// echo $_GET['product_id'];
   
?>

<!DOCTYPE html>
<html lang="en">
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
</style>
</head>

<main> 
    <div class="section">
        <div class="row product_card ">
            <div class="card hoverable ">
                <form action="view_product.php?product_id=<?php echo $product_id; ?>" method="post">
                    <div class="col s6">
                        <div class="card-image">
                            <img src="./img/<?php echo $order['img_name']; ?>.jpeg" alt="product image" >
                        </div>
                    </div>
                    <div class="col s6 card-content">
                        <h1 class="charcoal"><?php echo '₦' . number_format($order['price'], 2); ?></h1>
                        <p class="warm-gray"><?php echo $order['product_name'];?></p>
                        <br>
                        <div class="card-action center">
                            <input type="submit" value="Add To Cart" name="add_to_cart" id="add_to_cart" class="btn btn-large btn-flat blush-pink-text">
                            <!-- <a href="cart.php?product_id=<?php echo $order['product_id']; ?>" class="">Add to cart</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
