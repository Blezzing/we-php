<?php
require "../controllers/xmlController.php";

function getNationDocAsList($doc){
    $list = "<ul>";
    foreach ($doc->T as $nation) {
        $list .= "<li>";
        $list .= $nation->N_NAME;
        $list .= "</li>";
    }
    $list .= "</ul>";
    return $list;
}

$doc = XMLController::getNationDoc();

$nationList = getNationDocAsList($doc);

$denmarkList = getNationDocAsList($doc);

echo($nationList . "<hr>" . $denmarkList);
?>