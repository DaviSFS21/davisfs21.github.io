const mobile_menu = document.querySelector(".mobil-menu");
const nav = document.querySelector("nav");
const navbar_links_items = document.querySelectorAll(".navbar-links li a");
const mainSection = document.querySelector(".main-section");
const header_el = document.querySelector(".header");

//init da biblioteca de elementos responsivos ao scroll do usuário
AOS.init();

//Código para alternar o ícone do site dependendo do tema do navegador
var prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

if (prefersDarkMode) {
    document.getElementById('favicon').href = 'assets/Logo2.png';
}

let mobiel_menu_open = false;

let options = {
  root: null,
  threshold: 0.9,
  rootMargin: "0px",
};

const observer = new IntersectionObserver(function (entries, observer) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      header_el.classList.add("haeder-dark");
      return;
    }

    header_el.classList.remove("haeder-dark");
  });
}, options);

observer.observe(mainSection);

//mobile menue
mobile_menu.addEventListener("click", () => {
  nav.classList.toggle("navbar-links__togle");
  mobile_menu.classList.toggle("open");
  mobiel_menu_open = !mobiel_menu_open;
});

navbar_links_items.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.toggle("navbar-links__togle");
    mobile_menu.classList.toggle("open");
    mobiel_menu_open = false;
  });
});

//Efeito em JS na class .title
var textWrapper = document.querySelector('.title');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.title .letter',
    translateX: [-40,0],
    translateY: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  });