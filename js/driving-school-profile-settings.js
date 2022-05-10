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
	} else{
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
	}else{
		messageNotSame.innerHTML = "";
        messageNotSame.style.color = "";
        changeNewPass.style.border = "1px solid green";
        changeNewPassConfirm.style.border = "1px solid green";
	}

    if(error){
        return false;
    }
}