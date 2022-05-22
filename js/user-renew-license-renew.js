
function validateApplication(){
    let error = false;

    // get values from input fields
    let cardNumber = document.forms["license-renew-pay-form"]["card_number"].value;
    let cardExpire = document.forms["license-renew-pay-form"]["card_expire"].value;
    let cardCVV = document.forms["license-renew-pay-form"]["card_cvv"].value;

    // input fields
    let loginNumber = document.getElementById("card-number");
    let loginExpire = document.getElementById("card-expire");
    let loginCVV = document.getElementById("card-cvv");

    // error paragraphs
    let errorNumber = document.getElementById("error-number");
    let errorExpire = document.getElementById("error-expire");
    let errorCVV = document.getElementById("error-cvv");
    
    // card number validation
    if (cardNumber == '4440648190661567') {
        errorNumber.innerHTML = "";
        loginNumber.style.border = "1px solid green";
        errorNumber.style.color = "";
    }else{
        errorNumber.innerHTML = "Enter valid card number!";
        loginNumber.style.border = "1px solid red";
        errorNumber.style.color = "red";
        error = true;
    }

    if (cardExpire == '10/27') {
        errorExpire.innerHTML = "";
        loginExpire.style.border = "1px solid green";
        errorExpire.style.color = "";
    }else{
        errorExpire.innerHTML = "Enter valid expire date!";
        loginExpire.style.border = "1px solid red";
        errorExpire.style.color = "red";
        error = true;
    }

    if (cardCVV == '345') {
        errorCVV.innerHTML = "";
        loginCVV.style.border = "1px solid green";
        errorCVV.style.color = "";
    }else{
        errorCVV.innerHTML = "Enter valid cvv number!";
        loginCVV.style.border = "1px solid red";
        errorCVV.style.color = "red";
        error = true;
    }
    
    if(error){
        return false;
    }
}