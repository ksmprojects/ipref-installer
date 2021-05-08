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
    <link href="css/custom-theme.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
<script src="appinfo.js"></script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
	<script src="js/firebase.js">console.log('firebase.js loaded');</script>
	<script src="newjs/sources.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>
<style>
	#addPopup-popup {
    width: 80%;
    left: 10%;
    right: 10%
}
</style>
</head>
<body style="font-family: 'Istok Web', sans-serif;" onload="">
	<div data-role="page" class="ui-page-theme-k" id="demo-page">
		<div data-role="header" data-theme="a">
            <a data-iconpos="notext" class="editBtn" id="editBtn" data-role="button" data-theme="a">Edit</a>
                            <h1>Sources</h1>
                            <a data-iconpos="notext" style="display: none;" id="addBtn" class="addBtn" data-position-to="window" href="#addPopup" data-transition="fade" data-rel="popup" data-role="button" data-theme="a">Add</a>
		</div>
		<div data-role="popup" id="addPopup" data-theme="a" class="ui-corner-all">
			<div data-role="header" data-theme="a">
				<a style="display: none;"></a>
				<a href="" id="addConfirm" class="addConfirm" data-theme="d">Add</a>
			</div>
    <form>
        <div style="padding:10px 20px;">
			<input type="text" id="sourceNickname" placeholder="Source Nickname"/>
			<input type="text" id="sourceValue" placeholder="http://iprefs.tk.source.json"/>
        </div>
    </form>
</div>
		<div data-role="content" data-theme="" role="main">
			<center>
				
	<div id="main">
	</div>
				
			</center>
		</div>
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon loader-class iprefsflat-home" data-theme="a" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="$(location).attr('href', 'iprefs.php')"></a>
					</li>
					<li>
						<a class="font-new loader-class iprefsflat-list" data-theme="a" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'store.php')"></a>
					</li>
					<li>
						<a class="iprefsflat-file ui-btn-active" data-theme="a" data-icon="" onclick="location.reload();"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script>$('#main').append('<ul data-role="listview" data-split-icon="flat-settings" data-split-theme="d" data-inset="true"  id="sourcelist"></ul>');
        $('#sourceList').listview("refresh");
        </script>
</body>
</html>
