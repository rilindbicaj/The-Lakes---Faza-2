var passRegx = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z.\d]{8,}$/; //min 8, min 1 uppercase, lowercase, number, . optional

function glow(bool, target) {
    
    if(target == null) {


    }

    else {

        if (bool) {

            target.classList.add("glowgreen");
            target.classList.remove("glowred");
    
        }
    
        else {
    
            target.classList.remove("glowgreen");
            target.classList.add("glowred");
    
        }
    

    }

    
}

function validateEmail(email, target) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(String(email).toLowerCase())) {

        glow(false, target);
        return false;

    }

    else {

        glow(true, target)
        return true;

    }


}

function validateUser(user, target) {

    if (user.length < 5 && user != "") {

        glow(false, target);
        return false;

    }

    else {

        glow(true, target)
        return true;

    }

}

function validatePassword(password, target) {

    if (!password.match(passRegx)) {

        glow(false, target);
        return false;

    }

    else {

        glow(true, target)
        return true;

    }

}

function validateConfirm(confirm, target) {

    if (inputList[1].value != confirm || confirm == "") {

        glow(false, target);
        return false;

    }

    else {

        glow(true, target)
        return true;

    }

}