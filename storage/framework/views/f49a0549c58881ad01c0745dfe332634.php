<?php
    /**
 * Página de edición de cuenta
 *
 * Esta página permite al usuario
 * que ha iniciado sesión
 * modificar su cumpleaños y contraseña
 * mediante un formulario.
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>



<?php $__env->startSection('title', 'Editar cuenta'); ?>

<?php $__env->startSection('content'); ?>
    <div class="form-event">
        <h2>Editar usuario</h2>

        <form action="<?php echo e(route('user.update', Auth::user())); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <label for="birthday">Fecha de nacimiento:</label>
            <input type="date" name="birthday" id="birthday" value="<?php echo e($user->birthday); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <br>Error: <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" value="<?php echo e($user->password); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <br>Error: <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <input type="submit" value="Enviar">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/users/edit.blade.php ENDPATH**/ ?>