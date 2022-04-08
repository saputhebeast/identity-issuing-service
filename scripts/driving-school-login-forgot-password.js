// show password

var clicked = document.getElementById("showPassword");
var newPass = document.getElementById("new-password");
var conPass = document.getElementById("confirm-password");

clicked.addEventListener("click", function(){
	if(this.checked){
		newPass.type = "text";
		conPass.type = "text";
	}else{
		newPass.type = "password";
		conPass.type = "password";
	}
});