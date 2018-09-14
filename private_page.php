<?php

require_once("constant.php");
require_once("function/loginout.php");
require_once("database/users.php");
require_once("database/products.php");

if(!user_is_logged()) {
    header('Location:index.php');
}



if(array_key_exists('logout', $_POST)){
    unset($_SESSION[USERNAME]);
    header('Location:index.php');
}

$pageName = PRIVATE_PAGE_NAME;

$top_view = TOP_VIEW_PATH;
require("$top_view");

?>

<h2><?=$pageName?></h2>
<main id="private_page">
    <h3>Hi <span class="username"><?=$_SESSION[USERNAME]?></span>, You are on your private page.</h3>
    <h4>List of courses</h4>
    <?php foreach($users[$_SESSION[USERNAME]]['courses'] as $key => $value) {?>
       <p><?= $value?>
    <?php }?>
    <h4>Items in your magical shopping cart</h4>
    <?php if(array_key_exists('cart', $_SESSION)){?>
        <?php foreach($_SESSION['cart'] as $key => $value){?>
            <p><?= $value . " " . $key?></p>
        <?php }?>
    <?php }?>
    <?php
        if(array_key_exists('cart', $_SESSION)) {
            $totalPriceCart = TOTAL_INITIAL;
            foreach($_SESSION['cart'] as $key => $value){
                foreach($wands as $wandName => $details) {
                    if ($wandName != 'description' &&$key == $details['name']) {
                        $totalPriceCart += $details['price'] * $value;
                    }
                }
                foreach($brooms as $broomName => $details){
                    if($broomName != 'description' && $key == $details['name']){
                        $totalPriceCart += $details['price'] * $value;
                    }
                }
                foreach($books as $bookName => $details){
                    if($bookName != 'description' && $key == $details['name']){
                        $totalPriceCart += $details['price'] * $value;
                    }
                }
            }

            if ($totalPriceCart > TOTAL_INITIAL) {
                echo "<p>Total Price: " . $totalPriceCart . " Gold Coins</p>";
            }

        }

    ?>
    <h4>Stuff you have to buy</h4>
    <?php
        $wandPresentOrNot = false;
        if(array_key_exists('cart', $_SESSION)) {
            foreach ($wands as $wandName => $details) {
                if($wandName != 'description'){
                    foreach($_SESSION['cart'] as $key => $value){
                        if(strcmp($details['name'], $key) === 0){
                            $wandPresentOrNot = true;
                        }
                    }
                }
            }
        }

        if(!$wandPresentOrNot == true) {
            echo "<p>Wand </p>";
        }

        $allBookPresent = true;

        $coursesList = ($users[$_SESSION[USERNAME]]['courses']);
        $numberOfCourses = count($coursesList);

        if(array_key_exists('cart', $_SESSION)) {

            for ($i = 0; $i < $numberOfCourses; $i++) {

                if (!array_key_exists('Book for ' . $coursesList[$i], $_SESSION['cart'])) {
                    echo "<p>" . 'Book for ' . $coursesList[$i] . "</p>";
                    $allBookPresent = false;
                }
            }
        }
        else{
            for ($i = 0; $i < $numberOfCourses; $i++){
                echo "<p>" . 'Book for ' . $coursesList[$i] . "</p>";
            }
        }

        $FlyingCoursePresentOrNot = false;

        for($i = 0; $i < $numberOfCourses; $i++){
            if($coursesList[$i] ==  'Flying'){
                $FlyingCoursePresentOrNot = true;
            }
        }

        $broomPresentOrNot = false;

        if(array_key_exists('cart', $_SESSION)) {

            $arraySession = array_keys($_SESSION['cart']);
            $arraySize = count($arraySession);

            if ($FlyingCoursePresentOrNot) {
                for ($i = 0; $i < $arraySize; $i++) {
                    if (strpos($arraySession[$i], 'Broom') === STRING_BROOM_POSITION) {
                        $broomPresentOrNot = true;
                    }
                }
            }

            if ($FlyingCoursePresentOrNot && !$broomPresentOrNot) {
                echo "<p>Broom </p>";
            }
        }
        else {
            echo "<p>Broom </p>";

        }

        if(array_key_exists('cart', $_SESSION)) {
            if ($wandPresentOrNot && $allBookPresent && (!$FlyingCoursePresentOrNot || $broomPresentOrNot)) {
                echo "<p>Success you bought everything you need</p>";
            }
        }


    ?>



</main>

<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>
