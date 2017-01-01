<?php
	session_start();
	include_once "settings.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?= $headerTitle ?></title>
		<link rel="stylesheet" href="/assets/css/style.default.css" type="text/css" />
		<link rel="stylesheet" href="/assets/css/highlight.min.css" type="text/css" />
		<link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
	</head>
	<body class="homebody">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-30221149-1', 'auto');
  ga('send', 'pageview');

</script>
		<div class="mainwrapper">
			<?php include_once "content/".$language."/sidebar.php"; ?>

			<div class="mainpanel fixedpanel <?php if('blog' === $formattedUrl){echo 'blogpanel';} ?>">
				<div class="headerpanel">
					<div class="headicon"><span class="<?= $headerIcon ?>"></span></div>
					<h1><?= $headerTitle ?></h1>
					<p><?= $headerSubTitle ?></p>
					<?php if (!empty($_SESSION['login.loggedUser'])) { ?>
					<ul class="breadcrumbs languages">
                <li>
                    <a href="/logout"><span class="iconfa-lock"></span> Logout</a>
                </li>
                </ul>
            <?php } ?>
				</div>
				<?php include_once $fileContent; ?>
			</div>

			<div class="footer">
			    <div class="footerinner">&copy; 2016 Powred by <a href="http://jebalialaeddine.com">Ala Eddine JEBALI</a></div>
			</div><!--footer-->
		</div><!--mainwrapper-->

		<script type="text/javascript" src="/assets/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/assets/js/jquery-ui-1.9.2.min.js"></script>
		<script type="text/javascript" src="/assets/js/modernizr.min.js"></script>
		<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/superfish.js"></script>
		<script type="text/javascript" src="/assets/js/jquery.resize.min.js"></script>
		<script type="text/javascript" src="/assets/js/custom.js"></script>
		<script type="text/javascript" src="/assets/js/highlight.min.js"></script>
		<script type="text/javascript" src="/assets/js/script.js"></script>

        <?php if('' === $formattedUrl){ ?>
			<script type="text/javascript" src="/assets/js/jquery.isotope.min.js"></script>
			<script type="text/javascript" src="/assets/js/portfolio.js"></script>
		<?php }elseif('certifications' === $formattedUrl){ ?>
			<script type="text/javascript" src="/assets/js/script.home.js"></script>
        <?php }elseif('contact' === $formattedUrl){ ?>
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
			<script type="text/javascript" src="/assets/js/jquery.ui.map.min.js"></script>
			<script type="text/javascript" src="/assets/js/script.contact.js"></script>
		<?php }elseif('blog' === $formattedUrl){ ?>
			<script type="text/javascript" src="/assets/js/script.blog.js"></script>
		<?php } ?>

	</body>
</html>