<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo base_url('project/create/');?>"> 
            Crear Nuevo
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
 
        <table class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>telefono</th>
                <th>Email</th>
                <th>Fecha de creacion</th>
                <th>Usuario</th>
                <th>Estado</th>
                <th width="240px">Accion</th>
            </tr>
 
            <?php foreach ($projects as $project) { ?>      
            <tr>
                <td><?php echo $project->nombre; ?></td>
                <td><?php echo $project->apellido; ?></td>          
                <td><?php echo $project->direccion; ?></td>          
                <td><?php echo $project->movil; ?></td>          
                <td><?php echo $project->email; ?></td>          
                <td><?php echo $project->fecha_creacion; ?></td>          
                <td><?php echo $project->user; ?></td>          
                <td><?php echo $project->inactivo; ?></td>          
                <td>
                    <a
                        class="btn btn-outline-info"
                        href="<?php echo base_url('project/show/'. $project->alumno) ?>"> 
                        Ver
                    </a>
                    <a
                        class="btn btn-outline-success"
                        href="<?php echo base_url('project/edit/'.$project->alumno) ?>"> 
                        Editar
                    </a>
                    <a
                        class="btn btn-outline-danger"
                        href="<?php echo base_url('project/delete/'.$project->alumno) ?>"> 
                        Eliminar
                    </a>
                </td>      
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
