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
            height: 85;
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

<body>
    <footer class="page-footer blush-pink">
        <div class="row">
            <!-- logo -->
            <div class="col l3 s12 push-l1 center-on-small-only">
                <img width="150px" src="./img/logo.png" alt="logo" class="responsive-img brand-logo hide-on-med-and-down">
                <img width="150px" src="./img/logo.png" alt="logo" class="responsive-img center brand-logo hide-on-large-only">
                <p class="charcoal"> The company Lorem ipsum dolor sit ami gretani lorem adipisicing elit.</p>
            </div>
            <!-- Explore -->
            <div class="col l3 push-l2 s12 footer-section">
                <h4 class="charcoal">Explore</h4>
                <ul>
                    <li>
                        <a href="bracelets.pho" class="charcoal">Bracelets</a>
                    </li>
                    <li>
                        <a href="earrings.php" class="charcoal">Earrings</a>
                    </li>
                    <li>
                        <a href="rings.php" class="charcoal">Rings</a>
                    </li>
                    <li>
                        <a href="" class="charcoal">Necklaces</a>
                    </li>
                    <li>
                        <a href="" class="charcoal">Headbands</a>
                    </li>
                    <li>
                        <a href="" class="charcoal">Hair Clips</a>
                    </li>
                </ul>
            </div>
            <!-- Contact Us -->
            <div class="col l3 push-l2 s12 footer-section">
                <h4 class="charcoal">Contact Us</h4>
                <ul>
                    <li>
                        <a href="tel:+2349031138739" class=" charcoal"> <i class="material-icons">phone</i> +2349031138739</a>
                    </li>
                    <li>
                        <a href="" class="charcoal">chiccharms@gmail.com</a>
                    </li>
                    <li>
                        <a href="" class="charcoal">Chic_Charms</a>
                    </li>
                    <li>
                        <a href="https://wa.me/09031138739" class="charcoal">whatsapp</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright center blush-pink">
            <p class="gold-text"> © 2024. Chic Charms. All rights <br> reserved.</p> 
        </div>
    </footer>    
</body>
</html>
    
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.dropdown-trigger').dropdown();
            $('.dropdown-trigger').dropdown();
        });
    </script>