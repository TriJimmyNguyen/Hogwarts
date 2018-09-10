<?php

require_once("function/loginout.php");

if(!user_is_logged()) {
    header('Location:index.php');
}

var_dump($_POST);

if(array_key_exists('logout', $_POST)){
    unset($_SESSION[USERNAME]);
    header('Location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Page privée</title>
</head>
<body>
<header>
    <h1>Bonjour <span class="username"></span>, vous êtes sur votre page privée.</h1>
    <?php require_once('views/loginout_form.php')?>
</header>
<main>

</main>
</body>
</html>

