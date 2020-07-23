(function(){
    var formulario = document.getElementById('formulario'),
        correo = formulario.correo,
        password = formulario.password,
        error = document.getElementById('error');

    function  validarCorreo(e){
        if(correo.value == '' || correo.value == null){
            error.style.display = 'block';
            error.innerHTML += '<li>Por favor complete el correo</li>';
            e.preventDefault();
        }else{
            error.style.display = 'none';
        }
    }

    function  validarPassword(e){
        if(password.value == '' || password.value == null){
            error.style.display = 'block';
            error.innerHTML += '<li>Por favor escribe tu contraseña</li>';
            e.preventDefault();
        }else{
            error.style.display = 'none';
        }
    }
    
    function validarFormulario(e){
        error.innerHTML = '';
        validarCorreo(e);
        validarPassword(e);
    }

    formulario.addEventListener('submit', validarFormulario);
}())