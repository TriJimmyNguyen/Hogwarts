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
function authenticate($username, $password) {
    $users = array(
        'brice' => '202cb962ac59075b964b07152d234b70', // 123
        'hatem' => '250cf8b51c773f3f8dc8b4be867a9a02', // 456
        'tania' => '68053af2923e00204c3ca7c6a3150cf7', // 789
    );
    $result = array_key_exists($username, $users) && (md5($password) === $users[$username]);
    //var_dump(md5($password),$result);
    return $result;
}

?>
