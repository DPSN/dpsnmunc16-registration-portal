function name_validate(text) {
    var x = text.charAt(0);
    if("A" <= x && x <= "Z") {
        return true;
    }
    return false;
}

function email_validate(email) {
    var flag1 = false;
    var flag2 = false;
    for(var i = 0; i < email.length; i++) {
        if(email.charAt(i) == ".") flag1 = true;
        if(email.charAt(i) == "@") flag2 = true;
    }
    return flag1 && flag2;
}

function form_validate() {
    var fname = document.forms["ebform"]["firstname"].value;
    var lname = document.forms["ebform"]["lastname"].value;
    var email = document.forms["ebform"]["email"].value;
    var num = document.forms["ebform"]["number"].value;
    var insti = document.forms["ebform"]["institution"].value;
    
    if(fname == null || fname == "" || name_validate(fname) == false || lname == null || lname == "" || name_validate(lname) == false) {
        alert("Invalid Name.");
        return false;
    }
    
    if(email == null || email == "" || email_validate(email) == false) {
        alert("Invalid e-Mail.");
        return false;
    }
    
    if(num == null || num == "" || num.length != 10) {
        alert("Invalid Contact Number.");
        return false;
    }
    
    if(insti == null || insti == "" || name_validate(insti) == false) {
        alert("Invalid Institution Name.");
        return false;
    }
    
    return true;
}