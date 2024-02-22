function setError(id, error){
    element = document.getElementById(id);
    element.getElementsByClass('formError')[0].innerHTML = error;
}
function validateForm(){
    var returnVal = true;
    var name = document.forms['studentLogin']["username"].value;
    if(username.length < 13){
        setError("username","Enter valid PRN as username");
        returnVal = false;
    }
    return returnVal;
}