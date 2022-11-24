export function listener() {
    let mobileMenu = document.getElementById("navbar__mobile__menu");
    let Menu = document.getElementById("navigation");
    mobileMenu.addEventListener("click", (event) => {
        Menu.style.display !== "none"
            ? (Menu.style.display = "none")
            : (Menu.style.display = "flex");
    });

    let menuDeroulant = document.getElementById("menuDeroulant");
    let project = document.getElementById("project");
    project.addEventListener("click", (event) => {
        menuDeroulant.style.display !== "none"
            ? (menuDeroulant.style.display = "none")
            : (menuDeroulant.style.display = "block");
    });

    let collaborater__box =
        document.getElementsByClassName("collaborater__box");

    for (const box of collaborater__box) {
        box.addEventListener("click", (event) => {
            let text = box.children[1];
            text.style.display !== "none"
                ? (text.style.display = "none")
                : (text.style.display = "block");
        });
    }
}
listener();
