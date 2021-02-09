let messageBox = document.getElementsByClassName("message")[0];
let message = document.querySelector(".message p");

function addToCart() { //Adds product to cart if it doesn't already exist

    let productID = (event.target.parentNode.id);

    let request = new XMLHttpRequest();
    request.open('POST', 'phpscripts/Cart/verifyProduct.php', true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.onreadystatechange = function() {

        if(http.readyState == 4 && http.status == 200) {

            showMessage(http.responseText);
            if(http.responseText = "true") add(productID);

        }

    }

    http.send("productID="+productID);

}

function add(productID) {

    let request = new XMLHttpRequest();
    request.open("POST", "phpscripts/Cart/add.php", true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.onreadystatechange = function() {

        if(http.readyState == 4 && http.status == 200) console.log("DONE");

    }

    request.send("productID="+productID);

}

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
                setTimeout(function() { document.getElementById("error").innerHTML = " "}, 2000);
                return false;

            }
        }
    }

    http.send(params);

}

function showMessage(bool) {

    messageBox.classList.add("show");

    if(bool == "true") {

        message.innerHTML = "ADDED TO CART!";
        messageBox.style.backgroundColor = "#badc58";

    }
   
    else if (bool == "false") {

        message.innerHTML = "PRODUCT ALREADY IN CART!";
        messageBox.style.backgroundColor = "#eb4d4b";

    }

    setTimeout(function() {messageBox.classList.remove("show");}, 2000);

}