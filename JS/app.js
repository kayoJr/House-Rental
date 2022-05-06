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

var ham = document.getElementById('ham');
var menu = document.getElementById('menu');
var avatar = document.getElementById('avatar');
var close = document.querySelectorAll('.close');
var second_navbar = document.getElementById('second-nav');

ham.addEventListener("click", ()=>{
        menu.style.display = "block"
     //   body.style.display = "none"
        navbar.style.display = "none"
    })
    
    close.forEach(function (exit) {
        exit.addEventListener("click", () => {
            menu.style.display = "none";
            second_navbar.style.display = "none";
            navbar.style.display = "block"
        });
    })

avatar.addEventListener("click", ()=>{
    second_navbar.style.display = 'block';
})