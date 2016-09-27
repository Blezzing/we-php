<!DOCTYPE html>
<html>
<head>
    <title>Xml print</title>
</head>
<body>
	<?php
	require "/controllers/xmlController.php";

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

	foreach ($doc->T as $nation) {
    	$nation->N_NAME = ucfirst(strtolower($nation->N_NAME));
	}

	$prettyList = getNationDocAsList($doc);

	echo($nationList . "<hr>" . $prettyList);
?>
</body>
</html>