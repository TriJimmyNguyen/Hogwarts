<?php

require_once("constant.php");
require_once("function/loginout.php");

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
<header>
    <h3>Hi <span class="username"><?=$_SESSION[USERNAME]?></span>, You are on your private page.</h3>
</header>

<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>
