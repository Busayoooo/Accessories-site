<?php 

include("./templates/header.php");

?>

    <style>
        main div div.l11{
            margin-top: 30px;
        }

        main div div.l1{
            margin-top: 20px;
        }
    </style>

    <main>
        <div class="row container">
            <div class="col l1 pull-l1">
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
            </div>
            <div class="col l11 push-l1 ">
                <div class="carousel carousel-slider">
                    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
                    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
                    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
                    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
                    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
                    <a class="carousel-item" href="#six!"><img src="https://lorempixel.com/250/250/nature/6"></a>
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
</body>
</html>