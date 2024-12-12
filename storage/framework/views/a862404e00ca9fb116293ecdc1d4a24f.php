<?php
    /**
     * Página de borrado de mensaje
     *
     * Esta página permite al administrador
     * visualizar los detalles de un mensaje
     * y eliminarlo.
     *
     * @author Marcos Martínez Justicia
     *
     * @version 1.0
     */
?>



<?php $__env->startSection('title', 'Mensaje'); ?>

<?php $__env->startSection('content'); ?>
    <div class="message-information">
        <?php echo e($message->name); ?><br>
        <?php echo e($message->subject); ?><br>
        <?php echo e($message->text); ?><br>
        <?php echo e($message->created_at); ?><br>

        <br>
        <div class="message-delete">
            <form action="<?php echo e(route('messages.destroy', ['message' => $message->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button type="submit">Eliminar</button>
            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/messages/show.blade.php ENDPATH**/ ?>