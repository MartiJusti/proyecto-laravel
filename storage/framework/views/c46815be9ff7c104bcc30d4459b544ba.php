<?php
/**
 * Página para visualizar jugadores
 *
 * Esta página permite a cualquier usuario
 * ver una lista de los jugadores.
 * El usuario administrador puede ver todos los jugadores,
 * mientras que el resto solo los visibles.
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>



<?php $__env->startSection('title', 'Jugadores'); ?>

<?php $__env->startSection('content'); ?>
    <div class="players">
        <div>
            <h1>Lista de jugadores</h1>
        </div>
        <div class="players-list">
            <?php $__empty_1 = true; $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->rol == 'admin'): ?>
                        <div class="player-data">
                            <img src="<?php echo e(asset('storage/img/' . $player->name . '.png')); ?>" alt="Foto de <?php echo e($player->name); ?>">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('players.show', $player->id)); ?>"><?php echo e($player->name); ?></a>
                            <?php else: ?>
                                <?php echo e($player->name); ?>

                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <?php if($player->visible == true): ?>
                            <div class="player-data">
                                <img src="<?php echo e(asset('storage/img/' . $player->name . '.png')); ?>" alt="Foto de <?php echo e($player->name); ?>">
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('players.show', $player->id)); ?>"><?php echo e($player->name); ?></a>
                                <?php else: ?>
                                    <?php echo e($player->name); ?>

                                <?php endif; ?>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($player->visible == true): ?>
                        <div class="player-data">
                            <img src="<?php echo e(asset('storage/img/' . $player->name . '.png')); ?>" alt="Foto de <?php echo e($player->name); ?>">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('players.show', $player->id)); ?>"><?php echo e($player->name); ?></a>
                            <?php else: ?>
                                <?php echo e($player->name); ?>

                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="players-null">No hay jugadores</div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/players/index.blade.php ENDPATH**/ ?>