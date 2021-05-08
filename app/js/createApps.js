$(function() {

    var config = {
        apiKey: "AIzaSyDwlDt3qxz6V_S54bulb6gDQpp7sSXVan4",
        authDomain: "iprefs-61aff.firebaseapp.com",
        databaseURL: "https://iprefs-61aff.firebaseio.com",
        projectId: "iprefs-61aff",
        storageBucket: "iprefs-61aff.appspot.com",
        messagingSenderId: "761802127658"
         };
        firebase.initializeApp(config);
        var storage = firebase.storage();
        var storageRef = storage.ref();
    
        var database = firebase.database();

    var list = $('#appList');
    var url = firebase.database().ref('/');
    url.on('value', getAppList);
    function getAppList(packages){
    var fbAppList = packages.val();
    var childRef = url.child('/');
    childRef.once('value', function(snapshot){
        snapshot.forEach(function(child){
            var appName = child.val().name;
            var dev = child.val().dev
            var childkey = child.key;
            var installer = child.val().installerUrl;
            var filter = child.val().filter
            $('#applist').append($('<li class="'+filter+' ui-nodisc-icon ui-screen-hidden" data-filtertext="'+appName+'">').append('<a id="packageLink" href="'+installer+'" data-transition="slideup" title="'+appName+'" class="appURL">'+ appName +'</a>'));
                //.click(function() {location.href = installer;}));
            //$('#appList').each(function(i) {
                //$(this).delay(100 * i).fadeIn(500);
            
            $('#applist').listview("refresh");
        
        });
    
    });
    
    };
    
});