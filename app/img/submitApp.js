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
    var database = firebase.database();
    var appName = $('#nameInput');
    var appDes = $('#desInput');
    var devName = $('#devInput');
    var newAppUrl = $('#urlInput');
    var submitApp = $('#submitApp');

    
});
    
