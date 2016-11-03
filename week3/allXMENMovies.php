<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 3.11.2016 г.
 * Time: 20:59
 */

include("DBCONNECT.php");

$sql_query = "SELECT * FROM marvelmovies WHERE title LIKE '%X-Men%'";

$result = $db->query($sql_query);

while($row = $result->fetch_array()){
    echo "<p> $row[title], $row[productionStudio]</p>";
}