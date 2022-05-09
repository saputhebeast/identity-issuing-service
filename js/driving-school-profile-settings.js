function showContent(){
    let checkBox = document.getElementById('deleteAccount');
    let btn = document.getElementById('deleteBtn');
    if(checkBox.checked == true){
        btn.style.display = "block";
    }else{
        btn.style.display = "none";
    }
}