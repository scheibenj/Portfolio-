let myButton = document.getElementById("scrollTopBtn");

window.onscroll = function() {scrollFunction()};

function scrollFuntion() {
    if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        myButton.style.display = "block";
    } else {
        myButton.style.display = "none";
    }
}

function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}