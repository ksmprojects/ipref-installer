
 $(document).ready(function() {
        
                document.getElementById('doneBtn').style.display = 'none';
                document.getElementById('countDiv').style.visibility = 'hidden';
                //var refUrl = packageVar['value1']
                var refUrl = localStorage.getItem(packageVar['value1']);
                var dev = packageVar['value2']
                var version = packageVar['value3']
                var filter = packageVar['value4']
                var seconds_left = 21;
                var interval = setInterval(function() {
                document.getElementById('countDiv').style.visibility = 'hidden';
                document.getElementById('countDiv').innerHTML = --seconds_left;
                if (seconds_left == 20)
                    {
                    var devRef = firebase.database().ref(refUrl + '/dev/');
                    devRef.on('value', getDev);
                    function getDev(data){
                    var dev = data.val();
                    document.getElementById('line1').innerHTML = 'Retriving ' + 'com.' + dev + '.' + refUrl  + ' Data...\n';
                    };
                    }
                if (seconds_left == 17)
                    {
                    document.getElementById('line2').innerHTML = 'Downloading Firebase Data...\n';
                }
                if (seconds_left == 16)
                    {
                    document.getElementById('name').innerHTML = '--Name: '+refUrl+'';
                    document.getElementById('dev').innerHTML = '--Developer: '+dev+'';
                    document.getElementById('section').innerHTML = '--Section: '+filter+'';
                };
                    if (seconds_left == 13)
                    {
                    document.getElementById('line3').innerHTML = 'Compiling ' + 'com.' + dev + '.' + refUrl  + ' Files...\n';
                    }
                    if (seconds_left == 11)
                    {
                    document.getElementById('ipa').innerHTML = 'Veryifying ' + 'com.' + dev + '.' + refUrl  + '.ipa\n';
                    }
                    if (seconds_left == 7)
                    {
                    document.getElementById('line4').innerHTML = 'Verifying Compiled Files...\n';
                    }
                    if (seconds_left == 3)
                    {
                    document.getElementById('line6').innerHTML = 'Cleaning Up...\n';
                    }
                    if (seconds_left == 4)
                    {
                    document.getElementById('line5').innerHTML = 'Receiving Custom Manifest...\n';
                    }
                    if (seconds_left <= 0)
                    {
                    document.getElementById('line7').innerHTML = refUrl + ' Compliation Complete!';
                    document.getElementById('doneBtn').style.display = 'inline';
                    document.getElementById('cnclBtn').style.display = 'none';
                    document.getElementById('headerTxt').html = 'Complete';
                    var ref = firebase.database().ref(refUrl + '/url/');
                    ref.on('value', installUrl);
                    function installUrl(data){
                    var source = data.val();
                    var result = URI.withinString(source, function(url){
                    console.log(url);
                    location.href = url;
                    });
        
    }
                    clearInterval(interval);
                    }
                }, 1000);
     
 });
function installApp(){
    
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
    
}