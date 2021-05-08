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
function setupApps(){
	database.ref('testpackage').set({
		name: "Test Package",
		url: "",
		dev: "kmtech",
		description: "iPrefs Test Package",
		installerUrl: "confirm.php?package=testpackage",
        filter: "Utilities",
        version: "1.0"
	});
	database.ref('gba4ios').set({
		name: "GBA4iOS",
		url: "itms-services://?action=download-manifest&url=https://dl.dropboxusercontent.com/s/vmydbo1nwpvn04u/gba4ios.plist",
		dev: "kmtech",
		description: "emulator",
		installerUrl: "confirm.php?package=gba4ios&dev=kmtech&filter=Utilities&version=1.0",
		filter: "Utilities",
		version: "1.0"
	});
	localStorage.setItem("gba4ios", "itms-services://?action=download-manifest&url=https://dl.dropboxusercontent.com/s/vmydbo1nwpvn04u/gba4ios.plist");
	database.ref('mojo').set({
		name: "Mojo Installer",
		url: "https://mojoinstaller.co/install.mobileconfig", 
		dev: "mojoinstaller",
		description: "Cydia Alternative",
		installerUrl: "confirm.php?package=mojo&dev=mojoinstaller&version=5.0&filter=PackageManagers",
		filter: "PackageManagers",
		version: "5.0"
	});
	localStorage.setItem("mojo", "https://mojoinstaller.co/install.mobileconfig");
	database.ref('zestia').set({
		name: "Zestia Step",
		url: "http://zestia.Lmdinteractive.com/december.php", 
		dev: "lmdinteractive",
		description: "Cydia Alternative",
		installerUrl: "confirm.php?package=zestia&dev=lmdinteractive&version=5.1.2&filter=PackageManagers",
		filter: "PackageManagers",
		version: "5.1.2"
	});
	localStorage.setItem("zestia", "https://zestia.Lmdinteractive.com/december.php");
	console.log("apps setup");
}