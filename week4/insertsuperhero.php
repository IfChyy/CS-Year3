<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 5.11.2016 г.
 * Time: 18:37
 */



include("DBCONNECT.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$mainSuperpower = $_POST["mainSuperpower"];

$sql = "INSERT INTO superheros (firstname, lastname, mainSuperpower)
 VALUES ('$firstname', '$lastname', '$mainSuperpower')";

if(mysqli_query($db, $sql)){

}else{
    echo "Error" . $sql . "<br>" . mysqli_error($db);
}
header("location:showsuperheroes.php");
?>