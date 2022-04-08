// show password

var clicked = document.getElementById("showPassword");
var pass = document.getElementById("login-password");

clicked.addEventListener("click", function(){
	if(this.checked){
		pass.type = "text";
	}else{
		pass.type = "password";
	}
});