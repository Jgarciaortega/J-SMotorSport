

function createNewImage(){

    const images = document.getElementById('carImages');

    const newImage = document.createElement('input');
    newImage.classList.add('form-control','mt-2');
    newImage.setAttribute('type','file');
    images.appendChild(newImage);
}


function init(){

  document.getElementById('btn-addImage').addEventListener('click', createNewImage);

}


window.addEventListener('load', init);