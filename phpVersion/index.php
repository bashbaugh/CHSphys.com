<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>CHS Physics Club | Home</title>
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
			<table role=”presentation”>
			<tr>
				<td><p>Welcome to the Centaurus Physics Club Website!</p></td>
				<td id="floatrightwithwidth"><p><strong>Hey Centaurus Students!</strong></p><p>Are you interested in participating in Physics Club?  Join us!  We need more people to help us!  Go <a href="/contact/join-us/">here</a> for more information.</p></td>
			</tr>
		</table>
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