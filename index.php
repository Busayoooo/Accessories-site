<?php 

include("./templates/header.php");

?>

    <style>
        .section{
            border: solid;
            border-left: 15px;
            border-color: #ff80ab;
            border-right: 15px;
        }

        main div{
            margin-top: 15px;
        }
    </style>

    <main>
        <div class="row">
            <div class="col l3 section">
                <h1 class="center"> Categories </h1>
            </div>
            <div class="col l8 push-l1">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="/img/blue-bracelet-2.jpeg" alt="blue bracelet" class="responsive-img">
                        </li>
                        <li>
                            <img src="/img/multicolor-bracelet-2.jpg" alt="" class="responsive-img">
                        </li>
                        <li>
                            <img src="/img/pink-bracelet.jpg" alt="" class="responsive-img">
                        </li>
                        <li>
                            <img src="/img/blue-bracelet.webp" alt="" class="responsive-img">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>