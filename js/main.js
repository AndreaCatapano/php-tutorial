let isOpen = false;
let img;

document.addEventListener("DOMContentLoaded", function () {
  // Trova tutti gli elementi
  const hamburgerButton = document.getElementById("hamburger-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const headerLink = document.getElementById("header-link");
  const body = document.body;

  if (!hamburgerButton || !mobileMenu) {
    return;
  }

  // Inizializza l'immagine del hamburger button
  img = hamburgerButton.querySelector("img");

  // Gestione menu mobile
  hamburgerButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("active");
    isOpen = !isOpen;
    updateIcon();
    body.classList.toggle("mobile-menu-open");
  });

  // Gestione click sui link del menu mobile
  const mobileLinks = mobileMenu.querySelectorAll("a");

  mobileLinks.forEach((link) => {
    link.addEventListener("click", function () {
      mobileMenu.classList.remove("active");
      body.classList.remove("mobile-menu-open");
      isOpen = false;
      updateIcon();
    });
  });

  // Gestione resize window
  window.addEventListener("resize", function () {
    if (window.innerWidth > 808 && mobileMenu.classList.contains("active")) {
      mobileMenu.classList.remove("active");
      body.classList.remove("mobile-menu-open");
      isOpen = false;
      updateIcon();
    }
  });
});

// Funzione per aggiornare l'icona basata sullo stato
function updateIcon() {
  if (img) {
    if (isOpen) {
      img.src = "/wp-content/themes/test-andreacatapano/img/icon_close.svg";
    } else {
      img.src = "/wp-content/themes/test-andreacatapano/img/icon_menu.svg";
    }
  }
}
