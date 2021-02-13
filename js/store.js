let messageBox = document.getElementsByClassName("message")[0];
let message = document.querySelector(".message p");

function addToCart() { //Adds product to cart if it doesn't already exist

    let productID = (event.target.parentNode.id);

    let request = new XMLHttpRequest();
    request.open('POST', 'phpscripts/Cart/verifyProduct.php', true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.onreadystatechange = function() {

        if(request.readyState == 4 && request.status == 200) {

            showMessage(request.responseText);

        }

    }

    request.send("productID="+productID); //$_POST['productID']

}

function showMessage(bool) {

    messageBox.classList.add("show");

    if(bool == "false") {

        message.innerHTML = "ADDED TO CART!";
        messageBox.style.backgroundColor = "#badc58"; //ngjyra e gjelbert

    }
   
    else if (bool == "true") {

        message.innerHTML = "PRODUCT ALREADY IN CART!";
        messageBox.style.backgroundColor = "#eb4d4b"; //red

    }

    setTimeout(function() {messageBox.classList.remove("show");}, 2000);

}