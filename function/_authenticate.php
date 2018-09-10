<?php
///**
// * Created by PhpStorm.
// * User: tnguyen
// * Date: 06/09/2018
// * Time: 10:24 AM
// */
//
//
//function authenticate($usernameEntered, $passwordEntered){
//    $userArray = array('alice', 'bob');
//    $passwordArray = array('abc123', 'abc123');
//    $isValid = false;
//
//    foreach ($userArray as $indexOfUserArray=> $user)
//    {
//        if($usernameEntered == $user)
//        {
//           foreach($passwordArray as $indexOfPasswordArray => $password)
//           {
//               if($passwordEntered == $password){
//                   $isValid = true;
//               }
//           }
//        }
//    }
//
//    return $isValid;
//}
//
////pour tester
////echo authenticate('alice', 'abc123');
//
//?>

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
