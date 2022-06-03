function validar(e){
    e.preventDefault();

    let descripcion = document.getElementById('txtdescripcion');
    let cantidad = document.getElementById('txtcantidad');
    let referencia = document.getElementById('txtreferencia');
    let disponible = document.getElementById('txtdisponible');
    let formulario = document.getElementById('formulario');

    let estado = true;

    if (descripcion.value == ""){
        descripcion.style.borderColor ="red";
        estado = false;
    }
    if (cantidad.value == ""){
        cantidad.style.borderColor ="red";
        estado = false;
    }
    if (referencia.value == ""){
        referencia.style.borderColor ="red";
        estado = false;
    }
    if (disponible.value == ""){
        disponible.style.borderColor ="red";
        estado = false;
    }
    if ( estado == true ) {
        formulario.submit();
    }
}