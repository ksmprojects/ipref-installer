
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
	<link href="/css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<meta content="iPrefs Beta" name="apple-mobile-web-app-title">
	<meta content="yes" name="apple-mobile-web-app-capable">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
        <link href="/css/flat/flaticon.css" rel="stylesheet">
	<script src="/js/jquery.js"></script>
	<script src="/js/jquery.mobile.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>
</head>
<body style="font-family: 'Istok Web', sans-serif;" onload="accountLoad();">
	<div data-role="page" data-theme="a" id="demo-page">
		
		<div data-role="header">
			<a class="ui-nodisc-icon" data-iconpos="left" data-role="button" data-theme="d" data-rel="back" onclick="">Back</a>
                            <h1>Setup</h1>
                            
                            <a class="ui-nodisc-icon" data-iconpos="left" data-role="button" data-theme="d" onclick="secondNext();">Next</a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>
				<h2>Account Setup</h2>
						<div id="form">
							<input class="" type="text" id="email" placeholder="Email"/>
							<input class="" type="text" id="username" placeholder="Username"/>
							<input class="" type="password" id="password" placeholder="Password"/>
						</div>
			</center>
		</div>
	</div>
		<script src="setup.js"></script>
</body>
</html>