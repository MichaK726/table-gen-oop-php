<?php 
include("src/Html/Table/Table.php");
include("src/Html/Table/Thead.php");

$Thead = new Thead();

$winkelwagenTabel = new Table($Thead);
$winkelwagenTabel->draw();

?>