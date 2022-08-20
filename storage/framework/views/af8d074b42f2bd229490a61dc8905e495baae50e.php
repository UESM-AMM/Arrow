<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
          
            <h2>Contratos </h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>
         
        </div>

        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h4 class="text-center">Contratos Asignados</h4>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    
                                    <th class="text-center">Contrato</th>
                                    <th class="text-center">Nombre de la obra</th>
                                    <th class="text-center">Ubicacion</th>
                                    <th class="text-center">Fecha Alta</th>
                                
                                   
                                    <th class="text-center">Acciones</th>
                                  
                                </tr>
                            </thead>                            
                            <tbody>
                                
                                <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                            
                                <tr>
                                    <td class="text-center"><?php echo e($contrato->contrato); ?></td>
                                    <td class="text-center"><?php echo e($contrato->nombre_obra); ?></td>
                                    <td class="text-center"><?php echo e($contrato->ubicacion); ?></td>
                                    <td class="text-center"><?php echo e($contrato->fecha_alta); ?></td>
                                 
                                        

                                        
                                  <td class="d-flex justify-content-around align-items-center">

                                    <a href="<?php echo e(route('contratosR.show',$contrato->id)); ?> " class="mt-2"><i class="material-icons text-success">visibility</i></a>
                                  
                                 <a href="<?php echo e(route('codigo.principal',$contrato->id)); ?>" class="btn btn-info text-white" >Concepto</a>
                               


                           
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u205223607/domains/valvid.mx/public_html/arrow/resources/views/contratosR/contratos.blade.php ENDPATH**/ ?>