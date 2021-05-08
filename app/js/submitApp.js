$(function (){
    
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
            installerUrl: 'installer.php?package='+bundleID,
            filter: section
        })
         };
    
});
    
