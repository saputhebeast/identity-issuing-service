// show password
let clicked = document.getElementById("showPassword");
let newPass = document.getElementById("pass");
let conPass = document.getElementById("confirm-pass");

clicked.addEventListener("click", function(){
	if(this.checked){
		newPass.type = "text";
		conPass.type = "text";
	}else{
		newPass.type = "password";
		conPass.type = "password";
	}
});

function validateForm(){
	// get values from input fields
	let email = document.forms["forgot-pass-form"]["email"].value;
	let pass = document.forms["forgot-pass-form"]["password"].value;
	let confirmPass = document.forms["forgot-pass-form"]["confirm-password"].value;

	// input fields
	let loginEmail = document.getElementById("email");
	let loginPass = document.getElementById("pass");
	let loginConfirmPass = document.getElementById("confirm-pass");

	// error paragraphs
	let errorEmail = document.getElementById("error-email");
	let errorPass = document.getElementById("error-pass");
	let errorConfirmPass = document.getElementById("error-confirm-pass");
	let equal = document.getElementById("equality");

	// regex for email validation
	const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	let error = false;

	// email validation
	if(email.length == 0){
		errorEmail.innerHTML = "Enter Email!";
		loginEmail.style.border = "1px solid red";
		errorEmail.style.color = "red";
		error = true;
	}else if(!String(email).toLocaleLowerCase().match(re)){
		errorEmail.innerHTML = "Invalid Email!";
		loginEmail.style.border = "1px solid red";
		errorEmail.style.color = "red";
		error = true;
	}else{
		errorEmail.innerHTML = "";
		loginEmail.style.border = "1px solid green";
		errorEmail.style.color = "";
	}

	// password validation
	if(pass.length == 0){
		errorPass.innerHTML = "Enter Password!";
		loginPass.style.border = "1px solid red";
		errorPass.style.color = "red";
		error = true;
	}else if(pass.length > 0 && pass.length < 8){
		errorPass.innerHTML = "Password Should Be Minimum 8 Characters!";
		loginPass.style.border = "1px solid red";
		errorPass.style.color = "red";
		error = true;
	} else{
		errorPass.innerHTML = "";
		loginPass.style.border = "1px solid green";
		errorPass.style.color = "";
	}

	// confirm password validation
	if(confirmPass.length == 0){
		errorConfirmPass.innerHTML = "Enter Password!";
		loginConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	}else if(confirmPass.length > 0 && confirmPass.length < 8){
		errorConfirmPass.innerHTML = "Password Should Be Minimum 8 Characters!";
		loginConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	} else{
		errorConfirmPass.innerHTML = "";
		loginConfirmPass.style.border = "1px solid green";
		errorConfirmPass.style.color = "";
	}

	// check equality of password and confirm password
	if(pass !== confirmPass){
		equal.innerHTML = "Password and Confirm Password Should Be Same!";
		equal.style.color = "red";
		loginPass.style.border = "1px solid red";
		loginConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	}else{
		equal.innerHTML = "";
	}

	if(error){
		return false;
	}
}
