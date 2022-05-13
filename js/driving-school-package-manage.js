// https://stackoverflow.com/questions/175739/how-can-i-check-if-a-string-is-a-valid-number
function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

function validateForm(){
    let package_name = document.forms["package-add-form"]["package_name"].value;
	let package_price = document.forms["package-add-form"]["package_price"].value;
    let package_duration = document.forms["package-add-form"]["package_duration"].value;
	let package_description = document.forms["package-add-form"]["package_description"].value;
	let package_image = document.getElementById("package_image");

    let messageName = document.getElementById("error-name");
	let messagePrice = document.getElementById("error-price");
    let messageDuration = document.getElementById("error-duration");
    let messageDescription = document.getElementById("error-description");
	let messageImage = document.getElementById("error-image");
    
    let addName = document.getElementById("package_name");
    let addPrice = document.getElementById("package_price");
    let addDuration = document.getElementById("package_duration");
    let addDescription = document.getElementById("package_description");
	let addImage = document.getElementById("package_image");

    let error = false;

    // console.log(package_name);
    // console.log(package_price);
    // console.log(package_duration);
    // console.log(package_description);

    // validation of name
	if(package_name.length == 0){
		messageName.innerHTML = "Enter Package Name!";
		addName.style.border = "1px solid red";
		messageName.style.color = "red";
		error = true;
	}else{
		messageName.innerHTML = "";
		addName.style.border = "1px solid green";
		messageName.style.color = "";
	}

    // validation of price
	if(package_price.length == 0){
		messagePrice.innerHTML = "Enter Package Price!";
		addPrice.style.border = "1px solid red";
		messagePrice.style.color = "red";
		error = true;
	}else if(!isNumeric(package_price)){
        messagePrice.innerHTML = "Enter Valid Package Price!";
		addPrice.style.border = "1px solid red";
		messagePrice.style.color = "red";
		error = true;
    }else{
		messagePrice.innerHTML = "";
		addPrice.style.border = "1px solid green";
		messagePrice.style.color = "";
	}

    // validation of duration
	if(package_duration.length == 0){
		messageDuration.innerHTML = "Enter Package Duration!";
		addDuration.style.border = "1px solid red";
		messageDuration.style.color = "red";
		error = true;
	}else{
		messageDuration.innerHTML = "";
		addDuration.style.border = "1px solid green";
		messageDuration.style.color = "";
	}

    // validation of description
	if(package_description.length == 0){
		messageDescription.innerHTML = "Enter Package Name!";
		addDescription.style.border = "1px solid red";
		messageDescription.style.color = "red";
		error = true;
	}else{
		messageDescription.innerHTML = "";
		addDescription.style.border = "1px solid green";
		messageDescription.style.color = "";
	}

	// validation of file
	if(package_image.files.length == 0){
		messageImage.innerHTML = "Upload Image!";
		messageImage.style.color = "red";
		addImage.border = "1px solid red";
		error = true;
	}else{
		messageImage.innerHTML = "";
		messageImage.style.color = "";
		addImage.border = "1px solid green";
	}
    

    if(error){
        return false;
    }
}


function validateImageForm(){
	let package_image = document.getElementById("package_image");
	let messageImage = document.getElementById("error-image");
	let addImage = document.getElementById("package_image");

	let error = false;

	// validation of file
	if(package_image.files.length == 0){
		messageImage.innerHTML = "Upload Image!";
		messageImage.style.color = "red";
		addImage.border = "1px solid red";
		error = true;
	}else{
		messageImage.innerHTML = "";
		messageImage.style.color = "";
		addImage.border = "1px solid green";
	}

	if(error){
		return false;
	}
}