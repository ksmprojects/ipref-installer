<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="css/jquery.mobile.flatui.css" rel="stylesheet">
        <link href="css/flat/flaticon.css" rel="stylesheet">
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
                <h1>Sections</h1>
            </div>
        
            <div data-role="content">
                <center>
                    <ul data-role="listview" data-inset="true">
                        <li>
                        <a class="ui-nodisc-icon"  onclick="$(location).attr('href', '')">Utilities</a>
                    </li>
                    <li>
                        <a class="ui-nodisc-icon"  onclick="$(location).attr('href', '')">Package Managers</a>
                    </li>
                    </ul>
                 </center>
            </div>
        </div>
    </body>
</html>