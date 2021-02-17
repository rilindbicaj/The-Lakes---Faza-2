var inputList = document.getElementsByTagName("input"); //1,2,3,4 are Username, Pass, Conf, Email, 5 is SUBMIT
var message = document.getElementById("message");
var username = document.getElementsByName("UsernameField")[0];
var password = document.getElementsByName("PasswordField")[0];
var email = document.getElementsByName("EmailField")[0];
var form = document.getElementById("registerform");

form.addEventListener("submit", prevent); //prevent form from submitting until ajax is done

function prevent(event) {event.preventDefault();}

function ajaxRegister() {
    
    var http = new XMLHttpRequest();
    var url = 'phpscripts/validateregister.php'; //what script to execute
    var params = 'UsernameField='+username.value+'&EmailField='+email.value; //send parameters to server
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            
            if(http.responseText == "true") form.submit(); //if response from server is "true" submit form forcefully

            else {

                message.innerHTML = http.responseText; //else display error and return false - prevent from submitting
                setTimeout(function() { message.innerHTML = " "}, 2000); //remove error message after 2 secs
                return false; //prevent form from submitting

            }
        }
    }

    http.send(params);

}

inputList[4].addEventListener("click", function (event) {

    validateUser(inputList[0].value, inputList[0]);
    validatePassword(inputList[1].value, inputList[1]);
    validateConfirm(inputList[2].value, inputList[2]);
    validateEmail(inputList[3].value, inputList[3]);

})

function validateRegister() {

    if (checkAll()) { 
        
        console.log("YES");
        ajaxRegister();

    }

    else return false;

}

for (var j = 0; j < inputList.length; j++) { //Nuk eshte perfekt por ska kohe ta implementojme perfekt

    inputList[j].addEventListener("keyup", function (event) {

        var target = event.target;
        var inputName = event.target.name;
        var inputValue = event.target.value;

        console.log(inputValue);

        switch (inputName) {

            case "UsernameField":
                validateUser(inputValue, target);
                break;

            case "PasswordField":
                validatePassword(inputValue, target);
                break;

            case "ConfirmPasswordField":
                validateConfirm(inputValue, target);
                break;

            case "EmailField":
                validateEmail(inputValue, target);
                break;


        }


    })

}

function checkAll() {

    return validateUser(inputList[0].value, null) && validatePassword(inputList[1].value, null) && validateConfirm(inputList[2].value, null) && validateEmail(inputList[3].value, null);

}