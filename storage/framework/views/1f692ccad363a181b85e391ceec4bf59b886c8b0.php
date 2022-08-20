<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Editar Empleado</h2>
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
                            <form action="<?php echo e(route('empleados.update', $empleado->id)); ?>" method="POST">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Nombre </strong>
                                            <input type="text" class="form-control" value="<?php echo e($empleado->nombre); ?>"  id="nombre" name="nombre" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Apellido Paterno </strong>
                                            <input type="text" class="form-control" value="<?php echo e($empleado->apellido_paterno); ?>"  id="apellido_paterno" name="apellido_paterno" placeholder="Apellido paterno" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Apellido Materno </strong>
                                            <input type="text" class="form-control"   value="<?php echo e($empleado->apellido_materno); ?>"  id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-2">

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <strong> Número telefonico de Casa </strong>
                                                <input type="text" class="form-control"  id="num_casa" name="num_casa" value="<?php echo e($empleado->num_casa); ?>" placeholder="Ingrese su número de casa*" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <strong> Número telefonico de celular </strong>
                                                <input type="text" class="form-control"  id="num_cel" name="num_cel"  value="<?php echo e($empleado->num_cel); ?>" placeholder="Ingrese su número telefonico" >
                                            </div>
                                        </div>
                                    </div>

                                </div> 

                                <div class="col-sm-6">
                                <strong> Tipo de Empleado </strong>
                                    <select class="form-control show-tick" id="tipo_empleado" name="tipo_empleado">
                                        <option value="0">-- Seleccione tipo de empleado --</option>
                                        <option value="em" <?php if($empleado->tipo_empleado=='em'): ?> selected  <?php endif; ?> >Empresa</option>
                                        <option value="cl" <?php if($empleado->tipo_empleado=='cl'): ?> selected  <?php endif; ?>>Cliente</option>
                                     
                                    </select>
                                </div>


                                 <div class="col-md-6 col-sm-12">
                                    <select class="form-control show-tick" id="cliente" name="id_cliente" style="display: none"required>
                                    <option value="0" selected>--Seleccione un cliente--</option>
                                     <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($cliente->id); ?>" <?php if($empleado->id_cliente == $cliente->id): ?> selected  <?php endif; ?>   ><?php echo e($cliente->nombre); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                    </select>
                                    </div>
                    

                             
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" id="empresa" name="id_empresa"  style="display: none"required>
                                        <option value="0"  selected>--Seleccione una empresa--</option>
                                        <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($empresa->id); ?>"  <?php if($empleado->id_empresa == $empresa->id): ?> selected  <?php endif; ?>   id="opc"><?php echo e($empresa->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    </select>
                                </div>
                                <?php if($empleado->estatus==1): ?>
                                <div class="col-sm-6">
                                <strong> Estatus </strong>
                                <select class="form-control show-tick" id="estatus" name="estatus" >
                                        <option value="0" >Activo</option>
                                        <option value="1" selected>Inactivo</option>
                                </select>
                                </div>
                                <?php endif; ?>
                                
                                <br/>
                                <br/>
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Guardar</button>
                                    <a href="<?php echo e(route('empleados.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/empleados/editar.blade.php ENDPATH**/ ?>