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
  <meta content="yes" name="apple-mobile-web-app-capable">
  <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
  <link href="css/flat/flaticon.css" rel="stylesheet">
  
  <script src="js/jquery.js"></script>
  <script src="appinfo.js"></script>
  <script src="js/firebase.js"></script>
  <script src="js/jquery.mobile.js"></script>
  <link href="css/h-theme.css" rel="stylesheet">
  <script type="text/javascript"> $(document).ready(function() { $("body").css("display", "none"); $("body").fadeIn(200); }); </script>
  <script src="newjs/iprefsSetup.js"></script>
</head>

                      <body onload="setupApps();">
                        <div data-role="page" data-theme="a">

                          <div data-role="header">
                            <a data-iconpos="notext" class="ui-nodisc-icon iprefsflat-info" onclick="alert(localStorage.getItem('appInfo'))" data-role="button" data-theme="a"></a>
                            <h1>Home</h1>
                            <a class="ui-nodisc-icon iprefsflat-tools" data-iconpos="notext" data-role="button" data-theme="a" onclick="$(location).attr('href', 'settings.php')"></a>
                          </div>
                          <div data-role="content" data-theme="" role="main">
                            <center>
                              <h2>
                                <b>iPrefs Installer</b><br>
                              </h2>
                              <p>iPrefs, the newest and most up-to-date web based package manager. We constantly update our UI, package selection, and performance so that all of our user can have a very simple, and fast experience using our service. Please Enjoy!</p>
                              <hr>
                                <ul data-inset="true" data-role="listview" data-theme="c" class="">
                                  <li data-role="list-divider" data-theme="d">Store</li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'store.php')" class=" ui-nodisc-icon">All Packages</a>
                                  </li>
                                </ul>
                                <ul data-inset="true" data-role="listview" data-theme="c" class="">
                                  <li data-role="list-divider" data-theme="d">Information</li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'firebaseapps.php')" class=" ui-nodisc-icon">Firebase Info
                                      
                                    </a>
                                  </li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'setupinfo.php')" class=" ui-nodisc-icon">Setup System Info</a>
                                  </li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'change.php')" class=" ui-nodisc-icon">Change Log</a>
                                  </li>
                                </ul>
                                <ul data-inset="true" data-role="listview" data-theme="c" class="">
                                  <li data-role="list-divider" data-theme="d">Devs</li>
                                    <li>
                                        <a class="ui-nodisc-icon" onclick="$(location).attr('href', 'submitapp.php')">Submit Your App</a>
                                    </li>
                                </ul>
                                <ul data-inset="true" data-role="listview" data-theme="c" class="">
                                  <li data-role="list-divider" data-theme="d">Help</li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'support.php')" class=" ui-nodisc-icon">Support</a>
                                  </li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'faq.php')" class=" ui-nodisc-icon">FAQ</a>
                                  </li>
                                </ul>
                              </center>
                            </div>
                            <div data-position="fixed" data-role="footer" data-theme="a">
                              <div data-role="navbar">
                                <ul>
                                  <li>
                                    <a class="ui-btn-active ui-nodisc-icon iprefsflat-home" data-iconpos="notext" onclick="location.reload();"></a>
                                  </li>
                                  <li>
                                    <a href="#" class="iprefsflat-list" onclick="$(location).attr('href', 'store.php')"></a>
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
