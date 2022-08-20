<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Usuario operativo</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            
        </div>

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
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center" > <strong>Información del usuario operativo </strong></h2>
                    </div>
                    <div class="body text-center " style="font-size:18px;"> 
                        <img class="img-fluid mb-3" src="<?php echo e(asset('img/usuarios/'.$usuario->photo)); ?>" style="margin: auto; width: auto; height: auto;"><br>
                        <br> <strong>Nombre:</strong>
                        <?php echo e($usuario->name); ?></p>
                        <strong>Email: </strong><?php echo e($usuario->email); ?></p>
                        <strong>Rol: </strong><?php echo e($rol->name); ?></p>
                        <?php if($usuario->estatus !=1): ?>
                        <p class="m-t-10"><strong>Estado: </strong> <span class="badge bg-green">Activo</span></p>
                        <?php else: ?>
                        <p class="m-t-10"><strong>Estado: </strong> <span class="badge bg-red">Inactivo</span></p>
                        <a href="<?php echo e(route('operativo.activar',$usuario->id)); ?>" class="btn btn-raised btn-success m-auto" >Activar Usuario</a>
                        <?php endif; ?>
                    </div>
                </div>
              
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">Contratos Activos</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Contratos Inactivos</a></li>
                           
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="mypost">
                                <div class="wrap-reset">
                                   <?php $__currentLoopData = $contratosA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                 
                                    <div class="mypost-list">
                                       
                                            <div class="post-img"><img src="assets/images/puppy-1.jpg" class="img-fluid" alt /></div>
                                            <div>
                                                <h4 class="text-center"><?php echo e($contrato->contrato); ?></h4>
                                                <div class="post-box text-center mb-4"> <span class="text-muted text-small mb-3">Fecha de inicio: <?php echo e($contrato->fecha_inicio); ?>

                                                Fecha Fin:<?php echo e($contrato->fecha_termino); ?></span>
                                                <br><p class=" mt-3 mb-2" style="font-size: 16px"><strong>Nombre de la Obra:</strong> <?php echo e($contrato->nombre_obra); ?> </p>
                                                <p class="mb-2" style="font-size: 16px"><strong>Descripcion:</strong> <?php echo e($contrato->descripcion); ?> </p>
                                                <p class="mb-2" style="font-size: 16px"> <strong>Ubicación:</strong> <?php echo e($contrato->ubicacion); ?> </p>
                                                <p ><strong>Estado del contrato: </strong> <span class="badge bg-green">Activo</span></p>
                                                <hr>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="timeline">
                                <div class="wrap-reset">
                                    <?php $__currentLoopData = $contratosI; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                  
                                     <div class="mypost-list">
                                        
                                             <div class="post-img"><img src="assets/images/puppy-1.jpg" class="img-fluid" alt /></div>
                                             <div>
                                                 <h4 class="text-center"><?php echo e($contrato->contrato); ?></h4>
                                                 <div class="post-box text-center mb-4"> <span class="text-muted text-small mb-3">Fecha de inicio: <?php echo e($contrato->fecha_inicio); ?>

                                                 Fecha Fin:<?php echo e($contrato->fecha_termino); ?></span>
                                                 <br><p class=" mt-3 mb-2" style="font-size: 16px"><strong>Nombre de la Obra:</strong> <?php echo e($contrato->nombre_obra); ?> </p>
                                                 <p class="mb-2" style="font-size: 16px"><strong>Descripcion:</strong> <?php echo e($contrato->descripcion); ?> </p>
                                                 <p class="mb-2" style="font-size: 16px"> <strong>Ubicación:</strong> <?php echo e($contrato->ubicacion); ?> </p>
                                                 <p class="m-t-10"><strong>Estado del contrato: </strong> <span class="badge bg-red">Inactivo</span></p>
                                                 <hr>
                                                
                                             </div>
                                         </div>
                                     </div>
 
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 
                                 </div>
                            
                            </div>
                            
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/operativos/show.blade.php ENDPATH**/ ?>