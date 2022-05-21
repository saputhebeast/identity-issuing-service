function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

function validateApplication(){

    let error = false;

    let name = document.forms["license-apply-form"]["license_name"].value;
    let address = document.forms["license-apply-form"]["license_address"].value;
    let type = document.forms["license-apply-form"]["license-type"].value;
	let photo = document.getElementById("license-photo");
    let nic = document.getElementById("license-nic");
    let birthCertificate = document.getElementById("license-birth");
    let medical = document.getElementById("license-medical");

    let messageName = document.getElementById("error-name");
    let messageAddress = document.getElementById("error-address");
    let messageType = document.getElementById("error-type");
    let messagePhoto = document.getElementById("error-photo");
    let messageNIC = document.getElementById("error-nic");
    let messageBirthCertificate = document.getElementById("error-birth");
    let messageMedical = document.getElementById("error-medical");
    
    let addName = document.getElementById("license-name");
    let addAddress = document.getElementById("license-address");
    let addType = document.getElementById("license-type");
    let addPhoto = document.getElementById("license-photo");
    let addNIC = document.getElementById("license-nic");
    let addBirthCertificate = document.getElementById("license-birth");
    let addMedical = document.getElementById("license-medical");


    // validation of name
	if(name.length == 0){
		messageName.innerHTML = "Enter Applicant Name!";
		addName.style.border = "1px solid red";
		messageName.style.color = "red";
		error = true;
	}else{
		messageName.innerHTML = "";
		addName.style.border = "1px solid green";
		messageName.style.color = "";
	}

    // validation of address
	if(address.length == 0){
		messageAddress.innerHTML = "Enter Applicant Address!";
		addAddress.style.border = "1px solid red";
		messageAddress.style.color = "red";
		error = true;
	}else{
		messageAddress.innerHTML = "";
		addAddress.style.border = "1px solid green";
		messageAddress.style.color = "";
	}

    // validation of type
	if(type == 0){
		messageType.innerHTML = "Enter Applicant License Type!";
		addType.style.border = "1px solid red";
		messageType.style.color = "red";
		error = true;
	}else{
		messageType.innerHTML = "";
		addType.style.border = "1px solid green";
		messageType.style.color = "";
	}

    // validation of photo
	if(photo.files.length == 0){
		messagePhoto.innerHTML = "Upload Applicant Photo!";
		messagePhoto.style.color = "red";
		addPhoto.border = "1px solid red";
		error = true;
	}else{
		messagePhoto.innerHTML = "";
		messagePhoto.style.color = "";
		addPhoto.border = "1px solid green";
	}

    // validation of nic
	if(nic.files.length == 0){
		messageNIC.innerHTML = "Upload Applicant NIC!";
		messageNIC.style.color = "red";
		addNIC.border = "1px solid red";
		error = true;
	}else{
		messageNIC.innerHTML = "";
		messageNIC.style.color = "";
		addNIC.border = "1px solid green";
	}

    // validation of birth certificate
	if(birthCertificate.files.length == 0){
		messageBirthCertificate.innerHTML = "Upload Applicant Birth Certificate!";
		messageBirthCertificate.style.color = "red";
		addBirthCertificate.border = "1px solid red";
		error = true;
	}else{
		messageBirthCertificate.innerHTML = "";
		messageBirthCertificate.style.color = "";
		addBirthCertificate.border = "1px solid green";
	}

    // validation of medical report
	if(medical.files.length == 0){
		messageMedical.innerHTML = "Upload Applicant Medical Report!";
		messageMedical.style.color = "red";
		addMedical.border = "1px solid red";
		error = true;
	}else{
		messageMedical.innerHTML = "";
		messageMedical.style.color = "";
		addMedical.border = "1px solid green";
	}

    if(error){
        return false;
    }
}