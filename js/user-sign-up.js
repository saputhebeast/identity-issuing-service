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
    // user-name
	let name = document.forms["create-account-form"]["user-name"].value;
    // email
	let email = document.forms["create-account-form"]["email"].value;
	// phone-number
    let phoneNumber = document.forms["create-account-form"]["phone-number"].value;
    // password
	let password = document.forms["create-account-form"]["password"].value;
    // confirm-password
	let confirmPassword = document.forms["create-account-form"]["confirm-password"].value;
    // home-address
    let address = document.forms["create-account-form"]["home-address"].value;

	// input fields
	let userName = document.getElementById("user-name");
	let userEmail = document.getElementById("email");
	let userPhone = document.getElementById("phone-number");
    let userAddress = document.getElementById("home-address");
	let userPass = document.getElementById("password");
	let userConfirmPass = document.getElementById("confirm-password");


	// error paragraphs
	let errorName = document.getElementById("error-user-name");
	let errorEmail = document.getElementById("error-email");
	let errorPhone = document.getElementById("error-phone-number");
    let errorAddress = document.getElementById("error-home-address");
	let errorPass = document.getElementById("error-password");
	let errorConfirmPass = document.getElementById("error-confirm-password");
	let passwordMismatch = document.getElementById("error-pass-mismatch");

	// regex for email validation
	const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	let error = false;

	// school name validation
	if (name.length != 0) {
		errorName.innerHTML = "";
		userName.style.border = "1px solid green";
		errorName.style.color = "";
	} else {
		errorName.innerHTML = "Enter User Name!";
		userName.style.border = "1px solid red";
		errorName.style.color = "red";
		error = true;
	}

	// email validation
	if(email.length == 0){
		errorEmail.innerHTML = "Enter Email!";
		userEmail.style.border = "1px solid red";
		errorEmail.style.color = "red";
		error = true;
	}else if(!String(email).toLocaleLowerCase().match(re)){
		errorEmail.innerHTML = "Invalid Email!";
		userEmail.style.border = "1px solid red";
		errorEmail.style.color = "red";
		error = true;
	}else{
		errorEmail.innerHTML = "";
		userEmail.style.border = "1px solid green";
		errorEmail.style.color = "";
	}
	
	// phone number validation
	// all characters should be digits
	// length should be 10
	if(phoneNumber.length == 0){
		errorPhone.innerHTML = "Enter Phone Number!";
		userPhone.style.border = "1px solid red";
		errorPhone.style.color = "red";
		error = true;
	}else if(phoneNumber.length != 11){
		errorPhone.innerHTML = "Invalid Phone Number!";
		userPhone.style.border = "1px solid red";
		errorPhone.style.color = "red";
		error = true;
	}else if(!isNumeric(phoneNumber)){
		errorPhone.innerHTML = "Please Enter Digits Only!";
		userPhone.style.border = "1px solid red";
		errorPhone.style.color = "red";
		error = true;
	}else{
		errorPhone.innerHTML = "";
		userPhone.style.border = "1px solid green";
		errorPhone.style.color = ""
	}

    // address validation
	if(address.length == 0){
		errorAddress.innerHTML = "Enter Address!";
		userAddress.style.border = "1px solid red";
		errorAddress.style.color = "red";
		error = true;
	}else{
		errorAddress.innerHTML = "";
		userAddress.style.border = "1px solid green";
		errorAddress.style.color = "";
	}

	// password validation
	if(password.length == 0){
		errorPass.innerHTML = "Enter Password!";
		userPass.style.border = "1px solid red";
		errorPass.style.color = "red";
		error = true;
	}else if(password.length > 0 && password.length < 8){
		errorPass.innerHTML = "Password Should Be Minimum 8 Characters!";
		userPass.style.border = "1px solid red";
		errorPass.style.color = "red";
		error = true;
	} else{
		errorPass.innerHTML = "";
		userPass.style.border = "1px solid green";
		errorPass.style.color = "";
	}

	// confirm password validation
	if(confirmPassword.length == 0){
		errorConfirmPass.innerHTML = "Enter Password!";
		userConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	}else if(confirmPassword.length > 0 && confirmPassword.length < 8){
		errorConfirmPass.innerHTML = "Password Should Be Minimum 8 Characters!";
		userConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	} else{
		errorConfirmPass.innerHTML = "";
		userConfirmPass.style.border = "1px solid green";
		errorConfirmPass.style.color = "";
	}

	// check equality of password and confirm password
	if(password !== confirmPassword){
		passwordMismatch.innerHTML = "Password and Confirm Password Should Be Same!";
		passwordMismatch.style.color = "red";
		userPass.style.border = "1px solid red";
	    userConfirmPass.style.border = "1px solid red";
		errorConfirmPass.style.color = "red";
		error = true;
	}else{
		passwordMismatch.innerHTML = "";
	}


	if(error){
		return false;
	}
}