<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Agregar empresa</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						
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
                            <div class="col-md-12">
                            <form action="<?php echo e(route('empresas.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Nombre </strong>
                                            <input type="text" class="form-control"  id="nombre" name="nombre" value="<?php echo e(old('nombre')); ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Ubicación </strong>
                                            <textarea  style="height: 100px" class="form-control"  id="ubicacion" name="ubicacion" > <?php echo e(old('ubicacion')); ?> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> RFC </strong>
                                            <input type="text" class="form-control"  id="rfc" name="rfc" value="<?php echo e(old('rfc')); ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> IMMS </strong>
                                            <input type="text" class="form-control"  id="imms" name="imms" value="<?php echo e(old('imms')); ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> CCEM </strong>
                                            <input type="text" class="form-control"  id="ccem" name="ccem" value="<?php echo e(old('ccem')); ?>" >
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Guardar</button>
                                    <a href="<?php echo e(route('empresas.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
                                    </center>
                                </div>

                            <?php echo Form::close(); ?>

                        </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>        
        
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/empresas/crear.blade.php ENDPATH**/ ?>