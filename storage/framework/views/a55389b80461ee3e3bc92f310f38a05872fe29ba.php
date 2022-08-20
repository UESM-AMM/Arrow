<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<style>
    .paginate_button{
        display: none
    }

</style>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

    <div class="container-fluid">
        <div class="block-header">
            <h2>Lista de Conceptos</h2>
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

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header ">
                                <h2>Lista de concepto de actividades</h2>
                              
                                <a href="<?php echo e(route('codigo.principal',$concepto->id_contrato)); ?>" class="btn btn-raised btn-success m-auto" >Regrresar</a>
                          
                            </div>
                           
                            <div class="body table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead class="bg-danger">
                                        <tr class="bg-info justify-content-center">
                                            <th>Codigo</th>
                                            <th>Concepto</th>
                                            <th>Unidad</th>
                                            <th>Cantidad</th>
                                            <th>P. Unitario</th>
                                          
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>                            
                                    <tbody>
                                        <?php $__currentLoopData = $conceptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concepto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      
                                        <tr>
                                            <td><?php echo e($concepto->codigo); ?></td>
                                            <td><?php echo e($concepto->concepto); ?></td>
                                            <td><?php echo e($concepto->nombre_unidad); ?></td>
                                            <td><?php echo e($concepto->cantidad); ?></td>
                                            <td><?php echo e($concepto->punitario); ?></td>
                                           

                                         
                                            <td class="d-flex Justify-content-between  align-items-center flex-wrap ">
                                                <a href="<?php echo e(route('concepto.ver',$concepto->id)); ?>" class="m-auto"><i class="material-icons text-info">visibility</i></a>

                                                <?php if($concepto->estatus==1): ?>
                                                <p class="m-auto"> <span class="badge bg-red">Inactivo</span></p>
                                                <?php endif; ?>
                                             
                                             
                                                <?php if($concepto->estatus == 0): ?>
                                                                   
                                                <form action="<?php echo e(route('conceptosec.destroy',$concepto->id)); ?>" method="post">
                                                    <?php echo method_field('delete'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="m-auto" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i> </button>
                                              </form >
                                              
                                              <a href="<?php echo e(route('Avance.show',$concepto->id)); ?>" class="m-auto"><i class="material-icons">trending_up</i></a>
                                                <?php endif; ?>
                          
                                                
                                            </td>
                                           
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                     
                                   
                                     
                                    </tbody>
                               
                                </table>
                                <div class="pagination justify-content-end">
                                    <?php echo $conceptos->links(); ?>

                                </div>
                                
 
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>



        <!-- Exportable Table -->
     
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u205223607/domains/valvid.mx/public_html/arrow/resources/views/conceptos/listaConceptos.blade.php ENDPATH**/ ?>