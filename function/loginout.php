<?php
/**
 * Assure la fonctionalité de login/logout.
 *
 */

require_once('_authenticate.php');


define('SESS_USERNAME', 'sess_username');


define('USERNAME', 'username');
define('PASSWORD', 'password');

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(array_key_exists(USERNAME, $_POST) && array_key_exists(PASSWORD, $_POST)){
    if(authenticate($_POST[USERNAME], $_POST[PASSWORD])){
        $_SESSION[USERNAME] = $_POST[USERNAME];
        $_SESSION[PASSWORD] = $_POST[PASSWORD];
    }
}


function user_is_logged() {
    $isLogged = false;

    if(array_key_exists(USERNAME, $_SESSION)){
        $isLogged = true;
    }
    return $isLogged;
}


?>