<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 5.11.2016 г.
 * Time: 18:37
 */



include("DBCONNECT.php");

$forename = $_POST["forename"];
$surname = $_POST["surname"];
$superheropower = $_POST["superheropower"];

$sql = "INSERT INTO superheros (, firstname, lastname, mainSuperpower)
 VALUES (,'$forename', '$surname', '$superheropower')";

if(mysqli_query($db, $sql)){

}else{
    echo "Error" . $sql . "<br>" . mysqli_error($db);
}
header("location:showsuperheroes.php");
?>