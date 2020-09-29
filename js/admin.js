/* Funciones Servidor */
async function postServer(url, data) {

    let body = {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
        }
    };

    const res1 = await fetch(url, body);
    const res2 = await res1.json();

    return res2;

}

async function getServer(url) {

    const res1 = await fetch(url);
    const res2 = await res1.json();

    return res2;

}

async function deleteCar(id_car) {

    let url = '../controllers/app_delete_car.php?id=' + id_car;
    const res = await getServer(url);
    console.log(res);

    // Ocultar coche eliminado
    document.getElementById(id_car).classList.add('hide');
    // Ocultar modal
    document.getElementById('modal-dlt-car').classList.remove('show-modal');


}


async function deleteImg(id_img) {

    let url = '../controllers/app_delete_img.php?id=' + id_img;
    const res = await getServer(url);
    console.log(res);

    // Ocultar imagen eliminada
    document.getElementById('img-' + id_img).classList.add('hide');
    // Ocultar modal
    document.getElementById('modal-dlt-img').classList.remove('show-modal');


}


function confirmDelete() {

    id_car = this.getAttribute('data-id');

    // Mostrar modal
    document.getElementById('modal-dlt-car').classList.add('show-modal');

    // Listeners
    document.getElementById('btn-ok-delete').addEventListener('click', function () {
        deleteCar(id_car);
    });

    document.getElementById('btn-no-delete').addEventListener('click', () => {
        document.getElementById('modal-dlt-car').classList.remove('show-modal');
    });

}

function confirmDeleteImg() {

    id_img = this.getAttribute('id-img');
    console.log('delete img');

    // Mostrar modal
    document.getElementById('modal-dlt-img').classList.add('show-modal');

    // Listeners
    document.getElementById('btn-delete-img').addEventListener('click', function () {
        deleteImg(id_img);
    });

    document.getElementById('btn-noDelete-img').addEventListener('click', () => {
        document.getElementById('modal-dlt-img').classList.remove('show-modal');
    });



}


function init() {

    /* LISTENERS */
    let btns_delete = document.getElementsByClassName('dlt-car');
    let btns_dlt_img = document.getElementsByClassName('dlt-img');

    Array.from(btns_delete).forEach(btn => {
        btn.addEventListener('click', confirmDelete);
    });

    Array.from(btns_dlt_img).forEach(btn => {
        btn.addEventListener('click', confirmDeleteImg);
    });

}

window.addEventListener('load', init);