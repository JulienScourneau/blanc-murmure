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

    // let collaborater__text =
    //     document.getElementsByClassName("collaborater__text");
    // let collaborater__img =
    //     document.getElementsByClassName("collaborater__img");

    // for (const img of collaborater__img) {
    //     img.addEventListener("click", (event) => {
    //         console.log(event.target);
    //     });
    // }
    // collaborater__img.addEventListener("click", (event) => {
    //     console.log("aze");
    //     collaborater__text.style.display !== "none"
    //         ? (collaborater__text.style.display = "none")
    //         : (collaborater__text.style.display = "block");
    // });
}
listener();
