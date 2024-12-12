<?php
    /**
 * Página principal
 *
 * Esta es la página principal de la aplicación,
 * que contiene un texto introductorio al club de fútbol
 * y una imagen con su estadio.
 *
 *
 * @author Marcos Martínez Justicia
 *
 * @version 1.0
 */
?>



<?php $__env->startSection('title', 'Levante UD'); ?>

<?php $__env->startSection('content'); ?>

    <div class="welcome">
        <img src="<?php echo e(asset('img/levante_estadio.webp')); ?>" alt="estadio del Levante">

        <div class="welcome-text">
            <h2>Nuestro estadio</h2>
            <p>El Levante Unión Deportiva, conocido simplemente como Levante, es un club de fútbol español con sede en
                Valencia.<br>
                Fundado en 1909, el equipo ha experimentado diversas etapas a lo largo de su historia,<br>
                pero en las últimas décadas ha consolidado su presencia en la élite del fútbol español.<br>
                El estadio del Levante es el Estadio Ciudad de Valencia, ubicado en la ciudad homónima.<br>
                Con una capacidad para albergar a más de 25,000 espectadores,<br>
                el estadio es el escenario vibrante donde los seguidores del Levante se congregan para apoyar a su equipo
                con pasión y entusiasmo.<br>
                Este recinto deportivo ha sido testigo de momentos emocionantes y hazañas memorables<br>
                que han contribuido a forjar la identidad y la historia del club en el panorama futbolístico español.</p>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/marmarjus/Asignaturas/DWES/2º Trimestre/Ejercicios/LaravelMarcos/resources/views/index.blade.php ENDPATH**/ ?>