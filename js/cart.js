let messageBox = document.getElementById("message");

function removeFromCart() {

    let productID = event.target.parentNode.id;

    let request = new XMLHttpRequest();
    request.open("POST", "phpscripts/Cart/remove.php", true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.onreadystatechange = function() {

        if(request.readyState == 4 && request.status == 200) {

            showMessage();
            document.getElementById(productID).classList.add("hide");

        }

    }

    request.send("productID="+productID); //$_POST['productID']

}

function showMessage() {

    messageBox.classList.add("show");
    setTimeout(function() {messageBox.classList.remove("show");}, 2000);

}