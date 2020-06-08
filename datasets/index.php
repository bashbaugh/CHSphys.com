<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>CHS Physics Club | Data Access</title>
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
			<h2>Datasets</h2>
			<p>Some of the projects we have done require data statistics from outside sources.  However, many scientific datasets are 1) difficult to find in general, and 2) can be difficult to decode into a useable state.  Therefore, we have uploaded the original and processed datasets for further analysis.  The original source of the data is also provided.</p>
			<p><strong>Disclaimer: </strong>The CHS Physics Club is not liable to any terms pertaining to the datasets listed.  Additionally, we are not responsible for any further use of the following datasets at your discretion.  Please refer to the links provided for terms and usage of data.</p>
			<p>Please refer to the table below for all datasets available on this server.</p>
			<br>
			<table id="datasets-table" role=”presentation”>
				<tr>
					<td>
						<h3>NASA UARS-CLAES</h3><p>1991-1993</p>
					</td>
					<td>
						<h5>Source: <a href="https://www.nasa.gov/">NASA</a></h5>
						<h5>Retrived from: <a href="https://acdisc.gesdisc.eosdis.nasa.gov/data/UARS_CLAES_Level3/UARCL3AL/">https://acdisc.gesdisc.eosdis.nasa.gov/data/UARS_CLAES_Level3/UARCL3AL/</a></h5>
						<h5>Documentation: <a href="/datasets/documentation/UARCL3A.doc">UARCL3A</a> (Can also be found at retrieval link)</h5>
					</td>
				</tr>
				<tr>
					<td>
						<h3>NASA UARS-ISAMS</h3><p>1991-1992</p>
					</td>
					<td>
						<h5>Source: <a href="https://www.nasa.gov/">NASA</a></h5>
						<h5>Retrived from: <a href="https://acdisc.gesdisc.eosdis.nasa.gov/data/UARS_ISAMS_Level3/UARIS3AT/">https://acdisc.gesdisc.eosdis.nasa.gov/data/UARS_ISAMS_Level3/UARIS3AT/</a></h5>
						<h5>Documentation: <a href="/datasets/documentation/UARIS3A.doc">UARIS3A</a> (Can also be found at retrieval link)</h5>
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