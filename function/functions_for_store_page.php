<?php

require_once("database/products.php");

function addOrRemoveItem(&$cart, $productName){
    if(array_key_exists('action', $_POST) && array_key_exists($productName, $_POST)){

        if(array_key_exists($_POST[$productName], $cart)){
            if($_POST['action'] == '+'){
                $cart[$_POST[$productName]]++;

            }
            else if($_POST['action'] == '-' && $cart[$_POST[$productName]] > ZERO_QUANTITY){
                $cart[$_POST[$productName]]--;
            }
        }
        else if($_POST['action'] == '+'){

            $cart[$_POST[$productName]] = ONE_QUANTITY;
        }
    }
}

function displayAddRemove($name, $value){
    echo '<form method="post">';
    echo '<input type="hidden" name="' . $name .'" value="' . $value . '" />';
    echo '<span class="btn-group">';
    echo '<button type="submit"  name="action" value="+">
                                        +
                                    </button>';
    echo '<button type="submit"  name="action" value="-">
                                       -
                                    </button>';
    echo '</span>';
    echo '</form>';
}



function displayWands(){

    global $wands;

    if(array_key_exists('wands', $_COOKIE) && $_COOKIE['wands'] == 'view_yes'){
        echo '<div id="wands">';
            echo '<h3>Wands</h3>';
            echo '<p>' . $wands['description'] . '</p>';
            foreach($wands as $wandName => $details) {
                if($wandName != 'description') {
                    echo '<div class="wandProduct">';
                        echo '<h4>' .  $details['name'] .'</h4>';
                        echo '<p>Woodtype: ' . $details['woodType'] . '</p>';

                        $description = "";

                        if(str_word_count($details['description']) < LIMIT_WORDS_DESCRIPTION) {
                            $description = $details['description'];
                        }
                        else{
                            $subarray = str_word_count($details['description'], 1);

                            for($i = 0; $i < LIMIT_WORDS_DESCRIPTION; $i++){
                                $description = $description . $subarray["$i"] . " ";
                            }
                         }

                        echo '<p>Description:' . $description . '</p>';
                        echo '<p>Price:' . $details['price'] . '<img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>';
                        echo '<img src="' . $details['imagePath'] . '"' .  'alt="' . $details['name'] . '" class="productPicture"/>';
                        if(user_is_logged()){
                           displayAddRemove('wandName', $details['name']);
                        }
                    echo '</div>';
                }
            }
        echo '<div class="seperator"></div>';
        echo '</div>';
    }
}

function displayBrooms()
{
    global $brooms;

    if (array_key_exists('brooms', $_COOKIE) && $_COOKIE['brooms'] == 'view_yes') {
        echo '<div id="brooms">';
        echo '<h3>Brooms</h3>';
        echo '<p>' . $brooms['description'] . '</p>';
        foreach ($brooms as $broomName => $details) {
            if ($broomName != 'description') {
                echo '<div class="broomProduct">';
                echo '<h4>' . $details['name'] . '</h4>';

                $description = "";

                if (str_word_count($details['description']) < LIMIT_WORDS_DESCRIPTION) {
                    $description = $details['description'];
                } else {
                    $subarray = str_word_count($details['description'], 1);

                    for ($i = 0; $i < LIMIT_WORDS_DESCRIPTION; $i++) {
                        $description = $description . $subarray["$i"] . " ";
                    }
                }

                echo '<p>Description:' . $description . '</p>';
                echo '<p>Price:' . $details['price'] . '<img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>';
                echo '<img src="' . $details['imagePath'] . '"' . 'alt="' . $details['name'] . '" class="productPicture"/>';
                if (user_is_logged()) {
                    displayAddRemove('broomName', $details['name']);
                }
                echo '</div>';
            }
        }
        echo '<div class="seperator"></div>';
        echo '</div>';
    }
}

function displayBooks()
{
    global $books;

    if (array_key_exists('books', $_COOKIE) && $_COOKIE['books'] == 'view_yes') {
        echo '<div id="books">';
        echo '<h3>Books</h3>';
        echo '<p>' . $books['description'] . '</p>';
        foreach ($books as $bookName => $details) {
            if ($bookName != 'description') {
                echo '<div class="bookProduct">';
                echo '<h4>' . $details['name'] . '</h4>';
                echo '<p>Course: ' . $details['course'] . '</p>';
                $description = "";

                if (str_word_count($details['description']) < LIMIT_WORDS_DESCRIPTION) {
                    $description = $details['description'];
                } else {
                    $subarray = str_word_count($details['description'], 1);

                    for ($i = 0; $i < LIMIT_WORDS_DESCRIPTION; $i++) {
                        $description = $description . $subarray["$i"] . " ";
                    }
                }

                echo '<p>Description:' . $description . '</p>';
                echo '<p>Price:' . $details['price'] . '<img src="images/gold_coin.jpg" alt="gold_coin.jpg"/></p>';
                echo '<img src="' . $details['imagePath'] . '"' . 'alt="' . $details['name'] . '" class="productPicture"/>';
                if (user_is_logged()) {
                    displayAddRemove('bookName', $details['name']);
                }
                echo '</div>';
            }
        }
        echo '<div class="seperator"></div>';
        echo '</div>';
    }
}


?>