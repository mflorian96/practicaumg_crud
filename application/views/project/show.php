<h2 class="text-center mt-5 mb-3"><?php echo $title;?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('project/');?>"> 
            View All Projects
        </a>
    </div>
    <div class="card-body">
       <b class="text-muted">Nombre:</b>
       <p><?php echo $project->nombre;?></p>
       <b class="text-muted">Apellido:</b>
       <p><?php echo $project->apellido;?></p>
       
    </div>
</div>
