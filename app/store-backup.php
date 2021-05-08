<?php
// Initialize the session
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
$jsvar = [
	'value1' => $_GET['package'] 
];
?>
<!DOCTYPE html>
<html>
<head>
<script>
		var packageVar ={
		<?php
			foreach ($jsvar as $key => $value) {
				echo '  ' . $key . ': ' . '"' . $value . '",' . "\n";
			}
		?>
		};
	</script>
	<meta charset="utf-8">
	<link href="manifest.json" rel="manifest">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<meta content="iPrefs Beta" name="apple-mobile-web-app-title">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
	<script src="/js/jquery.js"></script>
	<script src="appinfo.js"></script>
	<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>

<script src="js/firebase.js"></script>


<script src="js/mustache.js"></script>
<script src="js/createApps.js"></script>
<script src="js/URI.js"></script>
	<script>

	</script>
	<script src="/js/jquery.mobile-1.4.0-rc.1.js"></script>
	<title></title>
</head>
<body style="font-family: 'Istok Web', sans-serif;" onload="">
	<div data-role="page" data-theme="a" id="demo-page">
		<div data-role="header">
			<a data-icon="refresh" class="ui-nodisc-icon" data-iconpos="notext" data-role="button" data-theme="d" onclick="location.reload();"></a>
			<h1>iPrefs</h1><a data-icon="flat-checkround" data-iconpos="notext" class="ui-nodisc-icon" onclick="" data-role="button" data-theme="d" title="Add"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
	<ul data-filter="true" id="appList" data-split-icon="plus" data-content-theme="c" data-split-theme="b" class="font-new" data-filter-reveal="true" data-filter-placeholder="Search Packages..." data-inset="true">
					<li>
						<a onclick="$(location).attr('href', 'installer.php?package=electra')" id="electraOneBtn" data-filtertext="firebase"  class="font-new">Electra</a>
						<a href="javascript:electraInstall()" id="installBtn">Install</a>
					</li>
					<li>
						<a onclick="$(location).attr('href', 'installer.php?package=moviebox')" data-filtertext="firebase" class="font-new">Moviebox</a>
						<a href="javascript:movieboxInstall()">Install</a>
					</li>
										<li>
						<a onclick="$(location).attr('href', 'installer.php?package=filza')" class="font-new">Fliza Escaped</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
										<li>
						<a onclick="$(location).attr('href', 'installer.php?package=kodi')" class="font-new">Kodi</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
										<li>
						<a onclick="$(location).attr('href', 'installer.php?package=instagram')" class="font-new">Instagram++</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
										<li>
						<a onclick="$(location).attr('href', 'installer.php?package=nothx')" class="font-new">No Thx</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
															<li>
						<a onclick="$(location).attr('href', 'installer.php?package=airshou')" class="font-new">Air Shou</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a onclick="$(location).attr('href', 'installer.php?package=bobbymovie')" class="font-new">Bobby Movie</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a onclick="$(location).attr('href', 'installer.php?package=channels')" class="font-new">Channels</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a onclick="$(location).attr('href', 'installer.php?package=coolpixel')" class="font-new">Cool Pixel</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a onclick="$(location).attr('href', 'installer.php?package=everycord')" class="font-new">Every Cord</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a onclick="$(location).attr('href', 'installer.php?package=gba4ios')" class="font-new">GBA4iOS</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a onclick="$(location).attr('href', 'installer.php?package=gc4ios')" class="font-new">GC4iOS</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a onclick="$(location).attr('href', 'installer.php?package=gearboy')" class="font-new">Gearboy</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a onclick="$(location).attr('href', 'installer.php?package=gearsystem')" class="font-new">Gear System</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
					<li>
						<a onclick="$(location).attr('href', 'installer.php?package=kik')" class="font-new">Kik++</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
					<li>
						<a onclick="$(location).attr('href', 'installer.php?package=xcleaner')" class="font-new">xCleaner</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
				</ul>
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="$(location).attr('href', 'iprefs.php')" data-icon="home" href="#"></a>
					</li>
					<li>
						<a data-icon="flat-menu" class="font-new ui-btn-active loader-class" data-textonly="false" data-textvisible="true" onclick="location.reload();"></a>
					</li>
					<li>
						<a data-icon="flat-settings" class="font-new loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'settings.php')"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
