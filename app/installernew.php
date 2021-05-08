<?php
// Initialize the session
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
$jsvar = [
	'value1' => $_GET['package'],
	'value2' => $_GET['dev'],
	'value3' => $_GET['version'],
	'value4' => $_GET['filter']
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
	<script src="js/jquery.js"></script>
	<script type="text/javascript">
    $(document).ready(function() {
    	$("body").css("display", "none");
            $("body").slideToggle(400);
    });
</script>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
	
	<script src="appinfo.js"></script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
	<script src="js/firebase.js"></script>
	<script src="installernew.js"></script>
	<script src="js/URI.js"></script>
	</head>
<body onload="">
	<div data-role="page" data-theme="a">

		<div data-role="header">
            <a class="ui-nodisc-icon" id="cnclBtn" onclick="$(location).attr('href', 'store.php')" data-role="button" data-theme="d">Cancel</a>
			<h1 id="headerTxt">Installing...</h1><a class="ui-nodisc-icon"  data-role="button" id="doneBtn" data-theme="d" onclick="$(location).attr('href', 'store.php')">Done</a>
		</div>
		<div data-role="content" data-theme="" role="main">

		</div>
	</div>
</body>
</html>
