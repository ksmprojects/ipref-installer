<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="css/jquery.mobile.flatui.css" rel="stylesheet">
        <link href="css/flat/flaticon.css" rel="stylesheet">
        <link href="icons/social/flaticon.css" rel="stylesheet">
        <script src="js/firebase.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.mobile.js"></script>
        <script src="js/submitApp.js"></script>
        <script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>
    </head>
    <body style="background-color: #34495e; !important">
        <div data-role="page" data-dialog="true">
            <div data-role="header" data-theme="a">
                <a data-role="button" data-theme="d" data-iconpos="" data-icon="" data-rel="back">Back</a>
                <h1>iPrefs</h1>
            </div>
        
            <div data-role="content">
                <center>
                <h2>Pick Your Support Contact:</h2>
                        <a data-role="button" class="flaticon-email ui-nodisc-icon" data-iconpos="left" onclick="$(location).attr('href', 'mailto:iprefsofficial@gmail.com?subject=iPrefs%20Support%20Request')"></a>
                        <a data-role="button" class="flaticon-twitter ui-nodisc-icon" data-iconpos="left" onclick="$(location).attr('href', 'http://twitter.com/iprefsinstaller')"></a>
                 </center>
            </div>
        </div>
    </body>
</html>