<?php

require_once("constant.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title><?=SITE_NAME?></title>
        <link rel="stylesheet" href="style/main.css"/>
        <link rel="icon" href="images/HogwartsEmblem.png"/>
    </head>
    <body>
    <div class="wrapper">
        <header>
            <div>
                <h1>Hogwarts</h1>
                <img src="images/HogwartsCastle_banner.jpg" alt="hogwarts_castle_banner"/>
                <link href="https://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
                <?php require("views/menu.php"); ?>
            </div>
        </header>

