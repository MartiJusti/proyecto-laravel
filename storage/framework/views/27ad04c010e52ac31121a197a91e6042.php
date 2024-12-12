<?php $__env->startSection('title', $player->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="player-info">
        <h1><?php echo e($player->name); ?></h1>
        <h2><?php echo e($player->twitter); ?></h2>
        <h2><?php echo e($player->instagram); ?></h2>
        <h2><?php echo e($player->twitch); ?></h2>
        <h3><?php echo e($player->title); ?></h3>
        <h4><?php echo e($player->description); ?></h4>


        <?php if(Auth::user()->rol == 'admin'): ?>
            <form action="<?php echo e(route('events.update', $event)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>

                <label for="visible">Visible:</label>
                <input type="checkbox" name="visible" id="visible" <?php echo e($event->visible == 1 ? 'checked' : ''); ?>>
                <br>
            </form>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\socra\Documents\Laravel\LaravelMarcos\resources\views/players/show.blade.php ENDPATH**/ ?>