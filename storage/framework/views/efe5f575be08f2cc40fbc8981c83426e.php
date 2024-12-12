<?php $__env->startSection('title', 'Nuevo jugador'); ?>

<?php $__env->startSection('content'); ?>
    <div class="form-player">
        <h2>¿Quieres añadir un jugador?</h2>

        <form action="<?php echo e(route('players.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-player-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="twitter">Twitter:</label>
            <input type="text" name="twitter" id="twitter" value="<?php echo e(old('twitter')); ?>">
            <?php $__errorArgs = ['twitter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-player-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="instagram">Instagram:</label>
            <input type="text" name="instagram" id="instagram" value="<?php echo e(old('instagram')); ?>">
            <?php $__errorArgs = ['instagram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-player-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="twitch">Twitch:</label>
            <input type="text" name="twitch" id="twitch" value="<?php echo e(old('twitch')); ?>">
            <?php $__errorArgs = ['twitch'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-player-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="visible">Visible:</label>
            <input type="checkbox" name="visible" id="visible">
            <br>

            <label for="title">Puesto:</label>
            <input type="text" name="title" id="title" value="<?php echo e(old('title')); ?>">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-player-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="desc">Descripción:</label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
            <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-player-error">
                    Error: <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>

            <label for="image" class="custom-file-upload">
                Seleccionar imagen
            </label>
            <input type="file" name="image" id="image">
            <br>
            <br>
            <div class="form-player-error">
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    Error: <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <br>

            <input type="submit" value="Enviar">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\socra\Documents\Laravel\LaravelMarcos\resources\views/players/create.blade.php ENDPATH**/ ?>