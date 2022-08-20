<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Usuarios</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                <a href="<?php echo e(route('operativos.create')); ?>" class="btn btn-raised btn-success">Agregar usuario</a>
                <a class="btn btn-sm btn-raised btn-primary" href="<?php echo e(route('operativos.createPDF')); ?>">Exportar a PDF <i class="material-icons" style=" margin-bottom: 8px;">file_download</i> </a>
                 
            </div>
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

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($usuario->id); ?></td>
                                        <td><?php echo e($usuario->name); ?></td>
                                        <td><?php echo e($usuario->email); ?></td>
                                        <td><?php echo e($usuario->rol); ?></td>

                                         <td class="d-flex justify-content-around">
                                 
                                            <?php if($usuario->estatus ==1): ?>
                                            <a class="btn btn-raised bg-info btn-sm text-center"  href="<?php echo e(route('operativos.show',$usuario->id)); ?>"><i class="material-icons text-white">visibility</i></a>
                                            <p ><span class="badge bg-red mt-4" style="font-size: 13px; margin:auto">Inactivo</span></p>
                                            <?php else: ?>
                                            <a class="btn btn-raised bg-amber btn-sm text-center " href="<?php echo e(route('operativos.edit',$usuario->id)); ?>">
                                                <i class="material-icons mb-1">create</i>
                                            </a>

                                            <a class="btn btn-raised bg-info btn-sm text-center"  href="<?php echo e(route('operativos.show',$usuario->id)); ?>"><i class="material-icons text-white">visibility</i></a>
                                            <?php echo Form::open(['method' => 'DELETE','route' => ['operativos.destroy', $usuario->id], 'style'=>'display:inline']); ?>

                                                <?php echo e(Form::button('<i class="material-icons mb-1">delete_forever</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-raised  btn-sm text-center'] )); ?>

                                            <?php echo Form::close(); ?>

                                            <?php endif; ?>

                                           
                                        </td>



                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/operativos/index.blade.php ENDPATH**/ ?>