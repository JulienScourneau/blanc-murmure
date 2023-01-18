let menu = document.getElementById("navbar__mobile__menu");
menu.style.backgroundColor = "";

window.onscroll = function scroll(event) {
    var scroll = window.pageYOffset;
    if (scroll > 50) {
        menu.style.backgroundColor = "#FFFFFF";
    } else if (scroll < 50) {
        menu.style.backgroundColor = "";
    }
};
export default scroll();
