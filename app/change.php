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
            <a data-iconpos="notext" class="ui-nodisc-icon iprefsflat-info" onclick="alert(localStorage.getItem('appInfo'))" data-role="button" data-theme="" title="Add"></a>
                            <h1>Change Log</h1>
                           <a class="ui-nodisc-icon iprefsflat-tools" data-iconpos="notext" data-role="button" data-theme="a" onclick="$(location).attr('href', 'settings.php')"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>
									<h2>Change Log:</h2>
									<p><b>3.0 Beta: </b>New custom webhosting, speed improvments, gui chnages, new setup system, https, packages hosted on iprefs.tk, settings page now live.</p>
									<div data-role="collapsible" data-collapsed-icon="flat-settings" style="font-family: 'Istok Web', sans-serif;" data-expanded-icon="flat-cross">
       				<h4 class="font-new">Version 2.0-2.1 Change Log</h4>
									<p><b>2.1: </b>all new confirm screen, submit custom itms applications straight from the app, all dynamic content, installer reworked, Big UI Changes to main page and all header bars , colors reworked, new support options added!, FAQ page added, live updates added, package system reworked, server updates, new webhost, performence boost</p>
                <p><b>2.0.9 ßeta: </b>Introducing bundle ID's customly created with the informaton provided withing firebase.</p><hr>
                <p><b>2.0.8 ßeta:</b>sorting system now working more effieciently, added sign in through firebase, ui changes, text fixes, bug fixes.</p><hr>
                <p><b>2.0.7: </b>sorting system officially launched still buggy though.</p><hr>
                <p><b>2.0.6: </b>icon changes all around app, text fixes, preformance boost, working in sorting system</p><hr>
                <p><b>2.0.5: </b>installer changes, installer now displays all app information from firebase, filtered by section: Enetertainment, utilities, or social, obvious bug fixes</p><hr>
                <p><b>2.0.4: </b>fixed filtering errors with packages, added new theme to packages page(subject to change), text fixes, bug fixes, server/code improvements.</p><hr> 
				<p><b>2.0.3: </b>packages page adds all packages dynamically and pulls all data from firebase, introduced alot of new bugs on packages screen, bug fixes(from previous versions), added dev bubbles next to package</p><hr>
				<p><b>2.0.2: </b>fixed effects and trasnistion glicthes made preformence better</p><hr>
					<p><b>2.0.1: </b>removed account features, code optimized, settings page coming soon.</p><hr>
					<p><b>2.0: </b>Navbar active tab is now tinted red, packages page filter with search bar, one click install button, firebase bubbles on packages screen, started to add firebase support, added firebase apps screen(in beta), new beta and firebase tags, released demo of new installation screen, started to add installation screen to firebase apps, new setup apps function which checks to see if firebase apps data is current, messed with installation script and made it external and more stable, all apps now have new isntall screen and all are hosted on firebase.</p>
				</div>
				<div data-role="collapsible" data-collapsed-icon="flat-settings" style="font-family: 'Istok Web', sans-serif;" data-expanded-icon="flat-cross">
       				<h4 class="font-new">Version 1-1.17 Change Log</h4>
				<h2>Change Log</h2><hr>
				<p><b>1.17:</b>deleted direct link system option, added new source and package, changed download iprefs app link into update link, added new index file to download webclip, small text fixes and bug fixes.</p><hr>
				<p><b>1.16:</b>code cleanup which improved stability and speed, bug fixes, and text and font tweaks</p><hr>
				<p><b>1.15:</b>fixed settings page discoloration, fixed change log bar issues, backend server fixes, fixed report a problem button, continued working on loader widget, bug fixes</p><hr>
				<p><b>1.14:</b>Added loading widget, bug fixes, text additions and fixes, speed improvments</p><hr>
				<p><b>1.13:<p style="color:red;">BIG UPDATE</p></b>Deleted quick settings and moved it all to the new settings page, combinded appinfo in one js file, fixed all gui to match each other, bug fixes, fixed all reload buttons, change store url from store/index.php to store.php in the root dir, deleted warning text, made some text bolder, added hide navbar feature, added big update text</p><hr>
				<p><b>1.12:</b>Rethought information text, changed the order of app information, added quick settings warning that it will be shut down temp. in next version</p><hr>
				<p><b>1.11:</b>Grouped packages into collapsible, text fixes in headers, fixed packages page ui and quick settings</p><hr>
				<p><b>1.10:</b>Added more new packages from tweakbox, tweaked information text, lowered ram usage to 15mb</p><hr>
				<p><b>1.9:</b>Added new Packages, bug fixes, change "new packages" link to "packages", text fixes, tweakbox as primary source</p><hr>
				<p><b>1.8:</b>Added iRam for background service support, changed all links to jquery, small font and theme changes</p>
				<a onclick="$(location).attr('href', 'http://kmtech.dx.am/iprefs.php');">Link to version 1 here</a>
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
