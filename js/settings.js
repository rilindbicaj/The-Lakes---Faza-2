let theme = document.getElementById("theme");
let themeOptions = document.querySelectorAll("#theme option");
console.log(theme.selectedIndex);

// Preview theme
// Extremely bloated but too complicated with AJAX

theme.addEventListener("change", function() {

    switch(theme.options[theme.selectedIndex].text) {
        case "Dark" :
            changecss(".paperBackground","background-image","url(../media/transpaper.png)");
            changecss(".bordersall, .bordersnotop, .bordersnobottom","border","solid 5px #b3b3b36e;");
            changecss("*","color","#989494;");
            changecss(".imageBackground","background-image","url(../media/backgr.gif)");
            changecss(".look","filter","none");
            console.log("let there be dark");
            break;
        case "Light" :
            changecss(".paperBackground","background-image","url(../media/transpaperLightMode.png)");
            changecss(".bordersall, .bordersnotop, .bordersnobottom","border","solid 5px #202020;");
            changecss("*","color","#202020;");
            changecss(".imageBackground","background-image","url(../media/backgrLight.gif)");
            changecss(".look","filter","invert(1)");
            break;
    }

    ajaxTheme();

});

function ajaxTheme() {

    let indexTheme;

    if(theme.options[theme.selectedIndex].text == "Dark") indexTheme = 0;
    else indexTheme = 1;

    let http = new XMLHttpRequest();
    http.open("POST", "phpscripts/changeTheme.php", true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {

        if(http.readyState == 4 && http.status == 200) console.log(http.responseText);

    }
    
    http.send("theme="+indexTheme);

}

/////////////////////////
////Show users button////
/////////////////////////

let users = document.getElementById("users");

function showUsersColumn() {

    if(users.classList.contains("heightMax")) {

        users.classList.remove("heightMax");
        users.classList.remove("bordersall");

    }

    else {

        users.classList.add("heightMax");
        users.classList.add("bordersall");

    }

}

///////////////////////////////
////Profile picture upload////
/////////////////////////////

function upload() {

    console.log("HELLO");

    let http = new XMLHttpRequest();
    http.open("POST", "phpscripts/")

}