<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Detalle de la fianza</h2>
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
                           

                            
                       
                                    
                                    <div class="col-lg-10 col-md-12 col-sm-12  m-auto">
                                        <div class="card">
                                            <div class="body"> 
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs m-auto" role="tablist">
                                                    <li class="nav-item text-center"><a class="nav-link active" data-toggle="tab" href="#report">Fianza</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Afinzadora</a></li>
                                                </ul>
                                                
                                                <div class="tab-content ">
                                                    <div role="tabpanel" class="tab-pane in active " id="report"><br>
                                                              
                                                          
                                                        <p class="text-center"><strong>Número de Contrato: </strong> <?php echo e($fianza->name); ?> </p>
                                                        <p class="text-center"><strong>Monto: $ </strong> <?php echo e($fianza->monto); ?> </p>
                                                        <p class="text-center"><strong>Fecha de alta:  </strong> <?php echo e($fianza->fecha); ?> </p>
                                                        <p class="text-center"><strong>Número de Fianza:  </strong> <?php echo e($fianza->num_fianza); ?> </p>
                                                       <div class="d-flex justify-content-center">
                                                        <a href="<?php echo e(route('fianza.edit',$fianza->id)); ?>" class="btn  btn-raised btn-info waves-effect" role="button">Editar Fianza</a>
                                                    </div>
                                                     
                                                    </div><br>
                                                    <div role="tabpanel" class="tab-pane" id="timeline">
                                                        <p class="text-center"><strong>Nombre de la afianzadora: </strong> <?php echo e($fianza->nombre_afianzadora); ?> </p>
                                                        <p class="text-center"><strong>RFC: </strong> <?php echo e($fianza->rfc); ?> </p>
                                                        <p class="text-center"><strong>telefono: </strong> <?php echo e($fianza->tel); ?> </p>
                                                        <p class="text-center"><strong>Domicilio: </strong> <?php echo e($fianza->domicilio); ?> </p>
                                                      
                                                    </div>                            
                                                </div>
                                              
                                            </div>
                                            
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


<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/fianza/show.blade.php ENDPATH**/ ?>