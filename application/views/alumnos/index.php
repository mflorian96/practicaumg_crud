<h2><?php echo $title; ?></h2>

<?php foreach ($alumnos as $alumno_item): ?>

        <h3><?php echo $alumno_item['nombre']; ?></h3>
        <div class="main">
                <?php echo $alumno_item['apellido']; ?>
        </div>
        <p><a href="<?php echo site_url('alumnos/'.$alumno_item['alumno']); ?>">View article</a></p>

<?php endforeach; ?>