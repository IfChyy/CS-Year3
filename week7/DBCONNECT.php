<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 5.11.2016 г.
 * Time: 18:25
 */
$db = new mysqli(
    'eu-cdbr-azure-west-a.cloudapp.net',
    'b6e9aa1b391bb0',
    '42f2d8ac',
    'ijos_database'
);
//test to see if connection is established
if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}

?>

