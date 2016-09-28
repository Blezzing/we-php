<?php
require "../controllers/xmlController.php";

$info = XMLController::getNationInfo($_GET["name"]);
echo($info);
?>