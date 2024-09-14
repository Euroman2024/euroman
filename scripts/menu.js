// JavaScript para manejar la apertura/cierre del menú en dispositivos pequeños
const menuToggle = document.querySelector('.menu-toggle');
const menuList = document.querySelector('nav ul');

menuToggle.addEventListener('click', () => {
  menuList.classList.toggle('open');
});
