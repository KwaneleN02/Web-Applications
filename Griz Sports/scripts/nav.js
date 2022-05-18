let openMenu = document.querySelector('.open-ham');
let closeMenu = document.querySelector('.close-ham');
let menu = document.querySelector('.mobile-nav-container');
let logoSection = document.querySelector('.logo');


// Event Listeners

openMenu.addEventListener('click', toggleMenu);
closeMenu.addEventListener('click', toggleMenu);


// Functions
function toggleMenu()
{
  logoSection.style.display = logoSection.style.display ===  'none' ? 'flex' : 'none';
  menu.style.display = menu.style.display ===  'flex' ? 'none' : 'flex'; 
  openMenu.style.display = openMenu.style.display ===  'none' ? 'flex' : 'none';
  closeMenu.style.display = closeMenu.style.display ===  'flex' ? 'none' : 'flex';
   
}