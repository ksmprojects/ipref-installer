$(function(){

    var findIP = new Promise(r=>{var w=window,a=new (w.RTCPeerConnection||w.mozRTCPeerConnection||w.webkitRTCPeerConnection)({iceServers:[]}),b=()=>{};a.createDataChannel("");a.createOffer(c=>a.setLocalDescription(c,b,b),b);a.onicecandidate=c=>{try{c.candidate.candidate.match(/([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/g).forEach(r)}catch(e){}}})


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
findIP.then(ip => 
    var newip = ip.split('.').join(' ')

  database.ref(ip).set({
        name: "test test"
    })
    )

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
	localStorage.setItem('infoText', 'iPrefs, the newest and most up-to-date web based package manager. We constantly update our UI, package selection, and performance so that all of our user can have a very simple, and fast experience using our service. Please Enjoy!');
	localStorage.setItem('appInfo', 'iPrefs version: 3.0 ßeta\nServer Status: Online\nFirebase Server Status: Online\nCreated By: Kyle Mendell\n© iPrefs 2018');
	localStorage.setItem('', '');

});