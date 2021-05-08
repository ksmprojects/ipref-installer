$(function(){

    var firstrun = localStorage.getItem("firstrun");
    console.log(firstrun);
    if (firstrun== '1')
    {
        location.href="http://iprefs.tk"
    }
    else{
        localStorage.setItem("firstrun", "0");
        console.log(firstrun);
    }

	//write iprefs text to local storage for improoved performence
	localStorage.setItem('infoText', 'iPrefs, the newest and most up-to-date web based package manager. We constantly update our UI, package selection, and performance so that all of our user can have a very simple, and fast experience using our service. Please Enjoy!');
	localStorage.setItem('appInfo', 'iPrefs version: 2.1 ßeta\nServer Status: Live Maintenance...\nFirebase Server Status: Running\nCreated By: Kyle Mendell\n© iPrefs 2018');
	localStorage.setItem('', '');

	var config = {
         apiKey: "AIzaSyDwlDt3qxz6V_S54bulb6gDQpp7sSXVan4",
         authDomain: "iprefs-61aff.firebaseapp.com",
         databaseURL: "https://iprefs-61aff.firebaseio.com",
         projectId: "iprefs-61aff",
         storageBucket: "iprefs-61aff.appspot.com",
         messagingSenderId: "761802127658"
     };
    firebase.initializeApp(config);

    function appSubmit(appName, appDes, newAppUrl){ 
            
        var appName = document.getElementById('nameInput').value;
        var appDes = document.getElementById('desInput').value;
        var devName = document.getElementById('devInput').value;
        var newAppUrl = document.getElementById('urlInput').value;
        var bundleID = document.getElementById('bundleID').value;
        var section = document.getElementById('sectionInput').value;
        var version = document.getElementById('versionInput').value;
        var ref = firebase.database().ref('/' + appName);
        ref.set({
            name: appName,
            description: appDes,
            dev: devName,
            url: newAppUrl,
            installerUrl: 'confirm.php?package='+bundleID,
            filter: section
        });
         };

    var filter = filterVar['value1'];
    
    function utilitiesSort(){
        $('.Utilities').removeClass('ui-screen-hidden');
        $('.Entertainment').addClass('ui-screen-hidden');
        $('.Hacked').addClass('ui-screen-hidden');
        $('.Appstore').addClass('ui-screen-hidden');
    };
    function socialSort(){
        $('.Social').removeClass('ui-screen-hidden');
        $('.Utilities').addClass('ui-screen-hidden');
        $('.Entertainment').addClass('ui-screen-hidden');
        $('.Appstore').addClass('ui-screen-hidden');
    };
    function entertainmentSort(){
        $('.Entertainment').removeClass('ui-screen-hidden');
        $('.Utilities').addClass('ui-screen-hidden');
        $('.Social').addClass('ui-screen-hidden');
        $('.Appstore').addClass('ui-screen-hidden');
    };
    function hackedGamesSort(){
        $('.Hacked').removeClass('ui-screen-hidden');
        $('.Utilities').addClass('ui-screen-hidden');
        $('.Entertainment').addClass('ui-screen-hidden');
        $('.Appstore').addClass('ui-screen-hidden');
    };
    function appstoreSort(){
        $('.Appstore').removeClass('ui-screen-hidden');
        $('.Utilities').addClass('ui-screen-hidden');
        $('.Entertainment').addClass('ui-screen-hidden');
        $('.Hacked').addClass('ui-screen-hidden');
    };

});