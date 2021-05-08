<?php
// Initialize the session
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<meta content="iPrefs Beta" name="apple-mobile-web-app-title">
	<meta content="yes" name="apple-mobile-web-app-capable">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
    <link href="css/flat/flaticon.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
<script src="appinfo.js"></script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>
<script src="js/mustache.js">console.log('mustache.js loaded');</script>
<script src="js/firebase.js">console.log('firebase.js loaded');</script>
<script src="js/setupApps.js">console.log('setupApps.js loaded');</script>

</head>
<body style="font-family: 'Istok Web', sans-serif;" onload="">
	<div data-role="page" data-theme="a" id="demo-page">
		<div data-role="header">
            <a data-iconpos="notext" class="ui-nodisc-icon iprefsflat-info" onclick="alert(localStorage.getItem('appInfo'))" data-role="button" data-theme="a" title="Add"></a>
                            <h1>Warning</h1>
                            <a class="font-new loader-class iprefsflat-tools" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'settings.php')"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>
				
				<h2><b>Setup Warnings</b></h2>
				<hr>
				<div id="apps">
					<h4>iPrefs new  setup functions are initiated once the app is loaded. These values that you have provided us are saved in the safari localstorage. That being said if you at anytime delete iprefs off your device, clear history and website data, or restore your phone all iprefs data will be deleted.</h4>
			</div>
			</center>
		</div>
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon loader-class iprefsflat-home" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="$(location).attr('href', 'iprefs.php')"></a>
					</li>
					<li>
						<a class="font-new loader-class iprefsflat-list" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'store.php')"></a>
					</li>
					<li>
						<a class="iprefsflat-file" data-icon="" onclick="$(location).attr('href', 'sources.php')"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
