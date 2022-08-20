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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-usuario')): ?>
                <a href="<?php echo e(route('usuarios.create')); ?>" class="btn btn-raised btn-success">Agregar usuario</a>
                <?php endif; ?>
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
                                        <td>

                                            <?php echo e($usuario->rol); ?>

                                            
                                        </td>
                                        <td class="d-flex justify-content-around">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-usuario')): ?>
                                            <a  href="<?php echo e(route('usuarios.edit', $usuario->id)); ?>">
                                            <i class="zmdi zmdi-edit text-warning"></i>
                                            </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-usuario')): ?>
                                            <?php echo Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id], 'style'=>'display:inline']); ?>

                                            <button type="submit" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i></button>
                                            <?php echo Form::close(); ?>

                                            <?php endif; ?>
                                        </td>
                                    
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            <?php echo $usuarios->links(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/usuarios/index.blade.php ENDPATH**/ ?>