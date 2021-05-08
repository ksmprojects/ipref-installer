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
    <link href="icons/flaticon.css" rel="stylesheet">
    <link href="css/flat/flaticon.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
<script src="appinfo.js"></script>
	<script src="js/jquery.mobile.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>
</head>
<body style="font-family: 'Istok Web', sans-serif;">
	<div data-role="page" data-theme="a" id="demo-page">
		
		<div data-role="header">
            <a data-iconpos="notext" class="ui-nodisc-icon iprefsflat-info" onclick="appinfo();" data-role="button" data-theme="" title="Add"></a>
                            <h1>iPrefs</h1>
                            <a class="ui-nodisc-icon iprefsflat-reload" data-iconpos="notext" data-role="button" data-theme="a" onclick="location.reload();"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>
						<h2>Error 404 Not Found</h2>
						<a onclick="$(location).attr('href', 'iprefs.php')">Click Here to go home</a>
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
						<a class="font-new loader-class iprefsflat-tools" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'settings.php')"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
