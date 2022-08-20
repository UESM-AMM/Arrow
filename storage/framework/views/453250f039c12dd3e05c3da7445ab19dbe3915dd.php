<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Editar Cliente</h2>
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
                            <form action="<?php echo e(route('clientes.update',$cliente->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Nombre </strong>
                                            <input type="text" class="form-control"  id="nombre" name="nombre" value="<?php echo e($cliente->nombre); ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Teléfono </strong>
                                            <input type="text" class="form-control"  id="telefono" value="<?php echo e($cliente->telefono); ?>" name="telefono" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Correo </strong>
                                            <input type="email" class="form-control"  value="<?php echo e($cliente->email); ?>" id="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <div class="form-line">
                                    <strong> Empresa </strong>
                                    <br/>
                                    <select class="form-control show-tick "  name="id_empresa" id="id_empresa">
                                    <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($empresa->id); ?>" <?php if($empresa->nombre == $empresaCli->nombre): ?> selected <?php endif; ?> ><?php echo e($empresa->nombre); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Modificar</button>
                                    <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/clientes/editar.blade.php ENDPATH**/ ?>