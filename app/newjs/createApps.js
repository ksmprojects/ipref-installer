$(function(){function e(e){var a=(e.val(),i.child("/"))
a.once("value",function(e){e.forEach(function(e){var a=e.val().name,t=(e.val().dev,e.key,e.val().installerUrl),i=e.val().filter
$("#applist").append($('<li class="'+i+' ui-nodisc-icon ui-screen-hidden" data-filtertext="'+a+'">').append('<a id="packageLink" href="'+t+'" data-transition="slideup" title="'+a+'" class="appURL">'+a+"</a>")),$("#applist").listview("refresh")})})}var a={apiKey:"AIzaSyDwlDt3qxz6V_S54bulb6gDQpp7sSXVan4",authDomain:"iprefs-61aff.firebaseapp.com",databaseURL:"https://iprefs-61aff.firebaseio.com",projectId:"iprefs-61aff",storageBucket:"iprefs-61aff.appspot.com",messagingSenderId:"761802127658"}
firebase.initializeApp(a)
var t=firebase.storage(),i=(t.ref(),firebase.database(),$("#appList"),firebase.database().ref("/"))
i.on("value",e)})