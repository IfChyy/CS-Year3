<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 24.10.2016 г.
 * Time: 16:12
 */

session_start();
$accesslevel  = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accesslevel){

    if($accesslevel == "standartuser"){
        echo "<p style = \"backgroud-color: lightgreen\">You are currently
    logged in as a standart user</p>";

    }elseif ($accesslevel == "root"){
        echo "<p style = \"backgroud-color: red\">You are currently
    logged in as a root user</p>";
        echo "<p style = \"backgroud-color: red\">You now have access
    to additional administrative features</p>";
    }


}
?>