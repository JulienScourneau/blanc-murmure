export function listener() {
    let mobileMenu = document.getElementById("navbar__mobile__menu");
    let Menu = document.getElementById("navigation");

    mobileMenu.addEventListener("click", (event) => {
        Menu.style.display !== "none"
            ? (Menu.style.display = "none")
            : (Menu.style.display = "flex");
    });
}
listener();
