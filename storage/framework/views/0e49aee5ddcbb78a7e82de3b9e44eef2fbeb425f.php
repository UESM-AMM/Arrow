<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Asignar cargo a empleado</h2>
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
                            <form action="<?php echo e(route('asignarcargo.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>

                                <div class="row m-2">

                                    <div class="col-md-6 col-sm-12">
                                    <strong> Cargo </strong>
                                        <div class="form-group drop-custum">
                                            <select class="form-control show-tick" id="id_cargo" name="id_cargo" required>
                                            <option value="0" selected>--Seleccione un cargo--</option>

                                              <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($cargo->id); ?>" ><?php echo e($cargo->nombre_cargo); ?></option>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                    <strong> Tipo de Empleado </strong>
                                        <div class="form-group  drop-custum">
                                            <select class="form-control show-tick" id="tipo_empleado" name="tipo_empleado">
                                                <option value="0">-- Seleccione tipo de empleado --</option>
                                                <option value="em">Empresa</option>
                                                <option value="cl">Cliente</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12">
                                        
                                            <select class="form-control show-tick" id="cliente" name="id_cliente" style="display: none" required>}
                                                <option value="0" selected>--Seleccione un empleado por cliente--</option>
            
                                                 <?php $__currentLoopData = $empleados_cli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <option value="<?php echo e($cliente->id); ?>" ><?php echo e($cliente->nombre.' '. $cliente->apellido_paterno .' '. $cliente->apellido_materno); ?></option>
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                                </select>    
                                        
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <select class="form-control show-tick" id="empresa" name="id_empresa" style="display: none" required>
                                            <option value="0"  selected>--Seleccione un empleado por empresa--</option>
                                            <?php $__currentLoopData = $empleados_emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <option value="<?php echo e($empleado->id); ?>" ><?php echo e($empleado->nombre.' '. $empleado->apellido_paterno .' '. $empleado->apellido_materno); ?></option>
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                         
                                        </select>
                                    </div>

                                </div>
                                <br/>
                                <br/>
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Guardar</button>
                                    <a href="<?php echo e(route('asignarcargo.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/asignarcargo/crear.blade.php ENDPATH**/ ?>