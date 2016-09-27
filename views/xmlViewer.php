<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/functions.js"></script>
</head>
<body>
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

	foreach ($doc->T as $nation) {
    	$nation->N_NAME = ucfirst(strtolower($nation->N_NAME));
	}

	$denmarkList = getNationDocAsList($doc);

	echo($nationList . "<hr>" . $denmarkList);
?>
</body>
</html>