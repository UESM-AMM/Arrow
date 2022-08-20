<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">

            <h2>Firmantes de contratos</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-firmante')): ?>
                <a href="firmantes/create" class="btn btn-raised btn-success">Agregar firmante</a>
                <?php endif; ?>
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
                                   
                                    <th class="text-center">Nombre de firmante</th>
                                    <th class="text-center">Cargo</th>
                                    <th class="text-center">Contrato</th>


                                    <th class="text-center">Acciones</th>

                                </tr>
                            </thead>
                            <tbody>

                                 <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                                    
                                    <td class="text-center"><?php echo e($contrato->nombre.' '.$contrato->paterno.' '.$contrato->materno); ?></td>
                                    <td class="text-center"><?php echo e($contrato->cargo); ?></td>
                                    <td class="text-center"><?php echo e($contrato->contrato); ?></td>
                                    <td class="d-flex justify-content-around">

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-firmante')): ?>

                                        <a href="<?php echo e(route('firmantes.edit',$contrato->id)); ?>" class="edit"><i class="zmdi zmdi-edit text-warning"></i></a>
                                       <?php endif; ?>

                                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-firmante')): ?>
                                      
    
                                       <form action="<?php echo e(route('firmantes.destroy',$contrato->id)); ?>"   method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i></button>
                                      </form>
                                      <?php endif; ?>
    
                               
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/firmantes/index.blade.php ENDPATH**/ ?>