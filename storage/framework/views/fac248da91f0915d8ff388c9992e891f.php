<?php
/**
 * Página de detalles de jugador
 *
 * Esta página permite a cualquier usuario
 * ver los detalles de un jugador y al administrador,
 * hacerlo visible o no.
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>



<?php $__env->startSection('title', $player->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="player-info">
        <img src="<?php echo e(asset('storage/img/' . $player->name . '.png')); ?>" alt="Foto de <?php echo e($player->name); ?>">
        <h1><?php echo e($player->name); ?></h1>
        <h2><?php echo e($player->twitter); ?></h2>
        <h2><?php echo e($player->instagram); ?></h2>
        <h2><?php echo e($player->twitch); ?></h2>
        <h3><?php echo e($player->title); ?></h3>
        <h4><?php echo e($player->description); ?></h4>


        <?php if(Auth::user()->rol == 'admin'): ?>
            <div class="player-form-visible">
                <form action="<?php echo e(route('players.update', $player)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>

                    <label for="visible">Visible:</label>
                    <input type="checkbox" name="visible" id="visible" <?php echo e($player->visible == 1 ? 'checked' : ''); ?>>
                    <input type="submit" value="Editar">
                    <br>
                </form>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/players/show.blade.php ENDPATH**/ ?>