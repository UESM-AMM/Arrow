<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Empresas</h2>

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
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-empresa')): ?>
                    <a href="<?php echo e(route('empresas.create')); ?>" class="btn btn-raised btn-success">Agregar empresa</a>
                <?php endif; ?>
            </div>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
             
                <div class="card">
                            <div class="body" style="box-shadow: 4px 10px 10px -6px #dd5e89">
                               
                                    <div class="member-card verified">
                                       <!-- <div class="thumb-xl member-thumb">
                                            <img src="images/random-avatar3.jpg" class="img-thumbnail rounded-circle" alt="profile-image">                                
                                        </div> -->
            
                                        <div class="m-t-20">
                                            <h4 class="m-b-0"><?php echo e($empresa->nombre); ?></h4>
                                           <!--subtitulo -->
                                           <!-- <p class="text-muted">Java<span> <a href="#" class="text-pink">websitename.com</a> </span></p> -->
                                        </div>
                                        <p>
                                        <!-- Podria ser direccion de la empresa -->
                                        <p class="text-muted" ><strong>Ubicación: </strong> <?php echo e($empresa->ubicacion); ?></p>       
                                        <p class="text-muted"><strong>RFC: </strong> <?php echo e($empresa->rfc); ?></p>      
                                        <p class="text-muted"><strong>IMMS: </strong> <?php echo e($empresa->imms); ?></p>      
                                        <p class="text-muted"><strong>CCEM: </strong> <?php echo e($empresa->ccem); ?></p>                          
                                        
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-empresa')): ?>
                                        <a class="btn btn-raised bg-amber btn-sm text-center " href="<?php echo e(route('empresas.edit', $empresa->id)); ?>">
                                            <i class="material-icons mb-1">create</i>
                                        </a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-empresa')): ?>
                                            <?php echo Form::open(['method' => 'DELETE','route' => ['empresas.destroy', $empresa->id], 'style'=>'display:inline']); ?>

                                            <?php echo e(Form::button('<i class="material-icons mb-1">delete_forever</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-raised  btn-sm text-center'] )); ?>

                                            <?php echo Form::close(); ?>

                                        <?php endif; ?>
                                     
                                    </div>
                                </div>
                            </div>
                          
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         
        </div>
            
        </div>
        <!-- #END# Exportable Table -->
   
    

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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/empresas/index.blade.php ENDPATH**/ ?>