const menuIcon = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.nav-menu-hamburguer');

menuIcon.addEventListener('click', () => {
    console.log("fui clicado");
    navMenu.classList.toggle('active');

});
