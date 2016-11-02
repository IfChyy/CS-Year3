<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 2.11.2016 г.
 * Time: 16:54
 */
?>

<html>

<body>

<?php
include("DBCONNECT.php");

//create sql querry
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%aser%'";
//execute SQL querry
$result = $db->query($sql_query);

//iterate over result and fetche array
while($row = $result->fetch_array()){
    //proccess the roll
    echo '<p>'.$row['superheroName'].'</p>';
}

/*$result->close();
//close connection to the database
$db->close();*/

?>
</body>


</html>


