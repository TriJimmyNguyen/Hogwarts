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
    <h4>Stuff you have to buy</h4>
    <?php
        $wandPresentOrNot = false;
        foreach($wands as $wandName => $details) {
            if($wandName != 'description'){
                foreach ($_SESSION['cart'] as $key => $value) {
                        if($details['name'] == $key && $value > 0){
                            $wandPresentOrNot = true;
                        }

                }
            }
        }


    ?>
    <?php
        if(!$wandPresentOrNot){
            echo"<p> a wand </p>";
        }
//    foreach($users[$_SESSION[USERNAME]]['courses'] as $courses){
//        foreach ($_SESSION['cart'] as $key => $value){
//             foreach($books as $bookName => $details){
//                 if($bookName != 'description'){
//                     if($key != $details['name'] && $courses == $details['course']){
//                         echo "<p>" . $details['name'] . "</p>";
//                     }
//                 }
//             }
//        }
//    }

    foreach($users[$_SESSION[USERNAME]]['courses'] as $courses) {
        $bookName = "";
        foreach ($books as $bookName => $details) {
            if ($bookName != 'description') {
                if ($details['course'] == $courses) {
                    $bookName = $details['name'];
                }
                else{
                    $bookName = "";
                }
                echo "book course";
                var_dump($details['course']);
                echo "courseName";
                var_dump($courses);
                echo "bookName";
                var_dump($bookName);
            }


        }

//        var_dump($courses);
//        var_dump($bookName);

//        $bookPresentOrNot = false;
//        foreach ($_SESSION['cart'] as $key => $value) {
//            if ($key == $bookName) {
//                $bookPresentOrNot = true;
//            }
//            echo"Key value";
//            var_dump($key);
//            echo"bookName";
//            var_dump($bookName);
//            echo"value of bookPresentOrNot";
//            var_dump($bookPresentOrNot);
//        }
//
//        if (!$bookPresentOrNot) {
//            echo "<p> $bookName </p>";
//        }
    }
    ?>
</main>

<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>
