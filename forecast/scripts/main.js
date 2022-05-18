// Variables
let forecastForm = document.querySelector('.forecast-form');
let projectionForm = document.querySelector('.projection-form');
let modalBtn = document.querySelector('.modal-trigger');
let projectModal = document.querySelector('.projection');



// Event Listeners

modalBtn.addEventListener('click', toggleModal);
projectModal.addEventListener('click', arrModal);

// functions

function toggleModal()
{
    forecastForm.style.display = forecastForm.style.display === "block" ? "none" : "block"; 
};

function arrModal()
{
    projectionForm.style.display = projectionForm.style.display === "block" ? "none" : "block"; 
};