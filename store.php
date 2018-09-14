<?php
require_once("constant.php");
require_once("database/products.php");
require_once("function/functions_for_store_page.php");
require_once("function/functions_for_search_menu_store.php");
require_once("function/loginout.php");

$pageName = STORE_PAGE_NAME;

$top_view = TOP_VIEW_PATH;
require("$top_view");

setCookieForSearchMenu();

if( ! array_key_exists('cart',$_SESSION)){
    $_SESSION['cart'] = array();
}


$cart =& $_SESSION['cart'];

addOrRemoveItem($cart, 'wandName');
addOrRemoveItem($cart, 'broomName');
addOrRemoveItem($cart, 'bookName');


foreach($_SESSION['cart'] as $key => $value){
    if($value == 0){
        unset($_SESSION['cart'][$key]);
    }
}


?>

<main id="store">
    <h2><?= $pageName?></h2>
    <?php
        require_once("views/search_menu_store.php");

        displayWands();
        displayBrooms();
        displayBooks();
    ?>

</main>


<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>

