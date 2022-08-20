<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
        <div class="block-header">
            <h2>Agregar Fecha de inicio</h2>
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
                                <form action="<?php echo e(route('avancef.guardar',$avance->idc)); ?>" method="POST">
                                <?php echo csrf_field(); ?>

                                
    
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/avances/fecha.blade.php ENDPATH**/ ?>