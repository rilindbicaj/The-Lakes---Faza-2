var menu = document.getElementsByClassName("dotsContent")[0];

function menuShow() {

    if(!menu.classList.contains("show")) { //Show menu

        menu.classList.add("show");

    }

    else {

        menu.classList.remove("show");

    }

}