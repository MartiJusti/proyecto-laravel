<?php $__env->startSection('title', 'Jugadores'); ?>

<?php $__env->startSection('content'); ?>
    <div class="players">
        <div>
            <h1>Lista de jugadores</h1>
        </div>
        <div class="players-list">
            

            <?php $__empty_1 = true; $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="player-data">
                    <img src="/storage/<?php echo e($player->name); ?>.png" alt="Foto de <?php echo e($player->name); ?>">
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->rol == 'admin' || $player->visible): ?>
                            <a href="<?php echo e(route('players.show', $player->id)); ?>"><?php echo e($player->name); ?></a>
                        <?php else: ?>
                            <?php echo e($player->name); ?>

                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo e($player->name); ?>

                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="players-null">No hay jugadores</div>
            <?php endif; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\socra\Documents\Laravel\LaravelMarcos\resources\views/players/index.blade.php ENDPATH**/ ?>