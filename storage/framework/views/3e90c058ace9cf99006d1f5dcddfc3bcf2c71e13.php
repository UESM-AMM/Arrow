<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
          
            <h2>Empleados</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-empleado')): ?>
                <a href="<?php echo e(route('empleados.create')); ?>" class="btn btn-raised btn-success">Agregar Empleado</a>
                <?php endif; ?>
            </div>
        </div>

        

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h4 class="text-center">Empleados de Empresa</h4>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Tipo Empleado</th>
                                    <th>Numero de contacto</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                            </thead>                            
                            <tbody>
                                <?php $__currentLoopData = $empleados_emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($empleado->nombre); ?></td>
                                    <td><?php echo e($empleado->apellido_paterno); ?></td>
                                    <td><?php echo e($empleado->apellido_materno); ?></td>
                                  
                                        <?php if($empleado->tipo_empleado=='cl'): ?>
                                        <td>Cliente</td>
                                        <?php else: ?>
                                        <td>Empresa</td>
                                        <?php endif; ?>
                                        <td><?php echo e($empleado->num_cel); ?></td>
                                        <?php if($empleado->estatus==0): ?>
                                        <td><span class="badge bg-success">Activo</span></td>
                                        <?php else: ?>
                                       <td> <span class="badge bg-danger">Inactivo</span></td>
                                        <?php endif; ?>

                                  <td class="d-flex justify-content-around">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-empleado')): ?>
                                    <a href="<?php echo e(route('empleados.edit',$empleado->id)); ?>" class="edit"><i class="zmdi zmdi-edit text-warning"></i></a>
                                    <?php endif; ?>
                                   <a href="<?php echo e(route('empleados.show',$empleado->id)); ?>" class=""><i class="material-icons text-success">visibility</i></a>
                                  
                                   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-empleado')): ?>
                                   <form action="<?php echo e(route('empleados.destroy',$empleado->id)); ?>"   method="post">
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

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header" >
                        <h4 class="text-center">Empleados de nuestros Clientes</h4>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Tipo Empleado</th>
                                    <th>Numero de contacto</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                            </thead>                            
                            <tbody>
                                <?php $__currentLoopData = $empleados_cli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($cliente->nombre); ?></td>
                                   
                                    <td><?php echo e($cliente->apellido_paterno); ?></td>
                                    <td><?php echo e($cliente->apellido_materno); ?></td>
                                  
                                
                                        <?php if($cliente->tipo_empleado=='cl'): ?>
                                        <td>Cliente</td>
                                        <?php else: ?>
                                        <td>Empresa</td>
                                  
                                        <?php endif; ?>
                                        <td><?php echo e($cliente->num_cel); ?></td>
                                        <?php if($cliente->estatus==0): ?>
                                        <td><span class="badge bg-success">Activo</span></td>
                                        <?php else: ?>
                                       <td> <span class="badge bg-danger">Inactivo</span></td>
                                        <?php endif; ?>

                                  <td class="d-flex justify-content-around">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-empleado')): ?>
                                    <a href="<?php echo e(route('empleados.edit',$cliente->id)); ?>" class="edit"><i class="zmdi zmdi-edit text-warning"></i></a>
                                    <?php endif; ?>
                                   <a href="<?php echo e(route('empleados.show',$cliente->id)); ?>" class=""><i class="material-icons text-success">visibility</i></a>
                                   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-empleado')): ?>
                                   <form action="<?php echo e(route('empleados.destroy',$cliente->id)); ?>"   method="post">
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


<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/empleados/index.blade.php ENDPATH**/ ?>