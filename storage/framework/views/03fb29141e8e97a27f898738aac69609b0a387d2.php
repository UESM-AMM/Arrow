<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('plugins/dropzone/dropzone.css')); ?>" rel="stylesheet">
<style>
    #dropzoneDragArea{
        background-color: #f2f2f2;
        border: 1px dashed #c0ccda;
        border-radius:6px;
        padding: 60px;
        text-align: center;
        margin-bottom: 15px;
        cursor:pointer;
    }
    .dropzone{
        box-shadow: 0px 2px 20px 0px #f2f2f2;
        border-radius: 10px;
    }

    #demoform{
        background-color: white !important;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
    <div class="block-header">
        <div class="d-sm-flex justify-content-between">
            <div>
                <h2>Información del Empleado</h2>
                <small class="text-muted">Arrow</small>
            </div>
            <div>
                
                <a href="<?php echo e(route('empleados.index')); ?>" class="btn btn-raised btn-primary">Regresar</a>
                
            </div>


         
        </div>
    </div>        
    <div class="row clearfix">
        <div class="col-lg-9 col-md-12 col-sm-12 m-auto text-center" >
            
            <div class="card">
                <div class="header">
                    <h2>Información del Empleado</h2>
                </div>
                <div class="body">
                    <strong>Nombre:</strong>
                    <p><?php echo e($empleado->nombre); ?></p>
                    <strong>Apellido Paterno</strong>
                    <p><?php echo e($empleado->apellido_paterno); ?></p>
                    <strong>Apellido Materno</strong>
                    <p><?php echo e($empleado->apellido_materno); ?></p>

                    <strong>Tipo Empleado</strong>
                    <?php if($empleado->tipo_empleado=='cl'): ?>

                    <p>Nombre del Cliente: <strong><?php echo e($cliente->nombre); ?></strong></p>

                    <?php else: ?>
                    <p>Empresa: <strong><?php echo e($empresa->nombre); ?></strong></p>
                    <?php endif; ?>


                    <strong>Numero de contacto 1</strong>
                    <p><?php echo e($empleado->num_casa); ?></p>

                    
                    <strong>Numero de contacto 2</strong>
                    <p><?php echo e($empleado->num_cel); ?></p>
               
                    <hr>



                    <?php if($empleado->estatus==1): ?>
                    <p>Estatus: <strong><span class="badge bg-danger">Inactivo</span></strong></p>
                     <a href="<?php echo e(route('empleados.activar',$empleado->id)); ?>" class="btn  btn-raised btn-info waves-effect">Activar Empleado</i></a>
                     <?php else: ?>
                     <p>Estatus: <strong><span class="badge bg-success">Activo</span></strong></p>
                     <?php endif; ?>
                </div>
            </div>
        </div>
       
    </div>
</div>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/empleados/show.blade.php ENDPATH**/ ?>