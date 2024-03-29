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

    // Ouverture et femeture du carousel
    let buttonCarousel = document.getElementsByClassName("buttonCarousel");
    let ModalCarousel = document.getElementsByClassName("ModalCarousel");

    for (const button of buttonCarousel) {
        button.addEventListener("click", (event) => {
            for (const test of ModalCarousel) {
                if (event.target.id === test.id) {
                    test.style.display = "block";

                    let Close =
                        document.getElementsByClassName("closeCarousel");
                    for (const iterator of Close) {
                        iterator.addEventListener("click", (event) => {
                            test.style.display = "none";
                        });
                    }
                }
            }
        });
    }
}
listener();
