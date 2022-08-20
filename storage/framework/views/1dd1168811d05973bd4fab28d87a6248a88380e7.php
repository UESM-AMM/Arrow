<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('plugins/dropzone/dropzone.css')); ?>" rel="stylesheet">
<style>
    #dropzoneDragArea{
        background-color: #f2f2f2;
        border: 1px dashed #c0ccda;
        border-radius:6px;
        padding: 60px;
        text-align: center;
        margin-bottom: 15px;
        cursor:pointer;
    }
    .dropzone{
        box-shadow: 0px 2px 20px 0px #f2f2f2;
        border-radius: 10px;
    }

    #demoform{
        background-color: white !important;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

    <div class="container-fluid">
        <div class="block-header">
            <h2>Editar usuario</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
        </div>

        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
                        <?php if(session('mensaje')): ?>
                        <div class="alert alert-danger" role="alert">
                          <?php echo e(session('mensaje')); ?>

                        </div>
                        <?php endif; ?>
					</div>
					<div class="body">                        
                        <div class="row clearfix">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>!Revise los campos¡</strong>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span ><?php echo e($error); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-12">           
                                <form action="<?php echo e(route('operativos.update',$usuario->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>                                                               
                          
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Nombre </strong>
                                            <input type="text" class="form-control"  id="name" name="name" value="<?php echo e($usuario->name); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Correo </strong>
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo e($usuario->email); ?>" >
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Contraseña </strong>
                                            <input type="password" id="password" name="password" class="datepicker form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Confirmar Contraseña </strong>
                                            <input type="password" id="confirm-password" name="confirm-password" class="datepicker form-control" >
                                        </div>
                                    </div>
                                </div>
                            

                                
                                <?php if($contrato>0): ?>

                                <div class="col-md-6 col-sm-12">
                                    <p style="color:red; font-size: 14px;">Cuenta con contrato activo, no se puede cambiar el rol de este usuario</p>
                                    <strong> Rol </strong>
                                    <div class="form-group drop-custum" >
                                    <select class="form-control show-tick" id="rol" name="roles" required>

                                     <option value="<?php echo e($rolus->name); ?>" selected ><?php echo e($rolus->name); ?></option>
                                  
                                    </select>
                                    </div>
                                </div>
                                
                                    
                                <?php else: ?>
                                <div class="col-md-6 col-sm-12">
                                <strong> Rol </strong>
                                    <div class="form-group drop-custum">
                                    <select class="form-control show-tick" id="rol" name="roles" required>
                                    <option value="0" selected>--Seleccione un rol--</option>

                                     <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                     <option value="<?php echo e($rol->name); ?>" <?php if($rol->name == $rolus->name): ?> selected <?php endif; ?> ><?php echo e($rol->name); ?></option>
                                  
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                    </select>
                                    </div>
                                </div>
                                                               
                                <?php endif; ?>
                                

                                <?php if($contrato>0): ?>

                                <div class="col-md-6 col-sm-12 " id="empresa" style="display:inline-block">
                                <p style="color:red; font-size: 14px;">Cuenta con contrato activo, no se puede cambiar la empresa de este usuario</p>
                                <strong> Empresa </strong>
                                    <div class="form-group drop-custum">
                                    <select class="form-control show-tick "  name="empresa" id="em">

                                     <option value="<?php echo e($empresau->id); ?>" selected><?php echo e($empresau->nombre); ?></option>

                                    </select>
                                    </div>
                                </div>

                                
                                <?php else: ?>
                                <div class="col-md-6 col-sm-12 " id="empresa" style="display:inline-block">
                                <strong> Empresa </strong>
                                    <div class="form-group drop-custum">
                                    <select class="form-control show-tick "  name="empresa" id="em">
                                    <option value="0">--Seleccione una empresa--</option>
                                    <?php $__currentLoopData = $empresasus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($empresa->id); ?>" <?php if($empresa->nombre == $empresau->nombre): ?> selected <?php endif; ?> ><?php echo e($empresa->nombre); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    </div>
                                </div>
                                                               
                                <?php endif; ?>
                                
                                <br/>
                                <br/>
                                
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2" style="display:inline-block" id="boton">Guardar</button>
                                    <a href="<?php echo e(route('operativos.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('plugins/dropzone/dropzone.js')); ?>"></script>

    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/operativos/editar.blade.php ENDPATH**/ ?>