var show = false;

var menu = document.getElementsByClassName("dotsContent")[0];

function menuShow(bool) {

    if(bool == false) { //Show menu

        menu.classList.add("show");
        show = true;

    }

    else {

        menu.classList.remove("show");
        show = false;

    }

}