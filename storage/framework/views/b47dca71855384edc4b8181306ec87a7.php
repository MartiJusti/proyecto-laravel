<?php
/**
 * Página de visualización de mensajes
 *
 * Esta página permite al administrador
 * leer los mensajes que los usuarios le han enviado.
 * Están ordenados de más reciente a menos.
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>



<?php $__env->startSection('title', 'Mensajes'); ?>

<?php $__env->startSection('content'); ?>
    <div class="messages-container">
        <div class="messages-title">
            <h1>Lista de Mensajes</h1>
        </div>
        <div class="messages-list">
            <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="message-item <?php echo e($message->read ? 'message-read' : 'message-unread'); ?>">
                    <a href="<?php echo e(route('messages.show', $message->id)); ?>" class="message-link">
                        <div class="message-info">
                            <h3><?php echo e($message->subject); ?></h3>
                            <p class="message-sender"><?php echo e($message->name); ?></p>
                        </div>
                        <div class="message-date"><?php echo e($message->created_at); ?></div>
                    </a>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="message-null">No hay mensajes</div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/messages/index.blade.php ENDPATH**/ ?>