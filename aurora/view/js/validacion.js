function validar(){
    let descripcion = document.getElementById('txtdescripcion');
    let cantidad = document.getElementById('txtcantidad');
    let referencia = document.getElementById('txtreferencia');
    let disponible = document.getElementById('txtdisponible');

    if (descripcion.value == ""){
        descripcion.style.borderColor ="red";
    }
    if (cantidad.value == ""){
        cantidad.style.borderColor ="red";
    }
    if (referencia.value == ""){
        referencia.style.borderColor ="red";
    }
    if (disponible.value == ""){
        disponible.style.borderColor ="red";
    }
}