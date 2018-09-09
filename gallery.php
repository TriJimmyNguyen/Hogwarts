<?php

$galleryPictures = array(
    'ballroom' => array(
        'imagePath' => "images/gallery_ballroom.jpg",
        'description' => "Ballroom",
  ),
    'classroom' => array(
        'imagePath' => "images/gallery_classroom.jpg",
        'description' => "Classroom",
    ),
    'forest' => array(
        'imagePath' => "images/gallery_forest.jpg",
        'description' => "Forest",
    ),
    'hall' => array(
        'imagePath' => "images/gallery_hall.png",
        'description' => "Great Hall",
    ),
    'Christmas Hall' => array(
        'imagePath' => "images/gallery_hall_christmas.jpg",
        'description' => "Great Hall Christmas",
    ),
    'Headmaster' => array(
        'imagePath' => "images/gallery_headmaster.jpg",
        'description' => "Headmaster's office",
    ),
    'library' => array(
        'imagePath' => "images/gallery_library.jpg",
        'description' => "Library",
    ),
    'quidditch' => array(
        'imagePath' => "images/gallery_quidditch.jpg",
        'description' => "Quidditch Field",
    ),
    'quidditch2' => array(
        'imagePath' => "images/gallery_quidditch_2.jpg",
        'description' => "Quidditch Field",
    ),
    'trainStation' => array(
        'imagePath' => "images/gallery_train_station.jpg",
        'description' => "Train Station",
    ),


);

require_once("constant.php");

$top_view = TOP_VIEW_PATH;

$pageName = GALLERY_PAGE_NAME;
require("$top_view");

?>

<h2><?= $pageName?></h2>
<main id="gallerie">
    <?php foreach($galleryPictures as $key => $value){?>
        <a href="#<?= $key . "_lightbox" ?>">
            <img src="<?= $value['imagePath']?>" alt="<?= $value['description']?>"/>
        </a>
        <a href="#<?=$key ?>" class="lightbox" id="<?= $key . "_lightbox" ?>">
            <img src="<?= $value['imagePath']?>" alt="<?= $value['description']?>"/>
        </a>
    <?php }?>
</main>

<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>

