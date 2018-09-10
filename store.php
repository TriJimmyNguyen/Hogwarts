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
        <?php foreach($wands as $wandName => $details) {?>
            <?php if($wandName != 'description') {?>
                <h4><?= $details['name'];?></h4>
                <p>Woodtype: <?= $details['woodType']?></p>
                <p>Description: <?= $details['description']?></p>
                <p>Price: <?= $details['price']?> $</p>
                <img src="<?=$details['imagePath']?>" alt="<?=$details['name']?>"/>
            <?php }?>
        <?php }?>
    </div>

    <div>
        <h3>Brooms</h3>
        <p><?= $brooms['description']?></p>
        <?php foreach($brooms as $broomName => $details) {?>
            <?php if($broomName != 'description'){?>
                <h4><?= $details['name']?></h4>
                <p>Description: <?= $details['description']?></p>
                <p>Price: <?= $details['price']?> $</p>
                <img src="<?=$details['imagePath']?>" alt="<?=$details['name']?>"/>
            <?php }?>
        <?php }?>
    </div>

    <div>
        <h3>Books</h3>
        <p><?= $books['description']?></p>
        <?php foreach($books as $bookName => $details) {?>
            <?php if($bookName != 'description'){?>
                <h4><?= $details['name']?></h4>
                <p>Course: <?= $details['course']?></p>
                <p>Description: <?= $details['description']?></p>
                <p>Price: <?= $details['price']?></p>
                <img src="<?= $details['imagePath']?>" alt="<?= $details['name']?>"/>
            <?php }?>
        <?php }?>
    </div>
</main>


<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>

