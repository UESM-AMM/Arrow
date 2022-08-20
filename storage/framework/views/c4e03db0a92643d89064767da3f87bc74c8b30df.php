<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
        <div class="block-header">
            <h2>Agregar usuario</h2>
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
                                            <span ><?php echo e($error); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-12">                                                                          
                            <form action="<?php echo e(route('contratos.update',$contrato->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <div class="form-line">
            <strong> Contrato </strong>
                <input type="text" name="contrato" class="form-control" value="<?php echo e($contrato->contrato); ?>" placeholder="Contrato">
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <strong> Nombre de la obra </strong>
                <input type="text" name="nombre_obra" class="form-control" value="<?php echo e($contrato->nombre_obra); ?>" placeholder="Nombre de la obra">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
        <div class="form-line">
        <strong> Descripcion </strong>
            <textarea  style="height: 100px" class="form-control"  id="descripcion" name="descripcion"  placeholder="Descripcion" ><?php echo e($contrato->descripcion); ?></textarea>
        </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <strong> Fecha alta del contrato </strong>
            <label for="start">Fecha alta</label>
                <input type="Date"   name="fecha_alta" value="<?php echo e($contrato->fecha_alta); ?>" class="form-control"  placeholder="Fecha de inicio">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
             <div class="form-line">
             <strong> Ubicación </strong>
                <textarea  style="height: 100px" class="form-control"  id="ubicacion" name="ubicacion" placeholder="Ubicación" ><?php echo e($contrato->ubicacion); ?></textarea>
             </div>
         </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <strong> Fecha de inicio </strong>
            <label for="start">Fecha inicio</label>
            <input type="Date"  value="<?php echo e($contrato->fecha_inicio); ?>" name="fecha_inicio" class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="Fecha de alta">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <strong> Fecha de termino </strong>
            <label for="start">Fecha termino</label>
            <input type="Date"  value="<?php echo e($contrato->fecha_termino); ?>" id="fecha_termino" name="fecha_termino" class="form-control" placeholder="Fecha de termino">
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
            <strong> Plazo de dias </strong>
                <input type="number" name="plazo_dias"  value="<?php echo e($contrato->plazo_dias); ?>" class="form-control" placeholder="Plazo de dias">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <strong> $ Importe </strong>
                <input type="number" name="importe" class="form-control"  value="<?php echo e($contrato->importe); ?>" placeholder="$ Importe">
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <div class="form-line">
            <strong> Amortización </strong>
                <input type="number" name="amortizacion"  value="<?php echo e($contrato->amortizacion); ?>" class="form-control" placeholder="Amortización">
            </div>
        </div>
    </div>
                <div class="col-sm-6 focused mt-3">
                <strong> Empresa </strong>
                                <select class="form-control show-tick" name="id_empresa">
                                    <option value="<?php echo e($contrato->id_empresa); ?>" selected><?php echo e($contrato->nombre_empresa); ?></option>
                                </select>
                            </div>
                            <div class="col-sm-6 focused mt-3 mb-3" >
                            <strong> Cliente </strong>
                                <select class="form-control show-tick" name="id_cliente">
                                    <option value="">-- Cliente --</option>
                                    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cliente->id); ?>"  <?php if($contrato->id_cliente == $cliente->id): ?>  selected  <?php endif; ?>  ><?php echo e($cliente->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="col-sm-6 focused mt-3">
                            <strong> Responsable de obra </strong>
                                <select class="form-control show-tick" name="id_responsable">
                                    <option value="0">-- Responsable de Obra --</option>
                                    <?php $__currentLoopData = $responsables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $responsable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($responsable->id); ?>"   <?php if($contrato->id_user == $responsable->id): ?>  selected  <?php endif; ?>  ><?php echo e($responsable->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                            <div class="col-sm-6 focused mt-3 mb-3">
                            <strong> Asistente de obra </strong>
                                <select class="form-control show-tick" name="id_asistente">
                                    <option value="0">-- Asistente de Obra --</option>
                                    <?php $__currentLoopData = $asistentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($asis->id); ?>" <?php if($asistente->asistente_id == $asis->id): ?>  selected  <?php endif; ?> ><?php echo e($asis->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>
                            </div>
                        <br>
                        <br>
                    
    <div class="col-sm-12 mt-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-raised g-bg-blush2">Editar</button>
        <a href="<?php echo e(route('contratos.show',$contrato->id)); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/contratos/editar.blade.php ENDPATH**/ ?>