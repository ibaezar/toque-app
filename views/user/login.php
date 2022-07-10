<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesión - Toque</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/login.css">


</head>

<body>
    <form action="index2.html" id="formulario">
        <section class="form_login">
            <h4>Bienvenido</h4>
            <input class="control" type="email" name="email" id="email" placeholder="Ingrese su Correo">
            <input class="control" type="password" name="password1" id="password1" placeholder="Ingrese su Contraseña">
            <button type="submit" class="btn btn-success" href="cuenta.html" >Ingresar</button>
            <p><a type="submit" href="<?=base_url?>User/register"> ¡Registrate! Ingrese Aquí</A></a></p>
            <p><a type="submit" href="<?=base_url?>User/forget">¿Olvidó su contraseña? Ingrese Aquí </a></p>
        </section>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script>

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
            const pat_name = /^(?=[\x21-\x7E]*[0-9])(?=[\x21-\x7E]*[A-Z])(?=[\x21-\x7E]*[a-z])(?=[\x21-\x7E]*[\x21-\x2F|\x3A-\x40|\x5B-\x60|\x7B-\x7E])[\x21-\x7E]{8,16}$/;
            return pat_name.test(value);
        }
        $.validator.addMethod(
            "validar_password1",
            function (value, element, arg) {
                return this.optional(element) || validar_password1(value);
            }
        )
    </script>
    <script src="./../assets/js/validacion.js"></script>

</body>

</html>