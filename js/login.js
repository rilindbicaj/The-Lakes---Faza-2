var username = document.getElementsByName("UsernameField")[0];
var password = document.getElementsByName("PasswordField")[0];
var login = document.getElementsByName("LogIn")[0];
var message = document.getElementById("message");
var form = document.getElementById("loginform");

form.addEventListener("submit", prevent); //prevent form from submitting until ajax is done

function prevent(event) {event.preventDefault();}

function ajaxLogin() {
    
    var http = new XMLHttpRequest(); //Create XTMLHTTPRequest object - this will handle sending and receiving data from the server
    var url = 'phpscripts/validatelogin.php'; //what script to execute
    var params = 'UsernameField='+username.value+'&PasswordField='+password.value; //send parameters to server in the form of $_POST
    http.open('POST', url, true); 

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); // "im sending you some content pls accept"

    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) { //When the server responds, do something with its response
            
            if(http.responseText == "true") form.submit(); //if response from server is "true" submit form forcefully

            else {

                document.getElementById("error").innerHTML = http.responseText; //else display error and return false - prevent from submitting
                setTimeout(function() { document.getElementById("error").innerHTML = " "}, 2000); //make error message disappear after 2 secs
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