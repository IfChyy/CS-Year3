<?php

include("DBCONNECT.php");

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parentnode = $dom->appendChild($node);


$query = "SELECT * FROM markers";
$result = $db->query($query);
if (!$result) {
    die('Nothing in result: ');
}

header("Content-type: text/xml");

while ($row = $result->fetch_array()){
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
    $newnode->setAttribute("type", $row['type']);
}

echo $dom->saveXML();

?>

