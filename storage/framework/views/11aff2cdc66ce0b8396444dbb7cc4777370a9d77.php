<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Clientes</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-cliente')): ?>
                <a href="<?php echo e(route('clientes.create')); ?>" class="btn btn-raised btn-success">Agregar cliente</a>
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

        <div class="row clearfix">
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card all-patients">
                    <div class="body">
                            <div class="col-lg-12 col-md-12 m-b-0 text-center">
                                <h5 class=""><?php echo e($cliente->nombre); ?>  </h5>
                                <address class="">
                                    Correo:   <?php echo e($cliente->email); ?> <br>
                                    <abbr title="Phone">Teléfono:</abbr>  <?php echo e($cliente->telefono); ?>

                                </address>
                         
                            <div class="col-lg-12 col-md-12">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-cliente')): ?>
                                <a href="<?php echo e(route('clientes.edit', $cliente->id )); ?>" class="edit ml-2"><i class="zmdi zmdi-edit text-warning"></i></a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-cliente')): ?>
                                <?php echo Form::open(['method' => 'DELETE','route' => ['clientes.destroy', $cliente->id], 'style'=>'display:inline']); ?>

                                
                                <button type="submit" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i></button>
                                <?php echo Form::close(); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          

        
        
        </div>

        


    </div>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/clientes/index.blade.php ENDPATH**/ ?>