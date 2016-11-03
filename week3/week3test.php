
<?php
include("DBCONNECT.php");

//create sql querry
$sql_query = "SELECT * FROM marvelmovies";
//execute SQL querry
$result = $db->query($sql_query);

//iterate over result and fetche array
while($row = $result->fetch_array()){
    //proccess the roll
    echo "<p> -- $row[title] -- </p>";
}

/*$result->close();
//close connection to the database
$db->close();*/

?>