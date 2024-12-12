<?php
/**
 * Página de cuenta
 *
 * Esta página contiene los datos
 * del usuario que ha inciado sesión
 * en la aplicación, junto con un enlace
 * para editar el cumpleaños y la contraseña.
 *
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>



<?php $__env->startSection('title', 'Cuenta'); ?>

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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/users/account.blade.php ENDPATH**/ ?>