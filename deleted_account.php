<?php
session_start();
session_unset();
session_destroy();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/materialize.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Chic Charms</title>
    </head>

<style>
    .playwrite-de-grund-font {
        font-family: "Playwrite DE Grund", cursive;
        font-optical-sizing: auto;
        font-weight: 100;
        font-style: normal;
    }
    .blush-pink{
        background-color: #ff4d88 !important;
    }

    .blush-pink-text{
        color: #ff4d88 !important;
    }

    .creamy-white{
    background-color: #fdf3e7 !important;
    }

    .creamy-white-text{
        color: #fdf3e7 !important;
    }

    .bold-text{
        font-weight: bold;
    }

</style>

<body class="creamy-white playwrite-de-grund-font bold-text">
    <main>
        <br> <br> <br> <br> <br>
        <h1 class="center blush-pink-text">You have successfully deleted your account!</h1>
        <br> <br>
        <div class="center">
            <a href="index.php" class="btn btn-large btn-flat blush-pink creamy-white-text"><i class="material-icons">home</i> Back to home</a>
            <a href="./sign-up.php" class="btn btn-large btn-flat blush-pink creamy-white-text">Sign Up</a>
        </div>
    </main>
</body>
</html>