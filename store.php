<?php
require_once("constant.php");
require_once("database/products.php");


$pageName = STORE_PAGE_NAME;

$top_view = TOP_VIEW_PATH;
require("$top_view");

define('ONE_DAY_IN_SEC', 24*60*60);

if(array_key_exists('submitSearch', $_GET)){
    header('Location:store.php');

    if( ! array_key_exists('wands', $_GET)){
        setcookie('wands', 'view_no', time() + ONE_DAY_IN_SEC);
    }

    if( ! array_key_exists('brooms', $_GET)){
        setcookie('brooms', 'view_no', time() + ONE_DAY_IN_SEC);
    }

    if( ! array_key_exists('books', $_GET)){
        setcookie('books', 'view_no', time() + ONE_DAY_IN_SEC);
    }
}


if(array_key_exists('wands', $_GET)){
    setcookie('wands', 'view_yes', time() + ONE_DAY_IN_SEC);
}

if(array_key_exists('brooms', $_GET)){
    setcookie('brooms', 'view_yes', time() + ONE_DAY_IN_SEC);
}

if(array_key_exists('books', $_GET)){
    setcookie('books', 'view_yes', time() + ONE_DAY_IN_SEC);
}

define('CHECKED_ATTR', 'checked="checked"');


?>

<main id="store">
    <h2><?= $pageName?></h2>
    <h3>Search</h3>
    <p>Select what kind of items you wish to view</p>
    <div id="search">
        <form method="get" action="<?= $_SERVER['PHP_SELF']?>">
            <input type="checkbox" name="wands" value="wands"
                <?php
                     if(array_key_exists('wands', $_COOKIE) && $_COOKIE['wands'] == 'view_yes'){
                         echo CHECKED_ATTR;
                     }
                 ?>
            />wands<br>

            <input type="checkbox" name="brooms" value="brooms"
                <?php
                    if(array_key_exists('brooms', $_COOKIE) && $_COOKIE['brooms'] == 'view_yes'){
                        echo CHECKED_ATTR;
                   }
                ?>/
            >brooms<br>

            <input type="checkbox" name="books" value="books"
                <?php
                    if(array_key_exists('books', $_COOKIE) && $_COOKIE['books'] == 'view_yes'){
                        echo CHECKED_ATTR;
                    }
                ?>
            />books<br>

            <input type="submit" name="submitSearch"  value="view"/>
        </form>
    </div>

    <?php if(array_key_exists('wands', $_COOKIE) && $_COOKIE['wands'] == 'view_yes'){ ?>
        <div id="wands">
            <h3>Wands</h3>
            <p><?= $wands['description']?></p>
            <?php foreach($wands as $wandName => $details) {?>
                <?php if($wandName != 'description') {?>
                    <h4><?= $details['name'];?></h4>
                    <p>Woodtype: <?= $details['woodType']?></p>
                    <p>Description: <?= $details['description']?></p>
                    <p>Price: <?= $details['price']?><img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>
                    <img src="<?=$details['imagePath']?>" alt="<?=$details['name']?>" class="productPicture"/>
                <?php }?>
            <?php }?>
        </div>
        <div class="seperator"></div>
    <?php }?>

    <?php if(array_key_exists('brooms', $_COOKIE) && $_COOKIE['brooms'] == 'view_yes'){ ?>
        <div id="brooms">
            <h3>Brooms</h3>
            <p><?= $brooms['description']?></p>
            <?php foreach($brooms as $broomName => $details) {?>
                <?php if($broomName != 'description'){?>
                    <h4><?= $details['name']?></h4>
                    <p>Description: <?= $details['description']?></p>
                    <p>Price: <?= $details['price']?><img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>
                    <img src="<?=$details['imagePath']?>" alt="<?=$details['name']?>"  class="productPicture"/>
                <?php }?>
            <?php }?>
            <div class="seperator"></div>
        </div>
    <?php } ?>

    <?php if(array_key_exists('books', $_COOKIE) && $_COOKIE['books'] == 'view_yes'){?>
        <div id="books">
            <h3>Books</h3>
            <p><?= $books['description']?></p>
            <?php foreach($books as $bookName => $details) {?>
                <?php if($bookName != 'description'){?>
                    <h4><?= $details['name']?></h4>
                    <p>Course: <?= $details['course']?></p>
                    <p>Description: <?= $details['description']?></p>
                    <p>Price: <?= $details['price']?><img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>
                    <img src="<?= $details['imagePath']?>" alt="<?= $details['name']?>"  class="productPicture"/>
                <?php }?>
            <?php }?>
            <div class="seperator"></div>
        </div>
    <?php }?>
</main>


<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>

