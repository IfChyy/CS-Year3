<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 2.11.2016 г.
 * Time: 16:20
 */

define('DB_SERVER'. 'eu-cdbr-azure-west-a.cloudapp.net');
define('DB_USERNAME'. 'b6e9aa1b391bb0');
define('DB_PASSWORD'. '42f2d8ac');
define('DB_DATABASE'. 'ijos_database');

$db = mysql_connect(DB_SERVER,
    DB_USERNAME, DB2_PASSWORD,
    DB_DATABASE);

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



//create sql querry
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%aser%'";
//execute SQL querry
$result = $db->query($sql_query);

//iterate over result and fetche array
while($row = $result->fetch_array()){
    //proccess the roll
    echo '<p>'.$row['superheroName'].'</p>';
}

$result->close();
//close connection to the database
$db->close();
?>