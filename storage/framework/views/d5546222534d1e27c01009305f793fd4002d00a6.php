<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Cargos</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
           
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-cargo')): ?> 
                <a href="<?php echo e(route('cargos.create')); ?>" class="btn btn-raised btn-success">Agregar Cargo</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="header">
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>

            <?php if(session('mensaje_error')): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo e(session('mensaje_error')); ?>

            </div>
            <?php endif; ?>
            <div id="error_fecha" class="alert alert-danger" style="display: none">
                <strong>Alerta!</strong> Por favor seleccione una fecha valida en inicio y término
            </div>
        </div>

        <div class="row clearfix">
            
            <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
               
                <div class="card all-patients">
                    <div class="body">
                        <div class="row d-flex justify-content-center" >
                         

                            <div class="col-lg-8 col-md-12 m-b-0">
                            <div class=" d-flex justify-content-between">
                                <h5 class=""> Nombre: <?php echo e($cargo->nombre_cargo); ?>  </h5>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-cargo')): ?> 
                                <a href="<?php echo e(route('cargos.edit', $cargo->id )); ?>" class="edit"><i class="zmdi zmdi-edit text-warning"></i></a>
                                <?php endif; ?>
                                  
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-cargo')): ?>
                                   
                                    <?php echo Form::open(['method' => 'DELETE','route' => ['cargos.destroy', $cargo->id], 'style'=>'display:inline']); ?>

                                    
                                    <button type="submit" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i></button>
                                    <?php echo Form::close(); ?>

                                <?php endif; ?>

                                   
                            </div>
                                <address class="m-t-10 m-b-0">
                                    Descripción:   <?php echo e($cargo->descripcion); ?> <br>
                                    
                                </address>
                            </div>
                                
                          
                          
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </div>



    </div>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('bundles/datatablescripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.print.min.js')); ?>"></script>

    <script src="<?php echo e(asset('bundles/mainscripts.bundle.js')); ?>"></script>
    <!-- Custom Js -->
    <script src="<?php echo e(asset('js/pages/tables/jquery-datatable.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/cargos/index.blade.php ENDPATH**/ ?>