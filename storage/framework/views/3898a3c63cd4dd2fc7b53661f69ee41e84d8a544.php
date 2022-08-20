<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">

            <h2>Cargos asignados</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>
            <div>
                <a href="asignarcargo/create" class="btn btn-raised btn-success">Asignar cargo</a>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">

                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                   
                                    <th class="text-center">Nombre de empleado</th>
                                    <th class="text-center">Cargo asignado</th>


                                    <th class="text-center">Acciones</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $cargosasignados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargoasignado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                                    
                                    <td class="text-center"><?php echo e($cargoasignado->nombre.' '.$cargoasignado->paterno.' '.$cargoasignado->materno); ?></td>
                                    <td class="text-center"><?php echo e($cargoasignado->cargo); ?></td>
                                    <td class="d-flex justify-content-around">

                                        <a href="<?php echo e(route('asignarcargo.edit',$cargoasignado->id)); ?>" class="edit"><i class="zmdi zmdi-edit text-warning"></i></a>
                                       
                                      
    
                                       <form action="<?php echo e(route('asignarcargo.destroy',$cargoasignado->id)); ?>"   method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i></button>
                                      </form>
    
                               
                                    </td>
                                
                                  
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/asignarcargo/index.blade.php ENDPATH**/ ?>