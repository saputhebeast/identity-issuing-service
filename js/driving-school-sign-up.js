// show password

let clicked = document.getElementById("showPassword");
let pass = document.getElementById("password");
let conPass = document.getElementById("confirm-password");

clicked.addEventListener("click", function(){
	if(this.checked){
		pass.type = "text";
		conPass.type = "text";
	}else{
		pass.type = "password";
		conPass.type = "password";
	}
});

// https://stackoverflow.com/questions/175739/how-can-i-check-if-a-string-is-a-valid-number
function isNumeric(n) {
	return !isNaN(parseFloat(n)) && isFinite(n);
}

function validateForm(){
	// get values from input fields
	let name = document.forms["create-account-form"]["school-name"].value;
	let email = document.forms["create-account-form"]["email"].value;
	let phoneNumber = document.forms["create-account-form"]["phone-number"].value;
	let password = document.forms["create-account-form"]["password"].value;
	let confirmPassword = document.forms["create-account-form"]["confirm-password"].value;

	// input fields
	let schoolName = document.getElementById("school-name");
	let schoolEmail = document.getElementById("email");
	let schoolPhone = document.getElementById("phone-number");
	let schoolPass = document.getElementById("password");
	let schoolConfirmPass = document.getElementById("confirm-password");

	// error paragraphs
	let errorName = document.getElementById("error-school-name");
	let errorEmail = document.getElementById("error-email");
	let errorPhone = document.getElementById("error-phone-number");
	let errorPass = document.getElementById("error-password");
	let errorConfirmPass = document.getElementById("error-confirm-password");
	let passwordMismatch = document.getElementById("error-pass-mismatch");

	// regex for email validation
	const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	let error = false;

	// school name validation
	if (name.length != 0) {
		errorName.innerHTML = "";
		schoolName.style.border = "1px solid green";
		errorName.style.color = "";
	} else {
		errorName.innerHTML = "Enter Driving School Name!";
		schoolName.style.border = "1px solid red";
		errorName.style.color = "red";
		error = true;
	}

	// email validation
	if(email.length == 0){
		errorEmail.innerHTML = "Enter Email!";
		schoolEmail.style.border = "1px solid red";
		errorEmail.style.color = "red";
		error = true;
	}else if(!String(email).toLocaleLowerCase().match(re)){
		errorEmail.innerHTML = "Invalid Email!";
		schoolEmail.style.border = "1px solid red";
		errorEmail.style.color = "red";
		error = true;
	}else{
		errorEmail.innerHTML = "";
		schoolEmail.style.border = "1px solid green";
		errorEmail.style.color = "";
	}
	
	// phone number validation
	// all characters should be digits
	// length should be 10
	if(phoneNumber.length == 0){
		errorPhone.innerHTML = "Enter Phone Number!";
		schoolPhone.style.border = "1px solid red";
		errorPhone.style.color = "red";
		error = true;
	}else if(phoneNumber.length != 11){
		errorPhone.innerHTML = "Invalid Phone Number!";
		schoolPhone.style.border = "1px solid red";
		errorPhone.style.color = "red";
		error = true;
	}else if(!isNumeric(phoneNumber)){
		errorPhone.innerHTML = "Please Enter Digits Only!";
		schoolPhone.style.border = "1px solid red";
		errorPhone.style.color = "red";
		error = true;
	}else{
		errorPhone.innerHTML = "";
		schoolPhone.style.border = "1px solid green";
		errorPhone.style.color = ""
	}

	// password validation
	if(password.length == 0){
		errorPass.innerHTML = "Enter Password!";
		schoolPass.style.border = "1px solid red";
		errorPass.style.color = "red";
		error = true;
	}else if(password.length > 0 && password.length < 8){
		errorPass.innerHTML = "Password Should Be Minimum 8 Characters!";
		schoolPass.style.border = "1px solid red";
		errorPass.style.color = "red";
		error = true;
	} else{
		errorPass.innerHTML = "";
		schoolPass.style.border = "1px solid green";
		errorPass.style.color = "";
	}

	// confirm password validation
	if(confirmPassword.length == 0){
		errorConfirmPass.innerHTML = "Enter Password!";
		schoolConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	}else if(confirmPassword.length > 0 && confirmPassword.length < 8){
		errorConfirmPass.innerHTML = "Password Should Be Minimum 8 Characters!";
		schoolConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	} else{
		errorConfirmPass.innerHTML = "";
		schoolConfirmPass.style.border = "1px solid green";
		errorConfirmPass.style.color = "";
	}

	// check equality of password and confirm password
	if(password !== confirmPassword){
		passwordMismatch.innerHTML = "Password and Confirm Password Should Be Same!";
		passwordMismatch.style.color = "red";
		schoolPass.style.border = "1px solid red";
		schoolConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	}else{
		passwordMismatch.innerHTML = "";
	}


	if(error){
		return false;
	}
}