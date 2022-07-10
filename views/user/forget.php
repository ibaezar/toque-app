<!DOCTYPE html>
<html>

<head>
    <title> Recuperar Cuenta - Toque</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/forget.css"> 
</head>

<body>
    <form action="index.html" id="formulario">
    <section class="form_forgot">
        <h4>Recuperar Cuenta</h4>
        <input class="control" type="email" name="email" id="email" placeholder="Ingrese su Correo">
        <button type="submit" class="btn btn-primary">Resetear Contraseña</button>
        <p><a type="submit" href="<?=base_url?>User/register"> ¡Registrate! Ingrese Aquí</A></a></p>
        <p><a href="<?=base_url?>User/login">¿Ya tiene una cuenta? Inicie sesión</a></p>
    </section>
    </form>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
    </script>
    <script src="./../assets/js/validacion.js"></script>
</body>