//Slideshow

var dots = document.getElementsByClassName("slideDots");
var image = document.getElementById("slideshowImage");
var text = document.getElementById("slideshowText");

for(var i = 0; i < dots.length; i++) {

    dots[i].addEventListener('click', function(event) {

        removeClicked();
        event.target.classList.add("dotsClicked");
        var order = event.target.classList[0]; //The spans have many classes, but their first one is their order number
        image.classList.add("opacityFade");
        text.classList.add("opacityFade");
        setTimeout(function() { changeSlides(order)}, 500);
        
    });

}

function removeClicked() { //Remove clicked effect

    for(var k = 0; k < dots.length; k++) {

        dots[k].classList.remove("dotsClicked");

    }

}

function changeSlides(index) { //too lazy to change the name

    switch(index) {
        case "one":
            image.src = "media/visions.png";
            slideshowText.innerHTML = "New release from Grimes - \"Visions\" out February 2021";
            break;
        case "two":
            image.src = "media/genesis.jpg";
            slideshowText.innerHTML = "Read up on the latest single by Anayoma";
            break;
        case "three":
            image.src = "media/Slide3.jpg";
            slideshowText.innerHTML = "Illustrators you should hire right now";
            break;
        case "four":
            image.src = "media/slide4.png";
            slideshowText.innerHTML = "Tori Amos speaks on \"Scarlet\'s Walk\"";
            break;

    }

    image.classList.remove("opacityFade");
    text.classList.remove("opacityFade");

}