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
    document.getElementById(id_car).classList.add('hide-modal');
    // Ocultar modal
    document.getElementById('modal-dlt-car').classList.remove('show-modal');


}

function confirmDelete() {

    const body = document.querySelector('body');
    id_car = this.previousElementSibling.firstElementChild.value;
    
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


function init() {

    /* LISTENERS */
    let btns_delete = document.getElementsByClassName('dlt-car');

    Array.from(btns_delete).forEach(btn => {
        btn.addEventListener('click', confirmDelete);
    });

}

window.addEventListener('load', init);