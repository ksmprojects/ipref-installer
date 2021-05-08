<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="css/jquery.mobile.flatui.css" rel="stylesheet">
        <link href="css/flat/flaticon.css" rel="stylesheet">
        <script src="js/firebase.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
        <script src="newjs/submitApp.js"></script>
        <link href="css/flat/flaticon.css" rel="stylesheet">
    </head>
    <body>
        <div data-role="page">
            <div data-role="header" data-theme="a">
                <a data-iconpos="notext" class="ui-nodisc-icon iprefsflat-info" onclick="alert(localStorage.getItem('appInfo'))" data-role="button" data-theme="a" title="Add"></a>
                            <h1>Submit App</h1>
                            <a class="ui-nodisc-icon iprefsflat-tools" data-iconpos="notext" data-role="button" data-theme="a" onclick="$(location).attr('href', 'settings.php')"></a>
            </div>
        
            <div data-role="content">
                <center>
                <h2>Submit Your App</h2>
                <p>Eneter your app information below and click submit and your app will be added to our directory!</p>
                <input id="bundleID" type="text" placeholder="Bundle ID"/>
                <input id="nameInput" type="text" placeholder="App Name"/>
                <input id="sectionInput" type="text" placeholder="Section"/>
                <input id="versionInput" type="text" placeholder="App Version"/>
                <input id="desInput" type="text" placeholder="App Description"/>
                <input id="devInput" type="text" placeholder="Developer/Team Name"/>
                <input id="urlInput" type="text" placeholder="itms-services link"/>
                <a onclick="appSubmit();" data-role="button">Submit App</a>
                <div id="success"></div>
                <div id="error"></div>
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
        <script>
        function appSubmit(appName, appDes, newAppUrl){ 
            
        var appName = document.getElementById('nameInput').value;
        var appDes = document.getElementById('desInput').value;
        var devName = document.getElementById('devInput').value;
        var newAppUrl = document.getElementById('urlInput').value;
        var bundleID = document.getElementById('bundleID').value;
        var section = document.getElementById('sectionInput').value;
        var version = document.getElementById('versionInput').value;
        var ref = firebase.database().ref(bundleID);
        ref.set({
            name: appName,
            description: appDes,
            dev: devName,
            url: newAppUrl,
            installerUrl: 'confirm.php?package='+bundleID,
            filter: section
        })
         };
        </script>
    </body>
</html>