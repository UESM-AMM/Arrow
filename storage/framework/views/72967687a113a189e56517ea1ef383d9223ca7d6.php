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
                              
                                <a href="<?php echo e(route('codigo.principal',$concepto->id_contrato)); ?>" class="btn btn-raised btn-success m-auto" >Regresar</a>
                          
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
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-concepto')): ?>
                                                    <button type="submit" class="m-auto" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i> </button>
                                                    <?php endif; ?>
                                              </form >
                                              
                                              <a href="<?php echo e(route('Avance.show',$concepto->id)); ?>" class="m-auto"><i class="material-icons">assignment</i></a>
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
        </div>



        <!-- Exportable Table -->
     
        <!-- #END# Exportable Table -->
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/conceptos/listaConceptos.blade.php ENDPATH**/ ?>