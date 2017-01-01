<?php
//Comes from login form
if (!empty($_POST)){
	if( ('jebali.alaeddine@gmail.com'==$_POST['email']) && ('orange@2016'==$_POST['password']) ){
		$_SESSION["login.loggedUser"] = "Ala Eddine JEBALI";
		header("Location: /");
	}else{
		$_SESSION["login.error"] = "true";
		//header("Location: /admin");
	}
}
	$language = "en";	
	$activeLanguages = array('en' => 'activeLanguage', 'fr' => '');
	$formattedUrl = "";
	$headerTitle = "Ala Eddine JEBALI";
	$headerSubTitle = "Software Engineer / Programmer";
	$headerIcon = "iconfa-star";
	//Content to be included
	$fileContent = "content/".$language."/404.php";
	//Get requested URI
	$requestedUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri = $requestedUri;
	//Prepare current page (menu item) to be marked with a different color
    $currentActivePage = array(
        'designPatterns'  =>  '',
        'frontEnd'  =>  '',
        'java'  =>  '',
        'oop'  =>  '',
    	'others'  =>  '',
        'php'  =>  '',
        'rubypython'  =>  '',
        'web'  =>  '',
        'xml'  =>  ''
    );
/*
	if($extractUri){
		$uri = substr($requestedUri , 3, strlen($requestedUri));
	}
	echo $uri; exit();
*/
	if(empty($_SESSION['login.loggedUser'])){
		$uri = 'login';
	}
	//echo "<div style='background-color: #eee; font-size: 28px; color: #090; position: absolute; z-index: 99999; width: 100%;'>*" . $uri . "*</div>";
	//get content to be included
	switch ($uri) {
		case(''==$uri || '/'==$uri ):
			$fileContent = 'home.php';
			$formattedUrl = "";
            $currentActivePage['home'] = 'current';
            $headerIcon = "iconfa-home";
			if($language == "en"){
				$headerTitle = "Hello";
				$headerSubTitle = "Welcome to my personal website!";
			}else{
				$headerTitle = "Bonjour";
				$headerSubTitle = "Bienvenu sur mon site perso!";
			}
			break;

        case('login'==$uri):
            $fileContent = "login.php";
            $formattedUrl = "login";
            $currentActivePage['login'] = 'current';
            $headerIcon = "iconfa-unlock";
            $headerTitle = "Login";
            $headerSubTitle = "Signup to access Admin area";
            break;

        case('/logout'==$uri):
            session_destroy();
            header("Location: /");
            break;
			
		case('/web/tips-web'==$uri):
			$fileContent = "content/en/wiki/web/tips-web/index.php";
			$formattedUrl = "tips-web";
            $currentActivePage['web'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "Tips and Tricks Web";
			$headerSubTitle = "Useful web development info";
			break;
			
		case('/xml'==$uri):
			$fileContent = "content/en/wiki/xml/index.php";
			$formattedUrl = "xml";
            $currentActivePage['xml'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "XML wiki";
			$headerSubTitle = "Useful xml development info";
			break;
			
		case('/oop'==$uri):
			$fileContent = "content/en/wiki/oop/index.php";
			$formattedUrl = "oop";
            $currentActivePage['oop'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "OOP wiki";
			$headerSubTitle = "Object Oriented Programming";
			break;
			
		case('/designpatterns'==$uri):
			$fileContent = "content/en/wiki/designpatterns/index.php";
			$formattedUrl = "designpatterns";
            $currentActivePage['designPatterns'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "Design patterns wiki";
			$headerSubTitle = "Most kown Design patterns";
			break;
			
		case('/frontend/electron'==$uri):
			$fileContent = "content/en/wiki/frontend/electron/index.php";
			$formattedUrl = "electron";
            $currentActivePage['frontEnd'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "Electron";
			$headerSubTitle = "Useful Electron development info";
			break;
			
		case('/frontend/javascript'==$uri):
			$fileContent = "content/en/wiki/frontend/javascript/index.php";
			$formattedUrl = "javascript";
            $currentActivePage['frontEnd'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "JavaScript";
			$headerSubTitle = "Useful web development info";
			break;
			
		case('/frontend/nodejs'==$uri):
			$fileContent = "content/en/wiki/frontend/nodejs/index.php";
			$formattedUrl = "nodejs";
            $currentActivePage['frontEnd'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "NodeJS";
			$headerSubTitle = "Useful NodeJS development info";
			break;
			
		case('/web/firefox-addons'==$uri):
			$fileContent = "content/en/wiki/web/firefox-addons/index.php";
			$formattedUrl = "firefox-addons";
            $currentActivePage['web'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "Firefox addons";
			$headerSubTitle = "How to develop firefox-addons";
			break;

		case('/frontend/angularjs1'==$uri):
			$fileContent = "content/en/wiki/frontend/angularjs1/index.php";
			$formattedUrl = "angularJS";
			$currentActivePage['frontEnd'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "angularJS";
			$headerSubTitle = "Welcome to angularJS";
			break;

		case('/frontend/angularjs2'==$uri):
			$fileContent = "content/en/wiki/frontend/angularjs2/index.php";
			$formattedUrl = "angularJS";
			$currentActivePage['frontEnd'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "angularJS";
			$headerSubTitle = "Welcome to angularJS";
			break;

		case('/frontend/typescript'==$uri):
			$fileContent = "content/en/wiki/frontend/typescript/index.php";
			$formattedUrl = "typescript";
			$currentActivePage['frontEnd'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "TypeScript";
			$headerSubTitle = "Welcome to TypeScript";
			break;

		case('/frontend/webpack'==$uri):
			$fileContent = "content/en/wiki/frontend/webpack/index.php";
			$formattedUrl = "webpack";
			$currentActivePage['frontEnd'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "Webpack";
			$headerSubTitle = "Welcome to Webpack";
			break;
			
		case('/divers/git'==$uri):
			$fileContent = "content/en/wiki/divers/git/index.php";
			$formattedUrl = "git";
            $currentActivePage['others'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "GIT";
			$headerSubTitle = "GIT wiki";
			break;
			
		case('/divers/go'==$uri):
			$fileContent = "content/en/wiki/divers/go/index.php";
			$formattedUrl = "go";
            $currentActivePage['others'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "GO";
			$headerSubTitle = "GO wiki";
			break;

		case('/divers/eclipse'==$uri):
			$fileContent = "content/en/wiki/divers/eclipse/index.php";
			$formattedUrl = "eclipse";
            $currentActivePage['others'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "Eclipse";
			$headerSubTitle = "Eclipse wiki";
			break;

		case('/divers/linux'==$uri):
			$fileContent = "content/en/wiki/divers/linux/index.php";
			$formattedUrl = "ide";
            $currentActivePage['others'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "Linux";
			$headerSubTitle = "Linux wiki";
			break;

		case('/divers/docker'==$uri):
			$fileContent = "content/en/wiki/divers/docker/index.php";
			$formattedUrl = "ide";
            $currentActivePage['others'] = 'current';
            $headerIcon = "iconfa-heart";
			$headerTitle = "Docker";
			$headerSubTitle = "Docker wiki";
			break;

		case('/php/php5'==$uri):
			$fileContent = "content/en/wiki/php/php5/index.php";
			$formattedUrl = "php5";
			$currentActivePage['php'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "PHP";
			$headerSubTitle = "PHP wiki";
			break;

		case('/php/symfony'==$uri):
			$fileContent = "content/en/wiki/php/symfony/index.php";
			$formattedUrl = "Symfony";
			$currentActivePage['php'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "Symfony";
			$headerSubTitle = "Symfony wiki";
			break;

		case('/rubypython/python'==$uri):
			$fileContent = "content/en/wiki/rubypython/python/index.php";
			$formattedUrl = "Python";
			$currentActivePage['rubypython'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "Python";
			$headerSubTitle = "Python wiki";
			break;

		case('/rubypython/ruby'==$uri):
			$fileContent = "content/en/wiki/rubypython/ruby/index.php";
			$formattedUrl = "ruby";
			$currentActivePage['rubypython'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "Ruby";
			$headerSubTitle = "Ruby wiki";
			break;

		case('/rubypython/rails'==$uri):
			$fileContent = "content/en/wiki/rubypython/rails/index.php";
			$formattedUrl = "rails";
			$currentActivePage['rubypython'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "Ruby On Rails";
			$headerSubTitle = "Ruby On Rails wiki";
			break;

		case('/java/javacore'==$uri):
			$fileContent = "content/en/wiki/java/javacore/index.php";
			$formattedUrl = "Java-Core";
			$currentActivePage['java'] = 'current';
			$headerIcon = "iconfa-heart";
			$headerTitle = "Java/J2EE";
			$headerSubTitle = "Java/J2EE wiki";
			break;
		
		default:
			$fileContent = 'content/' . $language . '/404.php';
			$formattedUrl = "";
            $headerIcon = "iconfa-warning-sign";
			if($language == "en"){
				$headerTitle = "Oops";
				$headerSubTitle = "No page found!";
			}else{
				$headerTitle = "Oops";
				$headerSubTitle = "No page found!";
			}
			break;
	}
?>
