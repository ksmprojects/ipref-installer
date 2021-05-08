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

        
        var confirmDes = $('#confirmDes');
        var confirmVersion = $('#confirmVersion');
        var confirmDev = $('#confirmDev');
        var refUrl = packageVar['value1']

        	var nameRef = firebase.database().ref(refUrl + '/name/');
            nameRef.on('value', getName);
            function getName(data){
            var name = data.val();
        }
        var nameRef = firebase.database().ref(refUrl + '/description/');
            nameRef.on('value', getDes);
            function getDes(data){
            var des = data.val();
        }
        var nameRef = firebase.database().ref(refUrl + '/version/');
            nameRef.on('value', getVer);
            function getVer(data){
            var ver = data.val();
        }
        var nameRef = firebase.database().ref(refUrl + '/dev/');
            nameRef.on('value', getDev);
            function getDev(data){
            var dev = data.val();
        }


});