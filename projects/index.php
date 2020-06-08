<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>CHS Physics Club | Projects</title>
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
			<h2>Physics Club Projects</h2>
			<table id="even-split-table" role=”presentation”>
			<tr>
				<td>
					<h3>Dawn Aerospace Flight</h3>
					<img id="float" src="/projects/dawnlogo.png">
					<p>Recently, we won the payload to launch on <a href="https://www.dawnaerospace.com/paint-our-plane">Dawn Aerospace's Mk-II Spaceplane</a>!  As this is quite a big project, we are in the process of designing the payload for the spaceplane!</p>
				</td>
				<td>
					<h3>CERN Beamline for Schools</h3>
					<img id="float" src="/projects/cernbl4s.png">
					<p>The CHS Physics Club was originally created to participate in the  <a href="https://beamlineforschools.cern/home">Beamline for Schools</a> at <a href="https://home.cern/">CERN</a>.  It's pretty cool.</p>
				</td>
			</tr>
			<tr>
				<td>
					<h3>JPL Invention Challenge</h3>
					<img id="float" src="/projects/jpl.png">
					<p>Every year, NASA's Jet Propulsion Laboratory hosts their <a href="https://www.jpl.nasa.gov/events/inventionchallenge/">JPL Invention Challenge</a>.  As this challenge changes each year, we need to complete the challenge using our engineering skills!</p>
				</td>
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