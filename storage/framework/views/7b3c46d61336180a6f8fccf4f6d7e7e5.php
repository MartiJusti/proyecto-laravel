<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
        <h1>Bienvenido <?php echo e(Auth::user()->name); ?></h1>

        <div class="user-data">
            <div class="user-name">Nombre: <?php echo e(Auth::user()->name); ?></div>
            <div class="user-email">Email: <?php echo e(Auth::user()->email); ?></div>
            <div class="user-birthday">Fecha de nacimiento: <?php echo e(Auth::user()->birthday); ?></div>
            <div class="user-role">Rol: <?php echo e(Auth::user()->rol); ?></div>
        </div>

        
        <div class="user-edit">
            <a href="<?php echo e(route('user.edit', Auth::user())); ?>">Editar usuario</a>
        </div>
    <?php else: ?>
        <div class="user-error">
            <h1>No se ha podido iniciar sesión</h1>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\socra\Documents\Laravel\LaravelMarcos\resources\views/users/account.blade.php ENDPATH**/ ?>