const openHam = document.querySelector('.open-ham');
const closeHam = document.querySelector('.close-ham');

const navWrapper = document.querySelector('.menu');



openHam.addEventListener('click', navOpen);
closeHam.addEventListener('click', navClose);


function navOpen()
{
    if (openHam)
    {
      navWrapper.style.display = 'flex';
      closeHam.style.display = 'block';
      openHam.style.display = 'none';
    }
  
}

function navClose()
{
    if (closeHam)
    {
      navWrapper.style.display = 'none';
      closeHam.style.display = 'none';
      openHam.style.display = 'block';
    }
  
}