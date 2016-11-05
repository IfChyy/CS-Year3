<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 5.11.2016 г.
 * Time: 18:44
 */
include("DBCONNECT.php");

$sql_querry = "SELECT * FROM superheros";

$result = $db->query($sql_querry);

while($row = $result->fetch_array()){
    echo "<p> $row[superheroID], $row[firstname], $row[lastname], $row[mainSuperpower] </p>";
};

?>