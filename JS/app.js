window.onscroll = () =>{scrollFunction()};

var navbar = document.getElementById("search");
var sticky = navbar.offsetTop;
function scrollFunction() {
    if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
    } else {
    navbar.classList.remove("sticky");
    }
}