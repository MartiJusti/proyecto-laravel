<?php $__env->startSection('title', 'Contacto'); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('messages.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <!--Preguntar al profesor cómo mostrar un mensaje de éxito al enviar el formulario-->
        <input type="text" name="name" id="name" placeholder="Escribe tu nombre...">
        <input type="text" name="subject" id="subject" placeholder="Escribe el asunto del mensaje...">
        <textarea name="text" id="text" cols="30" rows="10" placeholder="Escribe el contenido del mensaje..."></textarea>

        <input type="submit" value="Enviar">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/contact/index.blade.php ENDPATH**/ ?>