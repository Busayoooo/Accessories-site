<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Chic Charms</title>
</head>
<style>
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
        color: #f7cd45 !important;
}

    .creamy-white{
    background-color: #fdf3e7 !important;
}

    .creamy-white-text{
        color: #fdf3e7 !important;
}

    .charcoal{
        color: #333333 !important;
}

    .warm-gray{
        color: #7d7d7d !important;
}

    .brand-logo{
        margin-top: 8px;
    }


    @media only screen and (min-width: 601px) {
        nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i {
            height: 85;
        }
    }

    .nav-icon{
        margin-top: 10px;
    }

    .mobile_logo{
        margin-bottom: 50px;
    }
    .nav_link{
        transition: all .2s;
    }
    .nav_link:hover{
        border-bottom: 3px solid #ff4d88;
        background-color: transparent;
    }
</style>
<body class="white">

    <!-- header -->

    <header>
        <div class="navbar-fixed ">
            <nav class="z-depth-0 nav-wrapper white">
                <div class="container">
                    <div class="row">
                        <a href="index.php" class="brand-logo hide-on-med-and-down pink-text left">Chic & Chocs</a>
                        <a href="index.php" class="brand-logo hide-on-large-only mobile_logo"><img width="55px" src="./img/logo.png" alt="" class="responsive-img"></a>
                        <a href="#sidenav" class="sidenav-trigger creamy-white-text"><i class="material-icons">menu</i></a>
                        

                        <ul class="right hide-on-med-and-down">
                            <li class="nav-icon">
                                <a href="" class="pink-text nav_link"><i class=" material-icons left ">home</i>Home</a>
                            </li>
                            <li class="nav-icon">
                                <a href="" class="pink-text nav_link"><i class="material-icons left ">shopping_cart</i>Cart</a>
                            </li>
                            <li class="nav-icon">
                                <a href="" class="pink-text nav_link"><i class=" material-icons left ">person</i>Account</a>
                            </li>
                        </ul>
                        <div class="divider"></div>
                    </div>
                </div>
            </nav>
        </div>
        <ul id="sidenav" class="sidenav">
            <div class="container">
                <h5 class="charcoal">Type</h5>
                    <ul>
                        <li>
                            <a href="" class="warm-gray">Bracelets</a>
                        </li>
                        <li>
                            <a href="" class="warm-gray ">Earrings</a>
                        </li>
                        <li>
                            <a href="" class="warm-gray">Rings</a>
                        </li>
                        <li>
                            <a href="" class="warm-gray">Necklaces</a>
                        </li>
                        <li>
                            <a href="" class="warm-gray">Headbands</a>
                        </li>
                        <li>
                            <a href="" class="warm-gray">Hair Clips</a>
                        </li>
                    </ul>
            </div>
            <h5 class="charcoal">Color</h5>
            <ul>
                <li>
                    <a href="" class="warm-gray">Blue</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Red</a>
                </li>
                <li>
                    <a href="" class="warm-gray">White</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Black</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Pink</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Multicolor</a>
                </li>
            </ul>
        </ul>
    </header>
    
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
        $('.carousel').carousel();
        $('.slider').slider();
        $('.sidenav').sidenav();
        });
    </script>