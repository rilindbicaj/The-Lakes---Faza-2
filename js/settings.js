document.getElementById("displayPassword").addEventListener("click", function() {

    document.getElementById("displayPassword").innerHTML = "1171181190";

});

let theme = document.getElementById("theme");
let themeOptions = document.querySelectorAll("#theme option");
console.log(theme.selectedIndex);

// Preview theme
// Extremely bloated but too complicated with AJAX

theme.addEventListener("change", function() {

    switch(theme.selectedIndex) {
        case 0 :
            changecss(".paperBackground","background-image","url(../media/transpaper.png)");
            changecss(".bordersall, .bordersnotop, .bordersnobottom","border","solid 5px #b3b3b36e;");
            changecss("*","color","#989494;");
            changecss(".imageBackground","background-image","url(../media/backgr.gif)");
            changecss(".look","filter","none");
            console.log("let there be dark");
            break;
        case 1 :
            changecss(".paperBackground","background-image","url(../media/transpaperLightMode.png)");
            changecss(".bordersall, .bordersnotop, .bordersnobottom","border","solid 5px #202020;");
            changecss("*","color","#202020;");
            changecss(".imageBackground","background-image","url(../media/backgrLight.gif)");
            changecss(".look","filter","invert(1)");
            break;
    }

});