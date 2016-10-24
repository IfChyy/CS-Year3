<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 24.10.2016 г.
 * Time: 16:09
 */

$username = $_POST["name"];
$password = $_POST["password"];

if($username == "username" && $password == "password"){
    setcookie('access_level_cookie', 'standarduser');
}

header('Location: loggedIn.php');

?>

