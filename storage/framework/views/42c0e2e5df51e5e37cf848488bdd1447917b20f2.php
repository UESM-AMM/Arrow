<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
        <div class="block-header">
            <h2>OPCIONES DE AVANCE</h2>
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

                        <?php if(session('mensaje_error')): ?>
                        <div class="alert alert-danger" role="alert">
                          <?php echo e(session('mensaje_error')); ?>

                        </div>
                        <?php endif; ?>
                        <div id="error_fecha" class="alert alert-danger" style="display: none">
                            <strong>Alerta!</strong> Porfavor seleccione una fecha valida en inicio y termino
                        </div>
					</div>
					<div class="body">                        
                        <div class="row clearfix bg-info">
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

                        </div>  
                        <form action="<?php echo e(route('guardar.opc',$a->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>



                        <div class="row  d-flex justify-content-around">
                            <div class="col-5 p-3">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="checkbox"   <?php if($l==1): ?> checked <?php endif; ?> name="localizacion" value="on" id="opc1">
                                    <label class="form-check-label" for="opc1">
                                        Localizacion
                                       
                                    </label>
                                  </div>
                                 
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  <?php if($al==1): ?> checked <?php endif; ?> name="altura" value="on"   id="opc2">
                                    <label class="form-check-label" for="opc2">
                                        Altura
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  <?php if($are==1): ?> checked <?php endif; ?>  name="area" value="on"   id="opc3">
                                    <label class="form-check-label" for="opc3">
                                        Area
                                      
                                    </label>
                                  </div>
                            </div>

                            <div class="col-5 p-3">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="checkbox" <?php if($ap==1): ?> checked <?php endif; ?> name="ancho" value="on"   id="opc4">
                                    <label class="form-check-label" for="opc4">
                                        Ancho Promedio
                                    </label>
                                  </div>
                                  
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?php if($am==1): ?> checked <?php endif; ?> name="anchop" value="on"   id="opc5">
                                    <label class="form-check-label" for="opc5">
                                        Ancho Total
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="volument" <?php if($vt==1): ?> checked <?php endif; ?>  value="on"  id="opc6">
                                    <label class="form-check-label" for="opc6">
                                        Volumen total
                                    </label>
                                  </div>

                                  <?php if($pieza): ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="espesor" <?php if($es==1): ?> checked <?php endif; ?> value="on"  id="opc7">
                                        <label class="form-check-label" for="opc7">
                                            Espesor
                                        </label>
                                      </div>
                                  <?php endif; ?>

                                  <?php if($pieza): ?>
                                  <div class="form-check">
                                      <input type="checkbox" id="basic_checkbox_4" class="filled-in" checked name="pieza" value="on"  id="opc8">
                                      <label class="form-check-label" for="opc8">
                                        Pieza 
                                      </label>
                                    </div>
                                <?php endif; ?>

                                
                                 
                            </div>
                            <div class="col-sm-12 mt-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-raised g-bg-blush2">Agregar</button>
                                <a href="<?php echo e(route('Avance.show',$a->id_concepto)); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
                            </div>   
                        </div>

                        </form>
                       
                                                                             
                               
                    
                 
                  
                    
                        

                        





                    
                        </div>
                      
                    </div>
				</div>
			</div>
		</div>        
        
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/avances/opc.blade.php ENDPATH**/ ?>