<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 2.11.2016 г.
 * Time: 16:20
 */

define('DB_SERVER'. 'servername');
define('DB_USERNAME'. 'username');
define('DB_PASSWORD'. 'password');
define('DB_DATABASE'. 'database');

$db = mysql_connect(DB_SERVER,
    DB_USERNAME, DB2_PASSWORD,
    DB_DATABASE);

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