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

    const res = await fetch(url);
    const data = await res.json();

    return data;

}

async function deleteServer(url) {

    let body = {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        }
    };
    const res = await fetch(url, body);
    const data = await res.json();

    return data;

}




function editCar(){

    
}

function deleteCar(){

    alert('delete-car');
}


function init() {

    /* LISTENERS */
    let btns_edit = document.getElementsByClassName('edit-car');
    let btns_delete =  document.getElementsByClassName('dlt-car');
    
    // Array.from(btns_edit).forEach(btn => {
    //     btn.addEventListener('click', editCar);
    // });

    Array.from(btns_delete).forEach(btn => {
        btn.addEventListener('click', deleteCar);
    });

}

window.addEventListener('load', init);