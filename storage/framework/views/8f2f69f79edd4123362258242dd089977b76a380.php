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
            <h2>Agregar nueva Unidad</h2>
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
                            <?php echo Form::open(array('route' => 'unidades.store','method' => 'POST', 'file' => true, 'enctype' => 'multipart/form-data' )); ?>

                                <?php echo csrf_field(); ?>
                                <div class="row clearfix m-2 d-flex justify-content-center">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <strong> Nombre </strong>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <strong> Descripción </strong>
                                                <textarea  style="height: 100px" class="form-control"  id="descripcion" name="descripcion" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 " >
                                        <strong> Empresa </strong>
                                        <div class="form-group drop-custum">
                                        <select class="form-control show-tick" name="id_empresa" id="id_empresa">
                                        <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  value="<?php echo e($empresa->id); ?>"><?php echo e($empresa->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        </div>  
                                    </div>
                                <br/>
                                <br/>
                                
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2" style="display:inline-block" id="boton">Guardar</button>
                                    <a href="<?php echo e(route('unidades.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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
<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/unidades/crear.blade.php ENDPATH**/ ?>