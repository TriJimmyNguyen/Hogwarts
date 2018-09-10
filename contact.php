<?php

require_once("constant.php");

$top_view = TOP_VIEW_PATH;

$pageName = CONTACT_PAGE_NAME;
require("$top_view");

$email="";
$username="";

if(array_key_exists('username',$_POST))
{
    $username=$_POST['username'];
}

if(array_key_exists('email',$_POST))
{
    $email=$_POST['email'];
}

?>

<h2><?= $pageName?></h2>
<form method="post" action="<?= $_SERVER['PHP_SELF']?>">
    <form id="formulaire_inscription" method="post">
        <div>
            <label for="email">Courriel: </label>
            <input type="text" id ="email" name="email" value ="<?= $email?>"/>
        </div>
        <div>
            <label for="username">Pseudo:</label>
            <input type="text" id="username" name="username" value="<?= $username?>"/>
        </div>
        <div>
            <label for="password">Mot de passe: </label>
            <input type="password" id="password" name="password" value=""/>
        </div>
        <div>
            <input type="submit" value="s'incrire"/>
        </div>
    </form>
</form>

<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>
