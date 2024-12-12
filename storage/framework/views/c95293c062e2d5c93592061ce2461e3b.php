<?php $__env->startSection('title', 'Iniciar sesión'); ?>

<?php $__env->startSection('content'); ?>

    <div class="form-login">
        <h2 class="title-login">Por favor, inicia sesión</h2>

        <form action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <label for="username">Nombre de usuario:</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>"><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password"><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php if($errors->any()): ?>
        <div class="error-login">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\socra\Documents\Laravel\LaravelMarcos\resources\views/auth/login.blade.php ENDPATH**/ ?>