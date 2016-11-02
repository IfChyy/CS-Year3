<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/10/2016
 * Time: 22:26
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>All Movies</title>
    </head>

    <body>
        <p>ajskflakldsklfas;df</p>
        <?php
        //Including the database for further usage
        include("DBCONNECT.php");

        //The SQL query to show all movies
        $sql = "SELECT * FROM marvelmovies";

        //Collecting the result of the query
        $result = $db->query($sql);

        //Processing the result
        while($row = $result->fetch_array()){
            echo "$row[yearReleased] -- $row[title] -- $row[productionStudio] -- $row[notes]";
            echo "";
        }

        ?>

    </body>





</html>
