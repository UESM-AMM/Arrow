<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Agregar rol</h2>
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
                            <?php echo Form::open(array('route' => 'roles.store', 'method'=> 'POST')); ?>

                                <?php echo csrf_field(); ?>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  id="name" name="name" placeholder="Nombre"  value="<?php echo e(old('name')); ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-check">
                                        <label>Permisos por rol</label>
                                        <br><br>
        
                                        <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <input class="form-check-input filled-in" id="<?php echo $value->id ?>" name="permission[]" type="checkbox" value="<?php echo $value->id ?>" > 
                                                <label class="form-check-label" for="<?php echo $value->id ?>">
                                                  <?php echo e($value->name); ?>

                                                </label>
                                                <br>
                                              
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                <br/>
                                <br/>
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Guardar</button>
                                    <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH A:\Documentos\UTN\Estadia Ingenieria\Proyecto\Arrow\app\resources\views/roles/crear.blade.php ENDPATH**/ ?>