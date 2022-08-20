<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">

            <h2>Contratos</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-contrato')): ?>
                <a href="<?php echo e(route('contratos.create')); ?>" class="btn btn-raised btn-success">Agregar Contrato</a>
                <?php endif; ?>
                <?php if($inactivos !=0): ?>
                <a href="<?php echo e(route('contratos.baja')); ?>" class="btn btn-raised btn-warning">Contratos Inactivos</a>
                <?php endif; ?>

            </div>


        </div>

        <div class="row clearfix">

            <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="thumbnail card">


                    <div class="caption  body text-center">
                        <h3>Contrato: <br> <?php echo e($contrato->contrato); ?></h3>
                        <p>Nombre Obra: <br><?php echo e($contrato->nombre_obra); ?></p>
                        <p>Descripción: <br> <strong class=""><?php echo e($contrato->descripcion); ?></strong><br><br>
                        Fecha de Registro: <br> <strong class="text-center"><?php echo e($contrato->fecha_alta); ?></strong></p>

                        <a href="<?php echo e(route('contratos.show',$contrato->id)); ?>" class="btn  btn-raised btn-info waves-effect" role="button">Ver Contrato</a>
                        <a href="<?php echo e(route('fianza.show',$contrato->id)); ?>" class="btn  btn-raised btn-warning waves-effect" role="button">Ver Fianza</a>
                        <a href="<?php echo e(route('codigo.principal',$contrato->id)); ?>" class="btn btn-info text-white" >Conceptos</a>
                        

                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/contratos/index.blade.php ENDPATH**/ ?>