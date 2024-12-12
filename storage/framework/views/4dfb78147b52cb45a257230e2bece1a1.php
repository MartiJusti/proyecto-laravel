<?php
/**
 * Plantilla de la aplicación
 *
 * Este archivo contiene las partes básicas
 * que el resto de páginas rellenan con su contenido.
 *
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" />
</head>

<body>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div><?php echo $__env->yieldContent('content'); ?></div>

    <br>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/layout.blade.php ENDPATH**/ ?>