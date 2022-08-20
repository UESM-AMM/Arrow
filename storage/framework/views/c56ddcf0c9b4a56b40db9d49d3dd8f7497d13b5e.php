<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>


    <div class="block-header">

        <div class="block-header">
            <h2>Agregar Concepto</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-afianzadora')): ?>
                    <a href="<?php echo e(route('afianzadoras.create')); ?>" class="btn btn-raised btn-success">Agregar afianzadora</a>
                <?php endif; ?>

                <?php if(session('mensaje_error')): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo e(session('mensaje_error')); ?>

                </div>
                <?php endif; ?>
               
            </div>
        </div>
      
        
    </div>
    <div class="row clearfix p-2">
        <div class="col-lg-12 col-md-12 col-sm-12">
           
            <div class="card">
                <div class="header text-center">
                    <h2>Descripcion del concepto </h2>
                </div>
                <div class="body">
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
                    <form action="<?php echo e(route('conceptosec.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row clearfix m-auto">
                
                        <div class="col-lg-12 col-md-12">
                           
                            <select class="form-control show-tick text-center" name="id_codigo"  required>
                                <option value="<?php echo e($concepto->id); ?>" selected><strong><?php echo e($concepto->codigo); ?></strong> <?php echo e($concepto->concepto); ?></option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"   class="form-control text-center" name="codigo"  value="<?php echo e(old('codigo')); ?>" placeholder="Codigo del concepto">
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea style="height: 100px" class="form-control no-resize" name="concepto" placeholder="Descripcion"><?php echo e(old('concepto')); ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix m-auto">

                        <div class="col-sm-2 focused mt-3 mb-3" >
                            <label>Unidades</label>
                            <select class="form-control show-tick" name="id_unidad">
                                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($unidad->id); ?>"> <?php echo e($unidad->nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="input-group icon  mt-5">

                                <div class="form-line">
                                    <input  min="0" step="0.01" type="number" step="any" name="cantidad"  value="<?php echo e(old('punitario')); ?>"class="form-control money-dollar" placeholder="Cantidad">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4">
                            <div class="input-group icon  mt-5">
                                <span class="input-group-addon"> <i class="material-icons">attach_money</i> </span>
                                <div class="form-line">
                                    <input  min="0" step="0.01" type="number" step="any" name="punitario"  value="<?php echo e(old('punitario')); ?>" placeholder="Precio Unitario Ex: 99.99 $" class="form-control money-dollar" placeholder="Cantidad Ex: 99.99 $">
                                </div>
                            </div>
                        </div>
                       
                       
                        
                    </div>
                    <div class="row clearfix m-auto">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="precio_letra" value="<?php echo e(old('precio_letra')); ?>" placeholder="Precio con letra">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="importe" value="<?php echo e(old('importe')); ?>" placeholder="Importe">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="porcentaje" value="<?php echo e(old('porcentaje')); ?>" placeholder="porcentaje">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mt-3">                            
                     
                        <div class="col-sm-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-raised g-bg-blush2">Guardar</button>
                            <a href="<?php echo e(URL::previous()); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u205223607/domains/valvid.mx/public_html/arrow/resources/views/conceptos/crear.blade.php ENDPATH**/ ?>