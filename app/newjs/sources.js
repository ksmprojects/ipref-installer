$(function() {
	document.getElementById('addBtn').style.display = 'none';
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
 			
 			var id = localStorage.getItem("userid")
            var url = firebase.database().ref(id);
    url.on('value', getAppList);
    function getAppList(packages){
    var fbAppList = packages.val();
    var childRef = url.child('/');
    childRef.once('value', function(snapshot){
        snapshot.forEach(function(child){
            var sourceUrl = child.val().url
            var sourceName = child.val().name
            $('#sourcelist').append($('<li class="sourceLI" ui-nodisc-icon ui-screen-hidden" data-filtertext="">').append('<a id="sourceLink" href="" data-transition="slideup" title="" class="removeClass">'+ sourceName +'</a>'));
                //.click(function() {location.href = installer;}));
            //$('#appList').each(function(i) {
                //$(this).delay(100 * i).fadeIn(500);
            
            $('#sourcelist').listview("refresh");
        
        });
    
    });
    
    };

   



  console.log('firebase configured');
  document.querySelector('.editBtn').addEventListener('click', editBtn)
  document.querySelector('.addBtn').addEventListener('click', addBtn)
  document.querySelector('.addConfirm').addEventListener('click', addConfirm)

function addSource(){

	var id = localStorage.getItem("userid");

            var source = document.getElementById('sourceValue').value
  	var sourceName = document.getElementById('sourceNickname').value
    var sourceArray = [];
for (i= source;i=i+1)
{
sourceArray.push({sourceName : i})
}
    sourceArray.push(source)
	database.ref(id +'/' + sourceName).set({
		url: source,
    name: sourceName
	});


	//var sourceUrl = [source]
	//var sources = []
	//for(var i=0; i<4; i++)  {
    //sources.push({source: sourceUrl[i]});
//}

	//localStorage.setItem("sources", JSON.stringify(sources));
	//alert(localStorage.getItem(sourceName));
};
function editBtn(){
	document.getElementById('editBtn').style.display = 'none';
	document.getElementById('addBtn').style.display = 'inline';
}
function addConfirm(){
	addSource();
}
});

