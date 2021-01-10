var inputList = document.getElementsByTagName("input"); //1,2,3,4 are Username, Pass, Conf, Email, 5 is SUBMIT

inputList[4].addEventListener("click", function (event) {

    validateUser(inputList[0].value, inputList[0]);
    validatePassword(inputList[1].value, inputList[1]);
    validateConfirm(inputList[2].value, inputList[2]);
    validateEmail(inputList[3].value, inputList[3]);
    validateRegister();

})


function validateRegister() {

    if (!checkAll()) {

        alert("Please fill out the form entirely."); //Make this into a red paragraph when I have time 
        
    }

    else {

        alert("You've registered successfully! You'll be redirected to the home screen."); //This too
        //createUser(); to be continued with PHP
        window.location.replace("index.php");

    }

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