<?php
/**
 * Página para enviar mensajes
 *
 * Esta página permite a cualquier usuario
 * enviar un mensaje al administrador
 * mediante un formulario.
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>



<?php $__env->startSection('title', 'Contacto'); ?>

<?php $__env->startSection('content'); ?>
    <div class="form-message">
        <h2>Envíanos un mensaje y te ayudaremos</h2>

        <form action="<?php echo e(route('messages.store')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <input type="text" name="name" id="name" placeholder="Escribe tu nombre..." value="<?php echo e(old('name')); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-event-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <input type="text" name="subject" id="subject" placeholder="Escribe el asunto del mensaje..."
                value="<?php echo e(old('subject')); ?>">
            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-event-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <textarea name="text" id="text" cols="30" rows="10" placeholder="Escribe el contenido del mensaje..."><?php echo e(old('text')); ?></textarea>
            <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-event-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <input type="submit" value="Enviar">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/messages/create.blade.php ENDPATH**/ ?>