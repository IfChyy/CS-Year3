<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 24.10.2016 г.
 * Time: 16:09
 */

$userame = $_POST["name"];
$password = $_POST["password"];

if($userame == "username" && $password == "password"){
    setcoockie('access_level_cookie', 'standartuser');
}

header('Location: loggedIn.php');

?>

