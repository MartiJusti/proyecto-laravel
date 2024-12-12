<?php
    /**
     * Página de edición de eventos
     *
     * Esta página permite al administrador
     * editar un evento mediante un formulario.
     *
     * @author Marcos Martínez Justicia
     *
     * @version 1.0
     */
?>



<?php $__env->startSection('title', 'Editar evento'); ?>

<?php $__env->startSection('content'); ?>
    <div class="form-event">
        <h2>¿Quieres editar este evento?</h2>

        <form action="<?php echo e(route('events.update', $event)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="<?php echo e($event->name); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <br>
                <div class="form-event-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="desc">Descripción:</label>
            <textarea name="desc" id="desc" cols="30" rows="10"><?php echo e($event->description); ?></textarea>
            <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <br>
                <div class="form-event-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="location">Lugar:</label>
            <input type="text" name="location" id="location" value="<?php echo e($event->location); ?>">
            <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <br>
                <div class="form-event-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="date">Fecha:</label>
            <input type="date" name="date" id="date" placeholder="Elige una fecha..."
                value="<?php echo e($event->date); ?>">
            <br>

            <label for="time">Hora:</label>
            <input type="time" name="hour" id="hour" placeholder="Elige una hora..." value="<?php echo e($event->hour); ?>">
            <br>

            <label for="type">Tipo:</label>
            <select name="type" id="type">
                <option value="" disabled hidden>Selecciona un tipo</option>
                <option value="official" <?php echo e(old('type', $event->type) == 'official' ? 'selected' : ''); ?>>Oficial</option>
                <option value="exhibition" <?php echo e(old('type', $event->type) == 'exhibition' ? 'selected' : ''); ?>>Exhibición
                </option>
                <option value="charity" <?php echo e(old('type', $event->type) == 'charity' ? 'selected' : ''); ?>>Benéfico</option>
            </select>
            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <br>
                <div class="form-event-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>


            <label for="tags">Etiquetas:</label>
            <textarea name="tags" id="tags" cols="30" rows="10"><?php echo e($event->tags); ?></textarea>
            <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <br>
                <div class="form-event-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="visible">Visible:</label>
            <input type="checkbox" name="visible" id="visible" <?php echo e($event->visible == 1 ? 'checked' : ''); ?>>
            <br>

            <input type="submit" value="Enviar">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/events/edit.blade.php ENDPATH**/ ?>