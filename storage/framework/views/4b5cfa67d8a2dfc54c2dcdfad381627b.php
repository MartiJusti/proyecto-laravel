<?php
    /**
     * Pie de página
     *
     * Esto es el pie de página que se incluye
     * en toda la aplicación.
     *
     * @author Marcos Martínez Justicia
     *
     * @version 1.0
     */
?>

<footer>
    <div>
        <span>LEVANTE UD</span>
        <span>DESARROLLADO POR MARCOS MARTÍNEZ JUSTICIA</span>
    </div>
    <div>
        <a href="<?php echo e(route('cookies.policy')); ?>">Política de Cookies</a>
        <a href="<?php echo e(route('cookies.settings')); ?>">Configuración de Cookies</a>
        <a href="<?php echo e(route('privacy.policy')); ?>">Política de Privacidad</a>
        <a href="<?php echo e(route('privacy.terms')); ?>">Términos y Condiciones de uso</a>
        <a href="<?php echo e(route('messages.create')); ?>">Contacto</a>
    </div>
</footer>
<?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/partials/footer.blade.php ENDPATH**/ ?>