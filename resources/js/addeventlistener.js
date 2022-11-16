export function listener() {
    let project = document.getElementById("navbar__project");
    let deroulant = document.getElementById("navbar__deroulant");

    project.addEventListener("mouseover", (event) => {
        deroulant.style.display = "block";
    });
}
