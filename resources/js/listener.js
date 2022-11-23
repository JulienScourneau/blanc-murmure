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
        console.log(menuDeroulant.classList);
        menuDeroulant.style.display !== "none"
            ? (menuDeroulant.style.display = "none")
            : (menuDeroulant.style.display = "block");
    });
}
listener();
