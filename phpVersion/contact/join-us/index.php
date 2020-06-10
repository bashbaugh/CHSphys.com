<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>CHS Physics Club | Join Us!</title>
	<link type="text/css" rel="stylesheet" href="/css/styles.css"/>
	<link type="text/css" rel="stylesheet" href="/css/nav.css"/>
	<link type="text/css" rel="stylesheet" href="/css/footer.css"/>
	<link rel="shortcut icon" href="/images/favicon.jpg" />
	<meta charset="utf-8"/>
</head>

<?php
	$path_nav = $_SERVER['DOCUMENT_ROOT'];
	$path_nav .= "/static/nav.php";
	include_once($path_nav);
?>

<body>
	<div id="main-wrap">
		<div id="main">
			<h2 style="color: green">Join the CHS Physics Club!</h2>
			<p>Do you like Physics?  Interested in putting things together?</p>
			<p>If so, you should the Centaurus Physics Club!</p>
			<p>We are in need of more people especially now, as we are in the process of <a href="/projects/">designing</a> the payload for <a href="https://www.dawnaerospace.com/paint-our-plane">Dawn Aerospace's Mk-II Spaceplane</a>.</p>  
		</div>
	</div>
	<br>
	<?php
		$path_nav = $_SERVER['DOCUMENT_ROOT'];
		$path_nav .= "/static/footer.php";
		include_once($path_nav);
	?>
</body>

</html>