<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Editar firmante</h2>
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
                            <div class="col-md-12">
                            <form action="<?php echo e(route('firmantes.update', $firmante->id)); ?>" method="POST">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>

                                <div class="row m-2">

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                        <strong> Firmante </strong>
                                        <input type="text"  class="form-control" value="<?php echo e($empleado_cargo->nombre.' '. $empleado_cargo->apellido_paterno .' '. $empleado_cargo->apellido_materno); ?>"  id="id_empleado" name="id_empleado" disabled >
                                            </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group  drop-custum">
                                        <strong> Cargo </strong>
                                            <select class="form-control show-tick" id="id_contrato" name="id_contrato">
                                                <option value="0">-- Seleccione un contrato --</option>
                                                <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option value="<?php echo e($contrato->id); ?>" <?php if($firmante->id_contrato == $contrato->id): ?> selected  <?php endif; ?>   ><?php echo e($contrato->contrato); ?></option>

                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    

                                </div>

                                

                                <br/>
                                <br/>
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Actualizar</button>
                                    <a href="<?php echo e(route('firmantes.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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


    <script>


$(document).ready(function(){

    $tipo=$('#tipo_empleado').val();
    console.log($tipo);

    if($tipo=='em'){
        document.getElementById('cliente').style.display = 'none';
                document.getElementById('empresa').style.display = 'inline-block';
                 document.getElementById("cliente").value = '0';

    }else{
        document.getElementById('cliente').style.display = 'inline-block';
                document.getElementById('empresa').style.display = 'none';
                document.getElementById("empresa").value='0';
    }

});




    let $empleado;

    $(function(){
        $('#tipo_empleado').change(()=>{
            $tipoe=$("#tipo_empleado").val();
            console.log($tipoe);



            if($tipoe=='em'){
                document.getElementById('cliente').style.display = 'none';
                document.getElementById('empresa').style.display = 'inline-block';
                 document.getElementById("cliente").value = '0';





            }else if($tipoe=='cl'){
                document.getElementById('cliente').style.display = 'inline-block';
                document.getElementById('empresa').style.display = 'none';
                document.getElementById("empresa").value='0';

            }else{
                document.getElementById('cliente').style.display = 'none';
                document.getElementById('empresa').style.display = 'none';
            }

            // $empresas=$("#em").val();

            // if($rol=='Responsable de empresa' &&  $empresas !== null){
            //     document.getElementById('empresa').style.display = 'block';
            //     document.getElementById('boton').style.display = 'inline-block';
            // }

            // else{
            //     document.getElementById('empresa').style.display = 'none';
            //     document.getElementById('boton').style.display = 'none';
            //     document.getElementById('alerta').style.display = 'block';
            // }

            // if($rol !='Responsable de empresa'){
            //     document.getElementById('boton').style.display = 'inline-block';
            //     document.getElementById('alerta').style.display = 'none';
            // }
        });
    });


    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/firmantes/editar.blade.php ENDPATH**/ ?>