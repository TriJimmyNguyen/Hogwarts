<?php

require_once("constant.php");

require_once('function/loginout.php');

if(array_key_exists('logout', $_POST)){
    unset($_SESSION[USERNAME]);
    unset($_SESSION[PASSWORD]);
}


$top_view = TOP_VIEW_PATH;

$pageName = LOGIN_PAGE_NAME;
require("$top_view");

var_dump($_SESSION);
?>

<h2><?=$pageName?></h2>
<main id="login">
    <?php require_once('views/loginout_form.php'); ?>
</main>
<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>
