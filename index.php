<?php 

include("./templates/header.php");
include("./templates/connect.php");

$name = "";
$phone_number = "";
$email = "";
$description = "";

if (isset($_POST['submit'])) {
    $name =  $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    
    // insert query, to insert the data into the database
    $insert_query = "INSERT INTO `custom_pieces`(`name`, `phone_number`, `email`, `description`) VALUES ( '$name', '$phone_number', '$email', '$description')";

    // send query to server
    $send_query = mysqli_query($db_connect, $insert_query);   

    if ($send_query) {
        header('Location: index.php');
        exit();
    } else {
        echo 'error: ' . mysqli_error($db_connect);
    }
}
?>

    <style>
        .carousel{
            margin-top: 30px;
        }

        main div div.l2{
            margin-top: 30px;
        }

        .bold-text{
            font-weight: bold;
        }

        .section-text{
            margin-left: 20px;
        }
    </style>

    <main>
        <!-- Desktop navbar and carousel-->
        <div class="row container hide-on-med-and-down">
            <div class="col l2 category ">
                <h5 class="charcoal">Type</h5>
                <ul>
                    <li>
                        <a href="" class="warm-gray">Bracelets</a>
                    </li>
                    <li>
                        <a href="" class="warm-gray">Earrings</a>
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
            </div>
            <div class="col l10 push-l1 ">
                <div class="carousel carousel-slider">
                    <a class="carousel-item" href="#one!"><img src="./img/blue-bracelet-2.jpeg"></a>
                    <a class="carousel-item" href="#two!"><img src="./img/pink-bracelet-2.webp"></a>
                    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
                    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
                    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
                    <a class="carousel-item" href="#six!"><img src="https://lorempixel.com/250/250/nature/6"></a>
                </div>
            </div>
        </div>

        <!-- Mobile carousel -->
        <div class="carousel carousel-slider hide-on-large-only">
            <a class="carousel-item" href="#one!"><img src="./img/blue-bracelet-2.jpeg"></a>
            <a class="carousel-item" href="#two!"><img src="./img/pink-bracelet-2.webp"></a>
            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
            <a class="carousel-item" href="#six!"><img src="https://lorempixel.com/250/250/nature/6"></a>
        </div>

        <!-- Deal of the day -->
<br> <br>
        <div class="row center">
            <h1 class="gold-text bold-text">Deals of The Day</h1>
            <div class="col l4 s6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/blue-bracelet.webp" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class="warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class="charcoal bold-text left">N 1500</h6> <br>
                        
                    </div>
                    <div class="card-action">
                        <a class="blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col l4 s6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/pink-bracelet-2.jpg" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class="warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class="charcoal bold-text left">N 1500</h6> <br>
                    </div>
                    <div class="card-action">
                        <a class=" blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col l4 hide-on-med-and-down">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/multicolor-bracelet-2.jpg" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class="warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class="charcoal bold-text left">N 1500</h6> <br>
                    </div>
                    <div class="card-action">
                        <a class=" blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Most Popular Items -->
        <div class="row center">
            <h1 class="blush-pink-text bold-text">Our Most Popular Items</h1>
            <div class="col l4 hide-on-med-and-down">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/blue-bracelet-3.webp" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class=" warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class="Charcoal bold-text left">N 1500</h6> <br>
                        
                    </div>
                    <div class="card-action">
                        <a class=" blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col l4 s6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/pink-bracelet-3.jpg" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class=" warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class=" charcoal bold-text left">N 1500</h6> <br>
                    </div>
                    <div class="card-action">
                        <a class=" blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col l4 s6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/multicolor-bracelet.avif" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class="warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class=" charcoal bold-text left">N 1500</h6> <br>
                    </div>
                    <div class="card-action">
                        <a class="blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- custom section -->
        <div class="container">
            <div class="row">
                <div class="col s12 l6">
                    <h3 class=" blush-pink-text">Want to have a custom piece made?</h3>
                    <p class="flow-text">Click the button below to reach out to us 👇</p>
                    <a href="" class= "hide-on-med-and-down blush-pink yellow-text text-lighten-4 btn btn-large left hoverable">Email us at<i class="right material-icons">email</i></a>
                    <a class= "hide-on-large-only right blush-pink yellow-text text-lighten-4 btn btn-large left hoverable">Call us Now<i class="right material-icons">phone</i></a>
                </div>
                <div class="col s12 l6">
                    <form action="index.php" method="post">
                        <div class="col s12 l6 input-field">
                            <input type="text" name="name" id="name">
                            <label for="name">Your Name</label>
                        </div>
                        <div class="col s12 l6 input-field">
                            <input type="tel" name="phone_number" id="phone_numbe">
                            <label for="phone_numbe">Your Phone Number</label>
                        </div>
                        <div class="col s12 input-field">
                            <input type="email" name="email" id="email">
                            <label for="email">Enter Your Email</label>
                        </div>
                        <div class="col s12 input-field">
                            <input type="text" name="description" id="description">
                            <label for="description">The custom piece description</label>
                        </div>
                        <br>
                        <div class="center">
                            <input class="btn btn-large pink accent-1 yellow-text text-lighten-4 center" type="submit" name="submit" id="submit" value="Send">
                        </div>
                    </form> 
                </div>
            </div>
        </div>

        <!-- Customer reviews -->
        <div id="customers_session" class="container scrollspy">
        <h2 class="center pink-text text-accent-1">What our customers say...</h2>
            <div class="row">
                <div class="col s12">
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle pink accent-1">person</i>
                            <h6 class="pink-text text-accent-1 bold-text">Ryan Kingfisher</h6>
                            <i><p class="grey-text ">"In life there will be road blocks but we will over come it. Hammock talk come soon. Let's see what chef Dee got that they don't want us to eat "</p></i> 
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle pink accent-1">person</i>
                            <h6 class="pink-text text-accent-1 bold-text">Jessica Ulman</h6>
                            <i><p class="grey-text ">"In life there will be road blocks but we will over come it. Hammock talk come soon. Let's see what chef Dee got that they don't want us to eat "</p></i> 
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle pink accent-1">person</i>
                            <h6 class="pink-text text-accent-1 bold-text">Olubenga Taiwo</h6>
                            <i><p class="grey-text ">"In life there will be road blocks but we will over come it. Hammock talk come soon. Let's see what chef Dee got that they don't want us to eat "</p></i> 
                        </li>
                    </ul>
                    <a href="review_form.php" class="btn btn-large btn-flat pink accent-1 left yellow-text text-lighten-4">Leave a review</a>
                    <a href="" class="btn btn-large btn-flat pink accent-1 right yellow-text text-lighten-4">More reviews</a>
                </div>
            </div>
        </div>
    </main>
    
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
        $('.carousel').carousel();
        $('.slider').slider();
        });
    </script>

<?php 
    include("./templates/footer.php");
?>

</body>
</html>