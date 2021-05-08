$(function(){

    var config = {
    apiKey: "AIzaSyB_nk2qxDANzLdkjo1rDChKABo78ksb45s",
    authDomain: "iprefs-sources.firebaseapp.com",
    databaseURL: "https://iprefs-sources.firebaseio.com",
    projectId: "iprefs-sources",
    storageBucket: "iprefs-sources.appspot.com",
    messagingSenderId: "15453619350"
  };
  firebase.initializeApp(config);
  var database = firebase.database();
/*Usage example*/


if (localStorage.getItem("userid") === null) {
        var number = Math.random() // 0.9394456857981651
number.toString(36); // '0.xtis06h6'
var id = number.toString(36).substr(2, 9); // 'xtis06h6'
id.length >= 9; // false

localStorage.setItem("userid", id)
}else{

}


	    var firstrun = localStorage.getItem("firstrun");
    console.log(firstrun);
    if (localStorage.getItem("firstrun") === null) {
        location.href="index.php"
}
    if (firstrun== '1')
    {
        location.href="index.php"
    }
    else{

    }
	//write iprefs text to local storage for improoved performence
	localStorage.setItem('appInfo', 'iPrefs version: 3.0 ßeta\nServer Status: Online\nFirebase Server Status: Online\nCreated By: Kyle Mendell\n© iPrefs 2018');
	localStorage.setItem('', '');

});