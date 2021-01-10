var username = document.getElementsByName("UsernameField")[0];
var password = document.getElementsByName("PasswordField")[0];
var login = document.getElementsByName("LogIn")[0];

console.log(username.value);

login.addEventListener("click", function() {

    if(validateLogin()) {

        alert("Log in successful!");
        window.replace("index.php");

    }

    else {

        alert("Please fill in your data");

    }

});

function validateLogin() {

    validateUser(username.value, username) //so they glow regardless of the &&
    validatePassword(password.value, password);
    return (validateUser(username.value, username) && validatePassword(password.value, password));


}