<?php
    /**
     * Página de eventos
     *
     * Esta página contiene una lista con los eventos
     * y los muestra en función del usuario que la está visualizando.
     * Además, los usuarios con cuenta pueden darles me gusta,
     * y el administrador puede modificarlos o eliminarlos.
     *
     * @author Marcos Martínez Justicia
     *
     * @version 1.0
     */
?>



<?php $__env->startSection('title', 'Eventos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="events-container">
        <div class="events-header">
            <h1>Próximos eventos</h1>
        </div>
        <div class="events-list">
            <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="event-item">
                    <?php if(auth()->guard()->check()): ?>
                        <a class="event-title" href="<?php echo e(route('events.show', $event)); ?>"><?php echo e($event->name); ?></a>
                    <?php else: ?>
                        <p class="event-title"><?php echo e($event->name); ?></p>
                    <?php endif; ?>
                    <p class="event-description"><?php echo e($event->description); ?></p>
                    <p class="event-details">
                        <span class="event-location"><?php echo e($event->location); ?></span><br>
                        <span class="event-date"><?php echo e($event->date); ?></span><br>
                        <span class="event-hour"><?php echo e($event->hour); ?></span><br>
                        <span class="event-type">
                            <?php if($event->type == 'official'): ?>
                                Oficial
                            <?php elseif($event->type == 'exhibition'): ?>
                                Exhibición
                            <?php elseif($event->type == 'charity'): ?>
                                Benéfico
                            <?php endif; ?>
                        </span>
                        <br>
                        <span class="event-tags"><?php echo e($event->tags); ?></span>
                    </p>

                    <?php if(auth()->guard()->check()): ?>
                        <div class="event-actions">

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


                            <?php if(Auth::user()->rol == 'admin'): ?>
                                <div class="event-admin">
                                    <a class="event-edit" href="<?php echo e(route('events.edit', $event->id)); ?>"><i
                                            class="fas fa-pencil-alt fa-lg"></i></a>
                                    <div class="event-delete">
                                        <form action="<?php echo e(route('events.destroy', ['event' => $event->id])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit"><i class="fa fa-trash fa-lg"></i></button>
                                        </form>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="event-null">No hay eventos</div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/events/index.blade.php ENDPATH**/ ?>