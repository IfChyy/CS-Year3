<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 3.11.2016 г.
 * Time: 19:53
 */

include("DBCONNECT.php");

$sql_query = "SELECT * FROM marvelmovies WHERE yearReleased > 2010";

$result = $db->query($sql_query);

while($row = $result->fetch_array()){
    echo "<p> $row[yearReleased], $row[title], </p>";
}

?>