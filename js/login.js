var username = document.getElementsByName("UsernameField")[0];
var password = document.getElementsByName("PasswordField")[0];
var login = document.getElementsByName("LogIn")[0];
var message = document.getElementById("message");
var form = document.getElementById("loginform");

form.addEventListener("submit", prevent); //prevent form from submitting until ajax is done

function prevent(event) {event.preventDefault();}

function ajaxLogin() {
    
    var http = new XMLHttpRequest();
    var url = 'phpscripts/validatelogin.php'; //what script to execute
    var params = 'username='+username.value+'&password='+password.value; //send parameters to server
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            if(http.responseText == "true") form.submit(); //if response from server is "true" submit form forcefully

            else {

                document.getElementById("error").innerHTML = http.responseText; //else display error and return false - prevent from submitting
                return false;

            }
        }
    }

    http.send(params);

}

function validateLogin() { 

    //if it passes client side validation, go to server side validation
    if (validateUser(username.value, username) && validatePassword(password.value, password)) ajaxLogin();

    //else prevent form from submitting
    else return false;

}