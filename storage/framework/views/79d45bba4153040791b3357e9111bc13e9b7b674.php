<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Roles</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-rol')): ?>
                    <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-raised btn-success">Agregar rol</a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-9 col-md-12 col-sm-12 m-auto">
                <div class="card">
                    
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php if($rol->name=="Tenant"||$rol->name=="Responsable de empresa"||$rol->name=="Responsable de obra"||$rol->name=="Asistente de obra"): ?>
                                        <td><?php echo e($rol->name); ?></td>
                                        <td class="d-flex justify-content-around">
                                           <a><i class="zmdi zmdi-lock animated infinite pulse"></i></a>
                                        </td>
                                    </tr>
                                        <?php else: ?>
                                        <td><?php echo e($rol->name); ?></td>
                                        <td class="d-flex justify-content-around">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-rol')): ?>
                                                <a  href="<?php echo e(route('roles.edit', $rol->id)); ?>"><i class="zmdi zmdi-edit text-warning"></i></a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-rol')): ?>
                                                <?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $rol->id], 'style'=>'display:inline']); ?>

                                               
                                                <button type="submit" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i></button>
                                                <?php echo Form::close(); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            <?php echo $roles->links(); ?>

                        </div>
                    </div>
                        
                    
                    
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/roles/index.blade.php ENDPATH**/ ?>