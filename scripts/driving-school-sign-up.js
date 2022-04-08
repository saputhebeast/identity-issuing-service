// show password

var clicked = document.getElementById("showPassword");
var pass = document.getElementById("password");
var conPass = document.getElementById("confirm-password");

clicked.addEventListener("click", function(){
	if(this.checked){
		pass.type = "text";
		conPass.type = "text";
	}else{
		pass.type = "password";
		conPass.type = "password";
	}
});