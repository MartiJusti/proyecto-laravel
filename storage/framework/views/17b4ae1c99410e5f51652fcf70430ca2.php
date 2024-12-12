<?php $__env->startSection('title', $event->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="event-data">
        <h1><?php echo e($event->name); ?></h1>
        <h2><?php echo e($event->description); ?></h2>
        <h2><?php echo e($event->location); ?></h2>
        <h3><?php echo e($event->date); ?></h3>
        <h3><?php echo e($event->hour); ?></h3>
        <h4><?php echo e($event->type); ?></h4>
        <h4><?php echo e($event->tags); ?></h4>
        <br>
        <?php if(Auth::user()->events->contains($event)): ?>
            <div class="event-like">
                <form action="<?php echo e(route('events.dislike', ['event' => $event])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit">
                        <i class="fas fa-heart fa-lg"></i>
                    </button>
                </form>
            </div>
        <?php else: ?>
            <div class="event-like">
                <form action="<?php echo e(route('events.like', ['event' => $event])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit">
                        <i class="far fa-heart fa-lg"></i>
                    </button>
                </form>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\socra\Documents\Laravel\LaravelMarcos\resources\views/events/show.blade.php ENDPATH**/ ?>