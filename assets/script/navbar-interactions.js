const navBar = document.querySelector(".navbar");
const hamburger = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");
const navOverlay = document.querySelector(".nav-overlay");

// ajouter ou retirer la classe .active lorsqu'on clique sur nav-toggle
hamburger.addEventListener("click", () => {
    navBar.classList.toggle("active");
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    navOverlay.classList.toggle("active");
})

// retirer la classe .active lorsqu'on clique sur un lien du menu hamburger
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    navBar.classList.remove("active");
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    navOverlay.classList.remove("active");
}))

// déclencher la fonction reset quand on change la taille de la fenêtre
window.onresize = reset;

// retire la classe .active lorsque la fenêtre dépasse les 992px
function reset() {
    if (window.innerWidth >= 992) {
        //laptop ou +
        navBar.classList.remove("active");
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
        navOverlay.classList.remove("active");
    }
    else {
        //mobile
    }

}