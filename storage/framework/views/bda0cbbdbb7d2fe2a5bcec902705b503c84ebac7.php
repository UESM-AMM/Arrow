<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Concepto de contratos</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-afianzadora')): ?>
                    <a href="<?php echo e(route('afianzadoras.create')); ?>" class="btn btn-raised btn-success">Agregar afianzadora</a>
                <?php endif; ?>

                <?php if(session('mensaje_error')): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo e(session('mensaje_error')); ?>

                </div>
                <?php endif; ?>
               
            </div>
        </div>



        <!-- Exportable Table -->
        <div class="row clearfix"> 
            <!-- Colorful Panel Items With Icon -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header text-center p-2">
                      
        
                         <?php if($codigo ==null): ?>
                        <h2> Aun no agregas un codigo a la obra con el  contrato: <strong> <?php echo e($contrato->contrato); ?></strong></h2>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-concepto')): ?>
                        <a href="<?php echo e(route('codigo.crear',$contrato->id)); ?>" class="btn  btn-raised btn-info waves-effect">Generar codigo de la obra</a>
                        <?php endif; ?>
                     <?php else: ?> 
                   
                        <div class="row  d-flex flex-wrap">
                     <div class="col-lg-8  m-auto">
                        <strong class="mb-2"> <?php echo e($contrato->contrato); ?></strong>
                        <h2 class="mt-2"> CONCEPTOS DE LA OBRA: <strong><?php echo e($codigo->codigo); ?>, <?php echo e($codigo->concepto); ?></strong></h2>
                    
                    </div>

                    <div class="col-3">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-concepto')): ?>
                        <a href="<?php echo e(route('codigos.edit',$codigo)); ?>" class="btn  btn-raised btn-info waves-effect">Editar conceptos</a>
                        <?php endif; ?>
                    </div>
                </div>
                       
                        
                       
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                             
                                
                         
                                
                                
                                <a href="<?php echo e(route('conceptos.nuevo',$codigo->id)); ?>" class="btn btn-raised g-bg-blush2">Nuevo Concepto</a>

                           
                                <?php if($conceptose !=0): ?>
                                    <a href="<?php echo e(route('concepto.eliminados',$codigo->id)); ?>" Class="btn btn-raised g-bg-blush2">Conceptos Eliminados</a>
                                
                                <?php endif; ?>
                               
                               
                             
                              
                            </div>
                            <?php $__currentLoopData = $conceptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concepto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-4 ol-sm-8 col-md-8 col-lg-8">
                              
                                
                                <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-col-grey">
                                        <div class="panel-heading" role="tab" id="headingOne_17">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#<?php echo e($concepto->codigo); ?>" 
                                                aria-expanded="true" aria-controls="collapseOne_17"> <i class="material-icons">perm_contact_calendar</i> 
                                           <?php echo e($concepto->concepto); ?> </a> </h4>
                                        </div>
                                        <div id="<?php echo e($concepto->codigo); ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
                                            <div class="panel-body d-flex flex-wrap justify-content-center "> 

                                                <a type="button" href="<?php echo e(route('concepto.create',$concepto->id)); ?>" class="btn  btn-raised btn-info waves-effect">Agregar Conceptos</a> 
                                                  
                                                <a type="button" href="<?php echo e(route('conceptosec.show',$concepto->id)); ?>"class="btn  btn-raised btn-success waves-effect">Lista de conceptos</a>  
                                            
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-concepto')): ?>
                                                <a type="button" href="<?php echo e(route('concepto.edit',$concepto->id)); ?>"class="btn  btn-raised btn-warning waves-effect">Editar Concepto</a>  
                                                <?php endif; ?>

                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-concepto')): ?>
        
                                                <form action="<?php echo e(route('secundario.delete',$concepto->id)); ?>" class="m-auto text-center "  method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" style="cursor: pointer; background: transparent; border:0px;" class="btn btn-raised btn-danger">Eliminar Concepto</button>
                                                  </form>
                                                <?php endif; ?>
        
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                          
                         
                            </div>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                 
                </div>
            </div>
        
        </div>
        <!-- #END# Exportable Table -->
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u205223607/domains/valvid.mx/public_html/arrow/resources/views/conceptos/index.blade.php ENDPATH**/ ?>