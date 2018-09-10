<?php

require_once("constant.php");

require_once('function/loginout.php');

if(array_key_exists('logout', $_POST)){
    unset($_SESSION[USERNAME]);
}


$top_view = TOP_VIEW_PATH;

$pageName = LOGIN_PAGE_NAME;
require("$top_view");
?>

<h2><?=$pageName?></h2>
<?php require_once('views/loginout_form.php'); ?>

<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>
