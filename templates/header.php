<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Chic Charms</title>
</head>
<style>
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
</style>
<body class="yellow lighten-4">

    <!-- header -->

    <header>
        <div class="navbar-fixed ">
            <nav class="z-depth-2 nav-wrapper pink accent-1">
                <div class="container">
                    <div class="row">
                        <a href="index.php" class="brand-logo"><img width="70px" src="./img/logo.png" alt="" class="responsive-img"></a>
                        <a href="#sidenav" class="sidenav-trigger yellow-text text-lighten-4"><i class="material-icons">menu</i></a>

                        <ul class="right hide-on-med-and-down">
                            <li class="nav-icon">
                                <a href="" class="  yellow-text text-lighten-4"><i class="large material-icons">account_circle</i></a>
                            </li>
                            <li class="nav-icon">
                                <a href="" class="yellow-text text-lighten-4"><i class="large material-icons">shopping_cart</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <ul id="sidenav" class="sidenav">
        <h5>Type</h5>
            <ul>
                <li>
                    <a href="" class="black-text">Bracelets</a>
                </li>
                <li>
                    <a href="" class="black-text">Earrings</a>
                </li>
                <li>
                    <a href="" class="black-text">Rings</a>
                </li>
                <li>
                    <a href="" class="black-text">Necklaces</a>
                </li>
                <li>
                    <a href="" class="black-text">Headbands</a>
                </li>
                <li>
                    <a href="" class="black-text">Hair Clips</a>
                </li>
            </ul>
        <h5>Color</h5>
            <ul>
                <li>
                    <a href="" class="black-text">Blue</a>
                </li>
                <li>
                    <a href="" class="black-text">Red</a>
                </li>
                <li>
                    <a href="" class="black-text">White</a>
                </li>
                <li>
                    <a href="" class="black-text">Black</a>
                </li>
                <li>
                    <a href="" class="black-text">Pink</a>
                </li>
                <li>
                    <a href="" class="black-text">Multicolor</a>
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