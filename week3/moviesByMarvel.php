<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 3.11.2016 г.
 * Time: 18:46
 */

include("DBCONNECT.php");

$sql_query = "SELECT * FROM marvelmovies WHERE productionStudios LIKE %Marvel Studios%";

$result = $db->query($sql_query);

while($row = $result->fetch_array()){
echo "<p>  $row[yearReleased] , $row[title], $row[productionStudio]  </p>";
}
?>