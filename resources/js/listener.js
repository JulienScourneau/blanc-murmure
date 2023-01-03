export function listener() {
    let mobileMenu = document.getElementById("navbar__mobile__menu");
    let Menu = document.getElementById("navigation");
    mobileMenu.addEventListener("click", (event) => {
        Menu.style.display !== "none"
            ? (Menu.style.display = "none")
            : (Menu.style.display = "flex");
    });

    let menuDeroulantMobile = document.getElementById("menuDeroulantMobile");
    let projectMobile = document.getElementById("projectMobile");
    projectMobile.addEventListener("click", (event) => {
        menuDeroulantMobile.style.display !== "none"
            ? (menuDeroulantMobile.style.display = "none")
            : (menuDeroulantMobile.style.display = "block");
    });
    let menuDeroulant = document.getElementById("menuDeroulant");
    let project = document.getElementById("project");
    project.addEventListener("mouseover", (event) => {
        menuDeroulant.style.display = "block";
    });
    project.addEventListener("mouseout", (event) => {
        menuDeroulant.style.display = "none";
    });

    let collaborater__box =
        document.getElementsByClassName("collaborater__box");

    for (const box of collaborater__box) {
        box.addEventListener("mouseover", (event) => {
            let text = box.children[1];
            text.style.display = "block";
        });
        box.addEventListener("mouseout", (event) => {
            let text = box.children[1];
            text.style.display = "none";    
        });
    }

    let buttonCarousel = document.getElementsByClassName("buttonCarousel");
    let carouselModal = document.getElementById("carouselModal");
    for (const button of buttonCarousel) {
        button.addEventListener("click", (event) => {
            carouselModal.style.display = "block";

            let TitleName = event.path[2].children[1].children[0].textContent;
            console.log(TitleName);
            console.log(event.pointerId);
        });
    }

    let closeCarousel = document.getElementById("closeCarousel");
    closeCarousel.addEventListener("click", (event) => {
        carouselModal.style.display = "none";
    });
}
listener();
