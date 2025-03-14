/* 'as' permet de changer le nom, nomDefault est l'export par défaut                                */
/* Ceci permet d'inporter ici les fichiers necessaires afin de couper le code en plusieurs fichiers */
//import nomDefault, {nomExport1 as newName, nomExport2} from "./assets/scripts/nomFichier.js"


// loading page
const loader = document.querySelector('.loader');


window.addEventListener("load", function () {

    loader.classList.add('fondu-out');
    this.setTimeout(() => {
        loader.style.display = "none";
    }, 400);
    

    /* nav-bar (hamburger) */
    const hamburgerToggler = document.querySelector(".hamburger");
    const navLinksContainer = document.querySelector(".navlinks-container");

    let startX; // Position X au début du touch
    let distance; // Distance de glissement nécessaire pour fermer le menu

    const toggleNav = () => {
        hamburgerToggler.classList.toggle("open");

        const ariaToggle = hamburgerToggler.getAttribute("aria-expanded") === "true" ? "false" : "true";
        hamburgerToggler.setAttribute("aria-expanded", ariaToggle);

        navLinksContainer.classList.toggle("open");
    }
    hamburgerToggler.addEventListener("click", toggleNav);


    /* fermer le menu aux slides vers la gauche */
    document.addEventListener("touchstart", function (e) {
        startX = e.touches[0].clientX;
        distance = 150; // Vous pouvez ajuster cette valeur selon vos besoins
    });
    document.addEventListener("touchmove", function (e) {
        if (startX) {
            const currentX = e.touches[0].clientX;
            const deltaX = startX - currentX;
            // Si le glissement dépasse la distance définie, fermez le menu
            if (deltaX > distance) {
                navLinksContainer.classList.remove("open");
                hamburgerToggler.classList.remove("open");
                startX = null; // Réinitialisez la position de départ
            }

            // Si le glissement dépasse la distance définie dans l'autre sens, ouvrez le menu
            if (deltaX < -distance) {
                navLinksContainer.classList.add("open");
                hamburgerToggler.classList.add("open");
                startX = null; // Réinitialisez la position de départ
            }
        }
    });
    // Réinitialisez la position de départ lorsque le doigt est levé
    document.addEventListener("touchend", function () {
        startX = null;
    });

    
    /* fermer le menu si clic n'importe où sur le document */
    document.addEventListener("click", function (event) {
        // Vérifiez si le clic a eu lieu à l'extérieur du menu
        if (!navLinksContainer.contains(event.target) && !hamburgerToggler.contains(event.target)) {
            // Si c'est le cas, fermez le menu en retirant la classe "open"
            navLinksContainer.classList.remove("open");
            hamburgerToggler.classList.remove("open");
        }
    });



    new ResizeObserver(entries => { //gérer la transition du menu hamburger
        if(entries[0].contentRect.width <= 800){
            navLinksContainer.style.transition = "transform 0.3s ease-out";
        } else {
            navLinksContainer.style.transition = "none";
        }
    }).observe(document.body);


    /* bouton du sroll vers le haut du site + animation nav */
    const header = document.querySelector('#navbar');
    const toTopBtn = document.querySelector(".to-top-btn");
    window.addEventListener("scroll", () => {
        header.classList.toggle("sticky", window.scrollY > 0);

        if(document.documentElement.scrollTop > window.innerHeight * 0.7)
            toTopBtn.classList.add("active");
        else 
            toTopBtn.classList.remove("active");
    });
    toTopBtn.addEventListener("click", () => {
        if (toTopBtn.classList.contains("active")) {
            window.scrollTo({
                top: 0
            });
        }
    });


    /* Chronomètre */
    const text = document.querySelector(".text-chronometre");
    const textHome = document.querySelector(".text-chronometre-home");
    const closeWindow = document.querySelector(".corner-round");
    const chronometre = document.querySelector(".chronometre");

    const getChrono = () => {
        const now = new Date().getTime();
        const countdownDate = new Date("March 27, 2025 11:00:00").getTime();
        const distanceBase = countdownDate - now;

        const days = Math.floor(distanceBase / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distanceBase % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distanceBase % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distanceBase % (1000 * 60)) / 1000);

        // Utilisation de textContent au lieu de innerText
        text.textContent = `${days}j ${hours}h ${minutes}m ${seconds}s`;

        // Vérification de l'URL pour afficher le texte sur la page d'accueil
        if (textHome) {
            textHome.textContent = `${days}j ${hours}h ${minutes}m ${seconds}s`;
        }
    };

    getChrono();

    // Utilisation de const pour setInterval
    const countDownInterval = setInterval(getChrono, 1000);

    // Vérifier si la fenêtre doit être fermée
    const isWindowClosed = localStorage.getItem("isWindowClosed");

    if (isWindowClosed === "true") {
        // Utilisation de const pour les propriétés non modifiées
        chronometre.style.opacity = "0";
        chronometre.style.display = "none";
        closeWindow.style.cursor = "default";
    }

    closeWindow.addEventListener("click", () => {
        chronometre.style.transition = "opacity .6s ease-out";
        chronometre.style.opacity = "0";
        closeWindow.style.cursor = "default";

        this.setTimeout(() => {
            chronometre.style.display = "none";
        }, 600);

        // Enregistrement de l'état de la fenêtre comme fermée dans le localStorage
        localStorage.setItem("isWindowClosed", "true");
    });
});
