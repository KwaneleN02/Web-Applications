//Variables here 

//Open and Close hamburger
let openHam = document.querySelector('.open-ham');
let closeHam = document.querySelector('.close-ham');
let logo = document.querySelector('.header-logo');
//Mobile Nav Container
let mobileNavContainer = document.querySelector('.mobile-nav-container');

console.log(openHam);
//Event Listeners here

// Hamburger Buttons
openHam.addEventListener('click', openNav);
closeHam.addEventListener('click', closeNav);

//Functions here

//This is a openNav
function openNav()
{
  if (openHam)
  {
    mobileNavContainer.style.display = 'flex';
    closeHam.style.display = 'block';
    openHam.style.display = 'none';
    logo.style.display = 'none';
  }

}
//This is a close nav function
function closeNav()
{
  if (closeHam)
  {
    closeHam.style.display = 'none';
    mobileNavContainer.style.display = 'none';
    openHam.style.display = 'block';
    logo.style.display = 'block';

  }
}

//AOS initialize
  AOS.init();
