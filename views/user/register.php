<!DOCTYPE html>
<html>

<head>
    <title>Registrar mi Cuenta Toque</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/register.css">

</head>

<body>

    <div class="form_register">
        <form action="index2.html" id="formulario">
            <h4>Formulario de Registro</h4>
            <div>
                <label for="nombre"></label>
                <input class="control" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
                <label for="apellido"></label>
                <input class="control" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
                <label for="email"></label>
                <input class="control" type="email" name="email" id="email" placeholder="Ingrese su Correo">
                <label for="password1"></label>
                <input class="control" type="password" name="password1" id="password1" placeholder="Ingrese su Contraseña">
                <label for="password2"></label>
                <input class="control" type="password" name="password2" id="password2" placeholder="Ingrese su Contraseña">
                <p>Estoy de acuerdo con <a href="#"> Terminos y Condiciones </a> </p>
                <button type="submit" class="btn btn-success">Enviar</button>
                <p><a href="<?=base_url?>User/forget">¿Olvidó su cuenta? Ingrese Aquí</a></p>
                <p><a href="<?=base_url?>User/login">¿Ya tiene una cuenta? Inicie sesión</a></p>
            </div>

        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script>
        function validar_nombre(value) {
            const pat_name = /^([a-zA-ZùÙüÜäàáëèéïìíöòóüùúÄÀÁËÈÉÏÌÍÖÒÓÜÚñÑ\s]{2,50})$/;
            return pat_name.test(value);
        }
        $.validator.addMethod(
            "validar_nombre",
            function (value, element, arg) {
                return this.optional(element) || validar_nombre(value);
            }
        )
        function validar_apellido(value) {
            const pat_ape = /^([a-zA-ZùÙüÜäàáëèéïìíöòóüùúÄÀÁËÈÉÏÌÍÖÒÓÜÚñÑ\s]{2,75})$/;
            return pat_ape.test(value);
        }
        $.validator.addMethod(
            "validar_apellido",
            function (value, element, arg) {
                return this.optional(element) || validar_apellido(value);
            }
        )
        function validar_correo(value) {
            const pat_name = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
            return pat_name.test(value);
        }
        $.validator.addMethod(
            "validar_correo",
            function (value, element, arg) {
                return this.optional(element) || validar_correo(value);
            }
        )
        function validar_password1(value) {
            const pat_name =  /^(?=[\x21-\x7E]*[0-9])(?=[\x21-\x7E]*[A-Z])(?=[\x21-\x7E]*[a-z])(?=[\x21-\x7E]*[\x21-\x2F|\x3A-\x40|\x5B-\x60|\x7B-\x7E])[\x21-\x7E]{8,16}$/;
            return pat_name.test(value);
        }
        $.validator.addMethod(
            "validar_password1",
            function (value, element, arg) {
                return this.optional(element) || validar_password1(value);
            }
        )
        function validar_password2(value) {
            const password1 = $('#password1').val();
            const password2 = $('#password2').val();
            if (password1 == password2) 
            return value;
        }

        $.validator.addMethod(
            "validar_password2",
            function (value, element, arg) {
                return this.optional(element) || validar_password2(value);
            }
        )
    </script>
    <script src="./../assets/js/validacion.js"></script>
</body>

</html>