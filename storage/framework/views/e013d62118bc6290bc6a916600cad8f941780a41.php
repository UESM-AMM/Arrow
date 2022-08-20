<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
        <div class="block-header">
            <h2>Agregar Contrato</h2>
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
                        <div class="row clearfix">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>!Revise los campos¡</strong>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span >*<?php echo e($error); ?>,</span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-12">                                                                          
                            <form action="<?php echo e(route('contratos.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
        <div class="form-group">
            <div class="form-line">
                <input type="text" name="contrato" value="<?php echo e(old('contrato')); ?>" class="form-control" placeholder="Contrato">
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="text" name="nombre_obra"  value="<?php echo e(old('nombre_obra')); ?>"class="form-control" placeholder="Nombre de la obra">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
        <div class="form-line">
            <textarea  style="height: 100px" class="form-control"  id="descripcion" value="" name="descripcion" placeholder="Descripcion" ><?php echo e(old('descripcion')); ?></textarea>
        </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <label for="start">Fecha alta</label>
                <input type="Date" value="<?php echo date("Y-n-j"); ?>" max="<?=date('Y-m-d',strtotime('now +1 week'));?>" min="<?=date('Y-m-d',strtotime('now -0 days'));?>" name="fecha_alta" class="form-control"  placeholder="Fecha de inicio">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
             <div class="form-line">
                <textarea  style="height: 100px" class="form-control"  id="ubicacion" name="ubicacion" placeholder="Ubicación" ><?php echo e(old('ubicacion')); ?></textarea>
             </div>
         </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <label for="start">Fecha inicio</label>
            <input type="Date" value="<?php echo date("Y-n-j"); ?>" max="<?=date('Y-m-d',strtotime('now +30 days'));?>" min="<?=date('Y-m-d',strtotime('now -0 days'));?>" value="<?php echo e(old('fecha_inicio')); ?>" name="fecha_inicio" class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="Fecha de alta">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <label for="start">Fecha termino</label>
            <input type="Date"    value="<?php echo date("Y-n-j"); ?>"  min="<?=date('Y-m-d',strtotime('now -0 days'));?>" id="fecha_termino" value="<?php echo e(old('fecha_termino')); ?>" name="fecha_termino" class="form-control" placeholder="Fecha de termino">
            </div>
        </div>
    </div>
    <!--<div class="col-md-6 col-sm-12">
        <div class="form-group drop-custum">
            <select class="form-control show-tick">
                <option value="">--Seleccionar encargado de obra--</option>
                <option value="1">Bryan</option>
                <option value="2">Isaac</option>
                <option value="3">Oscar</option>
            </select>
        </div>    
    </div> -->
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input type="number" name="plazo_dias" value="<?php echo e(old('plazo_dias')); ?>" class="form-control" placeholder="Plazo de dias">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input  min="0" step="0.01" step="any"  value="<?php echo e(old('importe')); ?>" type="number" name="importe" class="form-control" placeholder="$ Importe">

                                                   
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <div class="form-line">
                <input  min="0" step="0.01" step="any" type="number" value="<?php echo e(old('amortizacion')); ?>" name="amortizacion" class="form-control" placeholder="Amortización">
            </div>
        </div>
    </div>
    <div class="col-sm-6 focused mt-3">
                                <select class="form-control show-tick" name="id_empresa">
                                    <option value="<?php echo e($empresa->id); ?>" selected><?php echo e($empresa->nombre); ?></option>
                                </select>
                            </div>
                            <div class="col-sm-6 focused mt-3 mb-3" >
                                <select class="form-control show-tick" name="id_cliente">
                                    <option value="">-- Cliente --</option>
                                    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cliente->id); ?>" <?php if(old('id_cliente')==$cliente->id): ?> selected <?php endif; ?> ><?php echo e($cliente->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="col-sm-6 focused mt-3">
                                <select class="form-control show-tick" name="id_responsable">
                                    <option value="0">-- Responsable de Obra --</option>
                                    <?php $__currentLoopData = $responsables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $responsable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($responsable->id); ?>" <?php if(old('id_responsable')==$responsable->id): ?> selected <?php endif; ?> ><?php echo e($responsable->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="col-sm-6 focused mt-3 mb-3">
                                <select class="form-control show-tick" name="id_asistente">
                                    <option value="0">-- Asistente de Obra --</option>
                                    <?php $__currentLoopData = $asistentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asistente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($asistente->id); ?>" <?php if(old('id_asistente')==$asistente->id): ?> selected <?php endif; ?>><?php echo e($asistente->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                        <br>
                        <br>
                    
    <div class="col-sm-12 mt-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-raised g-bg-blush2">Agregar</button>
        <button type="submit" class="btn btn-raised btn-default">Cancelar</button>
    </div>   
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

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('bundles/datatablescripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/buttons/buttons.print.min.js')); ?>"></script>

    <script src="<?php echo e(asset('bundles/mainscripts.bundle.js')); ?>"></script>
    <!-- Custom Js -->
    <script src="<?php echo e(asset('js/pages/tables/jquery-datatable.js')); ?>"></script>

    <script>

$(function(){
    var today = new Date();
    // $('#fecha_inicio').val();
    $('#fecha_inicio').change(()=>{
        $inicio=$("#fecha_inicio").val();
        console.log($inicio);   
        $termino=$("#fecha_termino").val();
        console.log($termino); 

    if($inicio>$termino){
        // alert("revisa las fechas");
        document.getElementById("error_fecha").style.display='block';
 
        // error_fecha
    }else{
        document.getElementById("error_fecha").style.display = 'none';
    }

    

    //  document.getElementById("fecha_termino").max=today;
        // $("#fecha_termino").setAttribute("max",today);

        
    });

    $('#fecha_termino').change(()=>{
        $termino=$("#fecha_termino").val();
        console.log($inicio);   
        $inicio=$("#fecha_inicio").val();
        console.log($termino); 

    if($termino>$inicio){
        // alert("revisa las fechas");
      
        document.getElementById("error_fecha").style.display = 'none';
 
        // error_fecha
    }else{
        document.getElementById("error_fecha").style.display='block';
    }

    

    //  document.getElementById("fecha_termino").max=today;
        // $("#fecha_termino").setAttribute("max",today);

        
    });
});

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/contratos/crear.blade.php ENDPATH**/ ?>