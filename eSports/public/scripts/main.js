

const openNav = document.querySelector('.open-menu'),
        closeNav = document.querySelector('.close-menu'),
        mobileMenu = document.querySelector('.mobile-nav'),
        umLink = document.querySelector('.uofm-mobile'),
        navLinks = document.querySelector('.mobile-links');


// Events
openNav.addEventListener('touchstart',()=>
{   
    openNav.style.display = 'none';
    closeNav.style.display = 'block';
    umLink.style.display = 'block';
    mobileMenu.style.display = 'flex';
});

closeNav.addEventListener('touchstart',()=>
{   
    closeNav.style.display = 'none';
    openNav.style.display = 'block';
    mobileMenu.style.display = 'none';
    navLinks.style.display = 'none';
});