<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <script src="js/main.js"></script>

    <title>Document
    
    <?php
    if(empty($title)) {
        echo "Min sida!";
    } else 
    echo $title;

    ?>
    
    </title>

</head>

<body>

<h1>Välkommen till min PHP-sida!</h1>
<a href="index.php">Start</a> | <a href="about.php">Om oss</a> | <a href="login.php">Logga in</a>
<hr />