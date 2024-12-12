<?php
/**
 * Cabecera de página
 *
 * Esto es la cabecera de página que se incluye
 * en toda la aplicación.
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>

<header>
    <nav>
        <div>
            <a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('img/levante_logo.png')); ?>" alt=""></a>
            <span>Levante UD</span>
        </div>
        <div>
            <a href="<?php echo e(route('players.index')); ?>">Jugadores</a>
            <a href="<?php echo e(route('events.index')); ?>">Eventos</a>
            <a href="<?php echo e(route('products.index')); ?>">Tienda</a>
            <a href="<?php echo e(route('messages.create')); ?>">Contacto</a>
            <a href="<?php echo e(route('location.index')); ?>">Dónde estamos</a>

            <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->rol == 'admin'): ?>
                    <a href="<?php echo e(route('players.create')); ?>">Añadir jugador</a>
                    <a href="<?php echo e(route('events.create')); ?>">Añadir evento</a>
                    <a href="<?php echo e(route('messages.index')); ?>">Mensajes</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div>
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('users.account')); ?>">Mi Cuenta</a>
                <a href="<?php echo e(route('logout')); ?>">Cerrar sesión</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Iniciar sesión</a>
                <a href="<?php echo e(route('signup')); ?>">Crear cuenta</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
<?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/partials/nav.blade.php ENDPATH**/ ?>