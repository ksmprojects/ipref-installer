<?php
// Initialize the session
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
$jsvar = [
	'value1' => $_GET['package']
];
$filtervar = [
    'value1' => $_GET['filter']
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
        var filterVar ={
		<?php
			foreach ($filtervar as $key => $value) {
				echo '  ' . $key . ': ' . '"' . $value . '",' . "\n";
			}
		?>
		};
	</script>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<meta content="iPrefs" name="apple-mobile-web-app-title">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
    <link href="css/flat/flaticon.css" rel="stylesheet">
    <link href="css/custom-theme.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="appinfo.js"></script>
	<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>
<script src="js/firebase.js"></script>
<script src="js/createApps.js"></script>
<script src="js/URI.js"></script>
	<script>

	</script>
	<title></title>
</head>
<body id="body" style="font-family: 'Istok Web', sans-serif;" onload="">
	<div data-role="page" class="ui-page-theme-k">
		<div data-role="header" data-theme="a">
            <a class="ui-nodisc-icon iprefsflat-sort" data-position-to="window" href="#sortMenu" data-transition="fade" data-rel="popup" data-iconpos="notext" data-role="button" data-theme="a" onclick=""></a>
			<h1>Package</h1>
            <a class="ui-nodisc-icon iprefsflat-tools" data-iconpos="notext" data-role="button" data-theme="a" onclick="$(location).attr('href', 'settings.php')"></a>
		</div>
        <div data-role="popup" id="sortMenu" data-theme="a" class="ui-corner-all">
    <form>
        <div style="padding:10px 20px;">
            <h3>Select your section:</h3>
            <a data-role="button" onclick="utilitiesSort();">Utilities</a>
            <a data-role="button" onclick="entertainmentSort();">Entertainment</a>
            <a data-role="button" onclick="socialSort();">Social</a>
            <a data-role="button" onclick="hackedGamesSort();">Hacked Games</a>
            <a data-role="button" onclick="appstoreSort();">Appstore</a>
        </div>
    </form>
</div>
		<div data-role="content" data-theme="" role="main">
            <div data-content-theme="k" id="main"></div>
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar" data-theme="a">
				<ul>
					<li>
						<a data-theme="a" class="font-new ui-nodisc-icon loader-class iprefsflat-home" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="$(location).attr('href', 'iprefs.php')"></a>
					</li>
					<li>
						<a data-theme="a" class="font-new ui-btn-active iprefsflat-list" data-textonly="false" data-textvisible="true" onclick="location.reload();"></a>
					</li>
					<li>
						<a data-theme="a" class="iprefsflat-file" data-icon="" onclick="$(location).attr('href', 'sources.php')"></a>
					</li> 
				</ul>
			</div>
		</div>
	</div>
	<script>$('#main').append('<ul data-filter="true" data-role="listview" data-inset="true"  data-filter-placeholder="Filter Packages..." id="applist"></ul>');
        $('#appList').listview("refresh");
        </script>
        <script src="newjs/sortApps.js"></script>
</body>
</html>
