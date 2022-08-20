<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Agregar Fianza contrato: <?php echo e($contrato->contrato); ?></h2>
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
                           

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="header">

                                    </div>
                                    <div class="body">
                                        <form action="<?php echo e(route('fianza.store')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                        <div class="row clearfix">
                                           
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Contrato</b>
                                                    <div class="form-line">
                                                    
                                                        <select class="form-control" name="id_contrato">
                                                            <option value="<?php echo e($contrato->id); ?>" selected><?php echo e($contrato->contrato); ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Numero de fianza</b>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"  name="num_fianza" placeholder="Numero de fianza">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br><br>
                                        <div class="row clearfix">
                                            
                                            <div class="col-lg-6 col-md-6">
                                                <b>Monto</b>
                                                <div class="input-group icon">
                                                    <span class="input-group-addon"> <i class="material-icons">attach_money</i> </span>
                                                    <div class="form-line">
                                                        <input  min="0" step="0.01" type="number" step="any" name="monto" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <b>Fecha</b>
                                                <div class="input-group icon">
                                                    <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
                                                    <div class="form-line">
                                                        <input type="date" name="fecha" class="form-control datetime" min="<?=date('Y-m-d',strtotime('1 days'));?>" value="<?php echo e($contrato->fecha_alta); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="row clearfix">
                                            <div class="col-sm-12 text-center">
                                                <b class="text-center">Seleccione afianzadora</b>
                                                <select class="form-control"  name="id_afianzadora">
                                                <?php $__currentLoopData = $afianzadoras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $afianza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($afianza->id); ?>"><?php echo e($afianza->nombre); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                        
                                           
                                        </div><br> <br>
                                        <div class="col-sm-12">
                                            <center>
                                            <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Guardar</button>
                                            <a href="<?php echo e(route('contratos.index')); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/fianza/crear.blade.php ENDPATH**/ ?>