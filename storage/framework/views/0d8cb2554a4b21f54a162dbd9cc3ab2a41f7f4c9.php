<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
          
            <h2>Unidades Registradas</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>
            <?php if(session('mensaje_alerta')): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo e(session('mensaje_alerta')); ?>

            </div>
            <?php endif; ?>
            <div>
                <a href="<?php echo e(route('unidades.create')); ?>" class="btn btn-raised btn-success">Agregar Unidad</a>

                <?php if($inactivos !=0): ?>
                <a href="<?php echo e(route('unidades.baja')); ?>" class="btn btn-raised btn-warning">Unidades Eliminadas</a>
                <?php endif; ?>

            </div>
        </div>

        

        <div class="row clearfix">
            <div class="col-lg-11 col-md-12 col-sm-12 m-auto">
                <div class="card">
                    <div class="header">
                        <h4 class="text-center">Unidades</h4>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Descripcion</th>
                                    
                                   
                                    <th class="text-center">Acciones</th>
                                  
                                </tr>
                            </thead>                            
                            <tbody>
                                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center">
                                    <td> <?php echo e($unidad->nombre); ?></td>
                                    <td><?php echo e($unidad->descripcion); ?></td>
                          
                                  
                                       
                                  <td class="d-flex justify-content-around">

                                    <a href="<?php echo e(route('unidades.edit',$unidad->id)); ?>" class="edit"><i class="zmdi zmdi-edit text-warning"></i></a>
                                   
                                   <form action="<?php echo e(route('unidades.destroy',$unidad->id)); ?>"   method="post">
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/unidades/index.blade.php ENDPATH**/ ?>