<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Hola <?php echo e($name); ?>, Bienvenido a Sistema ARROW! </h2>
        <p> Por favor para poder iniciar sesión confirme su correo electrónico.</p>
        <p> Para ello solo debera dar clic en el siguiente enlace:</p>
        <a href="<?php echo e(url('/register/verify/'.$confirmation_code)); ?>">
            Clic para confirmar correo electrónico
        </a>
    </body>
</html>
<?php /**PATH /home/u205223607/domains/valvid.mx/public_html/arrow/resources/views/emails/confirmation_code.blade.php ENDPATH**/ ?>