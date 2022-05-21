// show password

let clicked = document.getElementById("showPassword");
let oldP = document.getElementById("old");
let newP = document.getElementById("new");
let confirmP = document.getElementById("confirm");

clicked.addEventListener("click", function(){
	if(this.checked){
		oldP.type = "text";
        newP.type = "text";
        confirmP.type = "text";
	}else{
		oldP.type = "password";
        newP.type = "password";
        confirmP.type = "password";
	}
});

function showContent(){
    let checkBox = document.getElementById('deleteAccount');
    let btn = document.getElementById('deleteBtn');
    if(checkBox.checked == true){
        btn.style.display = "block";
    }else{
        btn.style.display = "none";
    }
}

function validatePassChangeForm(){
    let error = false;
    let password = document.forms["changePassword"]["currentPassword"].value;
    let newPassword = document.forms["changePassword"]["newPassword"].value;
    let confirmPassword = document.forms["changePassword"]["confirmNewPassword"].value;

    let messagePass = document.getElementById("error-pass");
    let messageNewPass = document.getElementById("error-new-pass");
    let messageNewPassConfirm = document.getElementById("error-new-confirm-pass");
    let messageNotSame = document.getElementById("error-not-same");

    let changePass = document.getElementById("old");
    let changeNewPass = document.getElementById("new");
    let changeNewPassConfirm = document.getElementById("confirm");

    // console.log(password);
    // console.log(newPassword);
    // console.log(confirmPassword);

    // current password
    if(password.length == 0){
		messagePass.innerHTML = "Enter Password!";
		changePass.style.border = "1px solid red";
		messagePass.style.color = "red";
		error = true;
	}else if(password.length > 0 && password.length < 8){
		messagePass.innerHTML = "Password Should Be Minimum 8 Characters!";
		changePass.style.border = "1px solid red";
		messagePass.style.color = "red";
		error = true;
	} else{
		messagePass.innerHTML = "";
		changePass.style.border = "1px solid green";
		messagePass.style.color = "";
	}

    // new password
    if(newPassword.length == 0){
		messageNewPass.innerHTML = "Enter New Password!";
		changeNewPass.style.border = "1px solid red";
		messageNewPass.style.color = "red";
		error = true;
	}else if(newPassword.length > 0 && newPassword.length < 8){
		messageNewPass.innerHTML = "Password Should Be Minimum 8 Characters!";
		changeNewPass.style.border = "1px solid red";
		messageNewPass.style.color = "red";
		error = true;
	}else{
		messageNewPass.innerHTML = "";
		changeNewPass.style.border = "1px solid green";
		messageNewPass.style.color = "";
	}

    // new confirm password
    if(confirmPassword.length == 0){
		messageNewPassConfirm.innerHTML = "Confirm New Password!";
		changeNewPassConfirm.style.border = "1px solid red";
		messageNewPassConfirm.style.color = "red";
		error = true;
	}else if(confirmPassword.length > 0 && confirmPassword.length < 8){
		messageNewPassConfirm.innerHTML = "Password Should Be Minimum 8 Characters!";
		changeNewPassConfirm.style.border = "1px solid red";
		messageNewPassConfirm.style.color = "red";
		error = true;
	} else{
		messageNewPassConfirm.innerHTML = "";
		changeNewPassConfirm.style.border = "1px solid green";
		messageNewPassConfirm.style.color = "";
	}

    // check is new password and confirm password same
    // new confirm password
    if(confirmPassword != newPassword){
		messageNotSame.innerHTML = "Not Match New Passwords!";
        messageNotSame.style.color = "red";
        changeNewPass.style.border = "1px solid red";
        changeNewPassConfirm.style.border = "1px solid red";
		error = true;
	}else if((confirmPassword != "" && newPassword != "") && (confirmPassword === newPassword)){
		messageNotSame.innerHTML = "";
        messageNotSame.style.color = "";
        changeNewPass.style.border = "1px solid green";
        changeNewPassConfirm.style.border = "1px solid green";
	}

    if(error){
        return false;
    }
}

// https://stackoverflow.com/questions/175739/how-can-i-check-if-a-string-is-a-valid-number
function isNumeric(n) {
	return !isNaN(parseFloat(n)) && isFinite(n);
}

function validateUpdate(){
	let error = false;

	let updateName = document.forms["update-account-form"]["school-name"].value;
	let updateEmail = document.forms["update-account-form"]["email"].value;
	let updatePhoneNumber = document.forms["update-account-form"]["phone-number"].value;
	let updateAddress = document.forms["update-account-form"]["school_address"].value;
	let updateDescription = document.forms["update-account-form"]["school_description"].value;

	let changeName = document.getElementById("school-name");
	let changeEmail = document.getElementById("email");
	let changePhone = document.getElementById("phone-number");
	let changeAddress = document.getElementById("school_address");
	let changeDescription = document.getElementById("school_description");

	let messageName = document.getElementById("error-name");
	let messageEmail = document.getElementById("error-email");
	let messagePhone = document.getElementById("error-phone");
	let messageAddress = document.getElementById("error-address");
	let messageDescription = document.getElementById("error-description");

	// driving school name- update
	if (updateName.length != 0) {
		messageName.innerHTML = "";
		changeName.style.border = "1px solid green";
		messageName.style.color = "";
	} else {
		messageName.innerHTML = "Enter Driving School Name!";
		changeName.style.border = "1px solid red";
		messageName.style.color = "red";
		error = true;
	}
	
	const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	// email validation
	if(updateEmail.length == 0){
		messageEmail.innerHTML = "Enter Email!";
		changeEmail.style.border = "1px solid red";
		messageEmail.style.color = "red";
		error = true;
	}else if(!String(updateEmail).toLocaleLowerCase().match(re)){
		messageEmail.innerHTML = "Invalid Email!";
		changeEmail.style.border = "1px solid red";
		messageEmail.style.color = "red";
		error = true;
	}else{
		messageEmail.innerHTML = "";
		changeEmail.style.border = "1px solid green";
		messageEmail.style.color = "";
	}

	// phone number check
	if(updatePhoneNumber.length == 0){
		messagePhone.innerHTML = "Enter Phone Number!";
		changePhone.style.border = "1px solid red";
		messagePhone.style.color = "red";
		error = true;
	}else if(updatePhoneNumber.length != 11){
		messagePhone.innerHTML = "Invalid Phone Number!";
		changePhone.style.border = "1px solid red";
		messagePhone.style.color = "red";
		error = true;
	}else if(!isNumeric(updatePhoneNumber)){
		messagePhone.innerHTML = "Please Enter Digits Only!";
		changePhone.style.border = "1px solid red";
		messagePhone.style.color = "red";
		error = true;
	}else{
		messagePhone.innerHTML = "";
		changePhone.style.border = "1px solid green";
		messagePhone.style.color = ""
	}

	if(updateAddress.length == 0){
		messageAddress.innerHTML = "Enter Phone Number!";
		changeAddress.style.border = "1px solid red";
		messageAddress.style.color = "red";
		error = true;
	}else{
		messageAddress.innerHTML = "";
		changeAddress.style.border = "1px solid green";
		messageAddress.style.color = ""
	}

	if(updateDescription.length == 0){
		messageDescription.innerHTML = "Enter Phone Number!";
		changeDescription.style.border = "1px solid red";
		messageDescription.style.color = "red";
		error = true;
	}else{
		messageDescription.innerHTML = "";
		changeDescription.style.border = "1px solid green";
		messageDescription.style.color = ""
	}

	if(error){
		return false;
	}
}