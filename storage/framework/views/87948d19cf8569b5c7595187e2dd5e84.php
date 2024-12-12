<?php
    /**
     * Página para crear cuenta
     *
     * Esta página permite al usuario crear una cuenta
     * para luego usarla en la aplicación.
     *
     *
     * @author Marcos Martínez Justicia
     *
     * @version 1.0
     */
?>



<?php $__env->startSection('title', 'Registro'); ?>

<?php $__env->startSection('content'); ?>

    <div class="form-signup">
        <h2 class="title-signup">¿Quieres crear una cuenta?</h2>

        <form action="<?php echo e(route('signup')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <label for="name">Nombre de usuario:</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>"><br><br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php echo e(old('email')); ?>"><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>"><br><br>

            <label for="password_confirmation">Repite la contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                value="<?php echo e(old('password_confirmation')); ?>"><br><br>

            <label for="birthday">Fecha de nacimiento:</label>
            <input type="date" name="birthday" id="birthday" value="<?php echo e(old('birthday')); ?>"><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php if($errors->any()): ?>
        <div class="signup-error">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/auth/signup.blade.php ENDPATH**/ ?>