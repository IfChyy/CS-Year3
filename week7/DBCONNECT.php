<?php
$db = new mysqli(
    'eu-cdbr-azure-west-a.cloudapp.net',
    'b6e9aa1b391bb0',
    '42f2d8ac',
    'ijos_database'
);

if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}

?>

