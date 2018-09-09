<?php
require_once("constant.php");
require_once("database/products.php");


$pageName = STORE_PAGE_NAME;

$top_view = TOP_VIEW_PATH;
require("$top_view");

?>

<main id="store">
    <h2><?= $pageName?></h2>

    <div>
        <h3>Wands</h3>
        <p><?= $wands['description']?></p>
    </div>

    <div>
        <h3>Brooms</h3>
        <p><?= $brooms['description']?></p>
    </div>

    <div>
        <h3>Books</h3>
        <p><?= $books['description']?></p>
    </div>
</main>

<!--<div>-->
<!---->
<!---->
<!--    --><?php //foreach($wands as $key => $value){?>
<!--        <img src="--><?php //if($key != 'description') { echo $value['imagePath'];}?><!--" alt="wand"/>-->
<!--    --><?php //}?>
<!---->
<!---->
<!--    --><?php //foreach($brooms as $key => $value){?>
<!--        <img src="--><?php //if($key != 'description') { echo $value['imagePath'];}?><!--" alt="wand"/>-->
<!--    --><?php //}?>
<!---->
<!--    --><?php //foreach($books as $key => $value){?>
<!--        <img src="--><?php //if($key != 'description') { echo $value['imagePath'];}?><!--" alt="wand"/>-->
<!--    --><?php //}?>
<!--</div>-->

<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>

