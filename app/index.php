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
	<script src="js/jquery.mobile.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>
</head>
<body style="font-family: 'Istok Web', sans-serif;" onload="mainLoad();">
	<div data-role="page" data-theme="a" id="demo-page">
		
		<div data-role="header">
			<a class="ui-nodisc-icon" data-iconpos="left" data-role="button" data-theme="a" onclick=""></a>
                            <h1>Setup</h1>
                            <a class="ui-nodisc-icon" data-iconpos="left" data-role="button" data-theme="d" onclick="firstNext();">Next</a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>
				<h2>Welcome to iPrefs Setup.</h2><h4>Follow the instructions to finish the iPrefs installation process</h4>
						<form>
							<input type="text" id="name" placeholder="First Name"/>
						</form>
			</center>
		</div>
	</div>
		<script src="setup.js"></script>
</body>
</html>
