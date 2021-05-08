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
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="appinfo.js"></script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
	<script src="js/firebase.js"></script>
	<script src="js/URI.js"></script>
	<script src="confirm-js/confirm.js" type="text/javascript"></script>
	</head>
<body style="" onload="">
	<div data-role="page" data-theme="a" id="demo-page">

		<div data-role="header">
            <a class="ui-nodisc-icon" id="cnclBtn" onclick="window.history.back();" data-role="button" data-theme="d">Cancel</a>
			<h1 id="headerTxt">Confirm?</h1><a class="ui-nodisc-icon"  data-role="button" id="doneBtn" data-theme="d" onclick="$(location).attr('href', 'installer.php?package=<?php echo $_GET['package'] ?>&dev=<?php echo $_GET['dev'] ?>&version=<?php echo $_GET['version'] ?>&filter=<?php echo $_GET['filter'] ?>')">Install</a>
		</div>
		<div data-role="content" data-theme="a" role="main">
			<center>
			<h3>You are installing the following packages:</h3>
			<ul id=confirmApp" data-role="listview" data-inset="true">
				<li><a class="ui-nodisc-icon"><?php echo $_GET['package'] ?></a></li>
			</ul>
		</div>
	</div>
</body>
</html>
