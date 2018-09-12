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

require_once("function/loginout.php");

if( ! array_key_exists('cart',$_SESSION)){
    $_SESSION['cart'] = array();
}

$cart =& $_SESSION['cart'];

if(array_key_exists('action', $_POST) && array_key_exists('wandName', $_POST)){

    if(array_key_exists($_POST['wandName'], $cart)){
        if($_POST['action'] == '+'){
            $cart[$_POST['wandName']]++;
        }
        else if($_POST['action'] == '-' && $cart[$_POST['wandName']] > 0){
            $cart[$_POST['wandName']]--;
        }
    }
    else if($_POST['action'] == '+'){

        $cart[$_POST['wandName']] = 1;
    }
}

if(array_key_exists('action', $_POST) && array_key_exists('broomName', $_POST)){

    if(array_key_exists($_POST['broomName'], $cart)){
        if($_POST['action'] == '+'){
            $cart[$_POST['broomName']]++;
        }
        else if($_POST['action'] == '-' && $cart[$_POST['broomName']] > 0){
            $cart[$_POST['broomName']]--;
        }
    }
    else if($_POST['action'] == '+'){

        $cart[$_POST['broomName']] = 1;
    }
}

if(array_key_exists('action', $_POST) && array_key_exists('bookName', $_POST)){

    if(array_key_exists($_POST['bookName'], $cart)){
        if($_POST['action'] == '+'){
            $cart[$_POST['bookName']]++;
        }
        else if($_POST['action'] == '-' && $cart[$_POST['bookName']] > 0){
            $cart[$_POST['bookName']]--;
        }
    }
    else if($_POST['action'] == '+'){

        $cart[$_POST['bookName']] = 1;
    }
}

var_dump($_POST);
var_dump($_SESSION);

?>

<main id="store">
    <h2><?= $pageName?></h2>
    <h3>Search</h3>
    <div id="search">
        <p id="searchTitle">Select what kind of items you wish to view</p>
        <form method="get" action="<?= $_SERVER['PHP_SELF']?>">
            <p>
                <input type="checkbox" name="wands" value="wands"
                    <?php
                         if(array_key_exists('wands', $_COOKIE) && $_COOKIE['wands'] == 'view_yes'){
                             echo CHECKED_ATTR;
                         }
                     ?>
                />wands<br>
            </p>
            <p>
                    <input type="checkbox" name="brooms" value="brooms"
                        <?php
                            if(array_key_exists('brooms', $_COOKIE) && $_COOKIE['brooms'] == 'view_yes'){
                                echo CHECKED_ATTR;
                           }
                        ?>
                    />brooms<br>
            </p>
            <p>
                <input type="checkbox" name="books" value="books"
                    <?php
                        if(array_key_exists('books', $_COOKIE) && $_COOKIE['books'] == 'view_yes'){
                            echo CHECKED_ATTR;
                        }
                    ?>
                />books<br>
            </p>

            <input type="submit" name="submitSearch"  value="view"/>
        </form>
    </div>

    <?php if(array_key_exists('wands', $_COOKIE) && $_COOKIE['wands'] == 'view_yes'){ ?>
        <div id="wands">
            <h3>Wands</h3>
            <p><?= $wands['description']?></p>
            <?php foreach($wands as $wandName => $details) {?>
                <?php if($wandName != 'description') {?>
                    <div class="wandProduct">
                        <h4><?= $details['name'];?></h4>
                        <p>Woodtype: <?= $details['woodType']?></p>
                        <p>Description:
                            <?php

                            if(str_word_count($details['description']) < LIMIT_WORDS_DESCRIPTION) {
                                echo $details['description'];
                            }
                            else{
                                $subarray = str_word_count($details['description'], 1);

                                for($i = 0; $i < LIMIT_WORDS_DESCRIPTION; $i++){
                                    echo $subarray["$i"] . " ";

                                }
                            }
                            ?>
                        </p>
                        <p>Price: <?= $details['price']?><img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>
                        <img src="<?=$details['imagePath']?>" alt="<?=$details['name']?>" class="productPicture"/>
                        <?php if(user_is_logged()){?>
                            <form method="post">
                                <input type="hidden" name="wandName" value="<?= $details['name']?>" />
                                <span class="btn-group">
                                    <button type="submit"  name="action" value="+">
                                        +
                                    </button>
                                    <button type="submit"  name="action" value="-">
                                       -
                                    </button>
                                </span>
                            </form>
                        <?php }?>
                    </div>
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
                    <div class="broomProduct">
                        <h4><?= $details['name']?></h4>
                        <p>Description:
                            <?php

                            if(str_word_count($details['description']) < LIMIT_WORDS_DESCRIPTION) {
                                echo $details['description'];
                            }
                            else{
                                $subarray = str_word_count($details['description'], 1);

                                for($i = 0; $i < LIMIT_WORDS_DESCRIPTION; $i++){
                                    echo $subarray["$i"] . " ";

                                }
                            }
                            ?>
                        </p>
                        <p>Price: <?= $details['price']?><img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>
                        <img src="<?=$details['imagePath']?>" alt="<?=$details['name']?>"  class="productPicture"/>
                        <?php if(user_is_logged()){?>
                            <form method="post">
                                <input type="hidden" name="broomName" value="<?= $details['name']?>" />
                                <span class="btn-group">
                                    <button type="submit"  name="action" value="+">
                                        +
                                    </button>
                                    <button type="submit"  name="action" value="-">
                                       -
                                    </button>
                                </span>
                            </form>
                        <?php }?>
                    </div>
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
                  <div class="bookProduct">
                        <h4><?= $details['name']?></h4>
                        <p>Course: <?= $details['course']?></p>
                        <p>Description:
                            <?php

                            if(str_word_count($details['description']) < LIMIT_WORDS_DESCRIPTION) {
                                echo $details['description'];
                            }
                            else{
                                $subarray = str_word_count($details['description'], 1);

                                for($i = 0; $i < LIMIT_WORDS_DESCRIPTION; $i++){
                                    echo $subarray["$i"] . " ";

                                }
                            }
                            ?>
                        </p>
                        <p>Price: <?= $details['price']?><img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>
                        <img src="<?= $details['imagePath']?>" alt="<?= $details['name']?>"  class="productPicture"/>
                        <?php if(user_is_logged()){?>
                            <form method="post">
                                <input type="hidden" name="bookName" value="<?= $details['name']?>" />
                                <span class="btn-group">
                                    <button type="submit"  name="action" value="+">
                                        +
                                    </button>
                                    <button type="submit"  name="action" value="-">
                                       -
                                    </button>
                                </span>
                            </form>
                        <?php }?>
                    </div>
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

