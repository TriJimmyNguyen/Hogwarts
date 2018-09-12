<!--
    Cette page a ete pris des demonstrations du cours de PHP
-->

<?php
/**
 * Authentifie l'utilisateur à partir de son username et de son password
 * Retourne true si authentifié, false sinon
 * Utilise un encryptage minimal : le MD5
 * @param $username
 * @param $password
 * @return bool
 */

require_once("database/users.php");

function authenticate($username, $password) {
    global $users;
    $result = array_key_exists($username, $users) && (md5($password) === $users[$username]['password']);
    //var_dump(md5($password),$result);
    return $result;
}

?>
