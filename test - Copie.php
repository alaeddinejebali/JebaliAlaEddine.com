<?php
	//Content to be included
	$fileContent = "404.php";
	//Get requested URI
	$requestedUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	echo "-" . $requestedUri . "-";
	switch ($requestedUri) {
		case '/':
			$fileContent = "personal/index.php";
			break;
		case '/index':
			$fileContent = "personal/index.php";
			break;
		case '/index.html':
			$fileContent = "personal/index.php";
			break;
		case '/index.php':
			$fileContent = "personal/index.php";
			break;

		
		default:
			# code...
			break;
	}
?>


<?php

	include "/content/".$fileContent;
?>