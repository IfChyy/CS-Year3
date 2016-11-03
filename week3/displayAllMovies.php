<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 3.11.2016 г.
 * Time: 17:56
 */
include("DBCONNECT.php");

$sql_query = "Select * from marvelmovies";

$result = $db->query($sql_query);

while($row = $result->fetch_array()){
    echo "<p> -- $row[title] -- </p>";
}

?>