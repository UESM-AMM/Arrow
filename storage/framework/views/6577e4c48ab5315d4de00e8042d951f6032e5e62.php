<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Detalle de la fianza</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
                        <?php if(session('mensaje_error')): ?>
                        <div class="alert alert-danger" role="alert">
                          <?php echo e(session('mensaje_error')); ?>

                        </div>
                        <?php endif; ?>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <?php if($errors->any()): ?>
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>!Revise los campos¡</strong>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span ><?php echo e($error); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <div class="col-md-12 text-center">
                                <p class="font-bold col-pink">Actualmente no cuentas con ninguna afianzadora para este contrato. </p><br>
                             </div><br>          
                            <a href="<?php echo e(route('fianza.crear',$id)); ?>" class="btn  m-auto btn-raised   btn-info waves-effect">Agregar</a>
                                
                            </div>

                        </div>
                    </div>
				</div>
			</div>
		</div>

    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/fianza/vacio.blade.php ENDPATH**/ ?>