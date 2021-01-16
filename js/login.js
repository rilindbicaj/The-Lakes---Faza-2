var username = document.getElementsByName("UsernameField")[0];
var password = document.getElementsByName("PasswordField")[0];
var login = document.getElementsByName("LogIn")[0];
var message = document.getElementById("message");

function validateLogin() {
    
validateUser(username.value, username) //so they glow regardless of the &&
validatePassword(password.value, password);
if(validateUser(username.value, username) && validatePassword(password.value, password)) return true;

}