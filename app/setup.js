function mainLoad(){
	var firstrun = localStorage.getItem("firstrun");
	if (firstrun== '0')
	{
		location.href="iprefs.php"
	}
	else{
		
	}
	document.getElementById('name').value = localStorage.getItem("name");
};
function accountLoad(){
		document.getElementById('email').value = localStorage.getItem("email");
	document.getElementById('username').value = localStorage.getItem("username");
	document.getElementById('password').value = localStorage.getItem("password");
}

	function firstNext(){
	localStorage.setItem("name", document.getElementById('name').value);
	console.log(localStorage.getItem('name'));
	location.href = "step2.php";
}
function secondNext(){
	localStorage.setItem("email", document.getElementById('email').value);
	localStorage.setItem("username", document.getElementById('username').value);
	localStorage.setItem("password", document.getElementById('password').value);
	console.log(localStorage.getItem('email'));
	console.log(localStorage.getItem('username'));
	console.log(localStorage.getItem('password'));
	location.href = "step3.php";
}
function finalLoad(){
		document.getElementById('name').innerHTML = "Your First Name is: <b>" + localStorage.getItem("name");
		document.getElementById('email').innerHTML = "Your Provided Email is: <b>" + localStorage.getItem("email");
		document.getElementById('username').innerHTML = "Your iPrefs Username is: <b>" + localStorage.getItem("username");
		document.getElementById('password').innerHTML = "Your iPrefs Password is: <b>" + localStorage.getItem("password");
}
function finalNext(){
	localStorage.setItem("firstrun", "0");
	location.href = "iprefs.php";
}