<?php
$brandtype=$_REQUEST["brandtype"];
$productname=$_REQUEST["productname"];
$ramrom=$_REQUEST["ramrom"];
$discount=$_REQUEST["camera"];
$battery=$_REQUEST["battery"];
$pcat=$_REQUEST["spec"];

/*
$itemimg=$_FILES["image"];

//echo($catimg["size"]);
//echo($catimg["type"]);
$img=$itemimg["name"];

//echo($catimg["tmp_name"]);

move_uploaded_file($itemimg["tmp_name"],".\\Upload\\$img");


*/


include("dbConnect.php");
mysql_query("INSERT INTO products ( brandtype, productname, ram-rom, camera, battery, spec) VALUES('$brandtype','$productname','$ramrom','$discount','$battery','$pcat');") or die(header("location:products-list.php"));

header("location:products-list.php");


?>