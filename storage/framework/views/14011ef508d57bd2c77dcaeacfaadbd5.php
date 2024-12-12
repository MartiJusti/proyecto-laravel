<?php
/**
 * Página de tienda
 *
 * Esta página permite ver
 * la tienda de la aplicación,
 * los productos con sus existencias
 * y precio.
 *
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>



<?php $__env->startSection('title', 'Tienda'); ?>

<?php $__env->startSection('content'); ?>
    <div class="products">
        <h1>Nuestra mercancía</h1>

        <div class="products-list">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="product-data">
                    <span class="product-name"><?php echo e($product->name); ?></span><br>
                    <span class="product-price"><?php echo e($product->price); ?>€</span><br>
                    <span class="product-stock"><?php echo e($product->stock); ?> <?php echo e($product->stock == 1 ? 'ud.' : 'uds.'); ?></span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="products-empty">No hay productos disponibles.</div>
            <?php endif; ?>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/products/index.blade.php ENDPATH**/ ?>