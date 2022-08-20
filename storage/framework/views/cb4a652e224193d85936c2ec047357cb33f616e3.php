<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Editar fianza</h2>
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
                           

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="header">

                                    </div>
                                    <div class="body">
                                        <form action="<?php echo e(route('fianza.update',$fianza->id)); ?>" method="POST">
                                            <?php echo method_field('PUT'); ?>
                                            <?php echo csrf_field(); ?>
                                        <div class="row clearfix">
                                           
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Contrato</b>
                                                    <div class="form-line">
                                                    
                                                         <select class="form-control" name="id_contrato">
                                                            <option value="<?php echo e($fianza->id_contrato); ?>" selected><?php echo e($fianza->name); ?></option>
                                                        </select> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Numero de fianza</b>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"  name="num_fianza" value="<?php echo e($fianza->num_fianza); ?>" placeholder="Numero de fianza">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br><br>
                                        <div class="row clearfix">
                                            
                                            <div class="col-lg-6 col-md-6">
                                                <b>Monto</b>
                                                <div class="input-group icon">
                                                    <span class="input-group-addon"> <i class="material-icons">attach_money</i> </span>
                                                    <div class="form-line">
                                                        <input  min="0" step="0.01" type="number" value="<?php echo e($fianza->monto); ?>" step="any" name="monto" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <b>Fecha</b>
                                                <div class="input-group icon">
                                                    <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
                                                    <div class="form-line">
                                                        <input type="date" name="fecha" class="form-control datetime" min="<?=date('Y-m-d',strtotime('-5 day'));?>" value="<?php echo e($fianza->alta); ?>"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="row clearfix">
                                            <div class="col-sm-12 text-center">
                                                <b class="text-center">Seleccione afianzadora</b>
                                                <select class="form-control"  name="id_afianzadora">
                                                <?php $__currentLoopData = $afianzadoras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $afianza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($afianza->id); ?>"   <?php if($fianza->id_afianzadora == $afianza->id): ?>  selected  <?php endif; ?>   ><?php echo e($afianza->nombre); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                        
                                           
                                        </div><br> <br>
                                        <div class="col-sm-12">
                                            <center>
                                            <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Guardar</button>
                                            <a href="<?php echo e(route('contratos.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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
		</div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/fianza/editar.blade.php ENDPATH**/ ?>