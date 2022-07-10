$().ready(function() {
    $("#formulario").validate({
        rules: {
            nombre      : { required: true, validar_nombre:true},
            apellido    : { required:true, validar_apellido:true},
            email       : { required:true, validar_correo:true},
            password1    : { required:true, validar_password1:true},
            password2   : { required:true, validar_password2:true}
        },
        messages: { 
            nombre      : { required:"El campo es obligatorio.", validar_nombre:"Ingrese más de dos caracteres y solo letras."},
            apellido    : {required:"El campo es obligatorio.", validar_apellido:"Ingrese más de dos caracteres y solo letras."},
            email       : {required:"El campo es obligatorio.", validar_correo:"Verifique el formato del e-mail."},
            password1    : {required:"El campo es obligatorio", validar_password1:"La contraseña debe contener una mayúscula, un número, un caracter especial y de 8 a 16 caracteres."},
            password2   : {required:"EL campo es obligatorio", validar_password2:"Verifique que las contraseña sean iguales."},
        },
        errorElement:"span"
    });
});
