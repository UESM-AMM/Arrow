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
            <h2>Editar imagen de contrato</h2>
            <small class="text-muted"> ARROW</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">

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
                                <form method="POST" action="<?php echo e(route('avances.actualizarimagen',$imagen->id)); ?>" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                
                                <input type="hidden" name="ip" value="<?php echo e($data->ip); ?>">
                                <input type="hidden" name="country" value="<?php echo e($data->countryName); ?>">
                                <input type="hidden" name="countrycode" value="<?php echo e($data->countryCode); ?>">
                                <input type="hidden" name="regioncode" value="<?php echo e($data->regionCode); ?>">
                                <input type="hidden" name="regionname" value="<?php echo e($data->regionName); ?>">
                                <input type="hidden" name="cityname" value="<?php echo e($data->cityName); ?>">
                                <input type="hidden" name="zipcode" value="<?php echo e($data->zipCode); ?>">
                                <input type="hidden" name="postalcode" value="<?php echo e($data->postalCode); ?>">
                                <input type="hidden" name="latitude" value="<?php echo e($data->latitude); ?>">
                                <input type="hidden" name="longitude" value="<?php echo e($data->longitude); ?>">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <img src="<?php echo e(asset('img/usuarios/'.$imagen->imagen)); ?>" width="140" alt="velonic">
                                </div>
                                <br>
                                <br>
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">

                                    <input type="file" name="imagen" id="imagen" accept="image/*" />

                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <div class="form-line">
                                        <textarea  style="height: 100px" class="form-control"  id="descripcion" name="descripcion" placeholder="Descripcion" ><?php echo e($imagen->descripcion); ?></textarea>
                                    </div>
                                    </div>
                                </div>

                                <input type="hidden" name="id_avance" value="<?php echo e($imagen->id_avance); ?>">

                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2" style="display:inline-block" id="boton">Guardar</button>
                                    <a href="<?php echo e(route('contratos.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
                                    </center>
                                </div>

                                </form>
                        </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/avances/editarimage.blade.php ENDPATH**/ ?>