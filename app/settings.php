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


        document.getElementById('name').innerHTML = "Your Current First Name is: <b>" + localStorage.getItem("name");
		document.getElementById('email').innerHTML = "Your CurrentEmail is: <b>" + localStorage.getItem("email");
		document.getElementById('username').innerHTML = "Your Current Username is: <b>" + localStorage.getItem("username");
		document.getElementById('password').innerHTML = "Your Current Password is: <b>" + localStorage.getItem("password");
    });
</script>
    <script src="js/firebase.js"></script>
<script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" />
</head>
<body style="font-family: 'Istok Web', sans-serif;">
	<div data-role="page" data-theme="a" id="demo-page">

		<div data-role="header">
            <a data-iconpos="notext" class="ui-nodisc-icon iprefsflat-info" onclick="alert(localStorage.getItem('appInfo'))" data-role="button" data-theme="" title="Add"></a>
                            <h1>Settings</h1>
                            <a class="ui-nodisc-icon iprefsflat-reload" data-iconpos="notext" data-role="button" data-theme="a" onclick="location.reload();"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>
				<h2 style="font-family: 'Istok Web', sans-serif;">Settings</h2>
			
			<div data-role="collapsible" data-collapsed-icon="flat-settings" style="font-family: 'Istok Web', sans-serif;" data-expanded-icon="flat-cross">
       				<h4 class="font-new">Account Settings</h4>
				<form>
    <div class="ui-field-contain">
	<div id="name"></div>
    <a href="" data-role="button" data-icon="flat-settings" id="changeName">Change Name</a>
<div id="email"></div>
	<a href="" data-role="button" data-icon="flat-settings" id="changeName">Change Email</a>
	<div id="username"></div>
	<a href="" data-role="button" data-icon="flat-settings" id="changeName">Change Username</a>
	<div id="password"></div>
	<a href="" data-role="button" data-icon="flat-settings" id="changeName">Change Password</a>
    </div>
</form>	
</div>
<br><hr>
<a href="" data-role="button" data-icon="flat-settings" data-theme="d" onclick="reset();" id="changeName">Reset iPrefs</a>
<p>Resetting iPrefs will delete everything in local storage and cause you to re-setup all your details and have a fresh copy of the latest iPrefs Installer ©</p>
Check the warnings <a onclick="$(location).attr('href', 'setupinfo.php');">Here</a>


<p><b>ALL DATA IS STORED IN LOCALSTORAGE</b></p>

</div>
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon iprefsflat-home" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="$(location).attr('href', 'iprefs.php')"></a>
					</li>
					<li>
						<a class="font-new iprefsflat-list"  onclick="$(location).attr('href', 'store.php')"></a>
					</li>
					<li>
						<a class="iprefsflat-file" data-icon="" onclick="$(location).attr('href', 'sources.php')"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script src="reset.js"></script>
</body>
</html>
