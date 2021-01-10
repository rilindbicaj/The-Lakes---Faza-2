var paragraphs = document.querySelectorAll("mainContent p");

for(var v = 0; v < paragraphs.length; v++) {

    paragraphs[v].setTimeout(function() {

        addFade(v);
        
    }, v*1000);

}

function addFade(num) {

    paragraphs[num].classList.add("fadeIn");

}