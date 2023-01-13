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
    let ModalCarousel = document.getElementsByClassName("ModalCarousel");
    for (const button of buttonCarousel) {
        button.addEventListener("click", (event) => {
            // Id.style.display = "block";

            let TitleName = event.path[2].children[1].children[0].textContent;
            // console.log(TitleName);
            for (const test of ModalCarousel) {
                if (event.target.id === test.id) {
                    console.log(event.target.id);
                    console.log(ModalCarousel[event.target.id-1].children[0].children[0]);
                    let carousse = ModalCarousel[event.target.id-1];
                    let Close = ModalCarousel[event.target.id-1].children[0].children[0];

                    carousse.style.display !== "none"
                    ? (carousse.style.display = "none")
                    : (carousse.style.display = "block");

                    Close.addEventListener("click", (event) => {
                        carousse.style.display = "none";
                    });
                    
                    
                }
            }
        });
    }

    // let closeCarousel = document.getElementById("closeCarousel");
    // closeCarousel.addEventListener("click", (event) => {
    //     let carousse = corousel[event.target.id-1];
    //     carousse.style.display = "none";
    //     console.log("close");
    // });
}
listener();