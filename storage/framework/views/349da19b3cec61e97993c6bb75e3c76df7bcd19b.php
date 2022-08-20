<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
          
            <h2>Editar Codigo</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>
          
        </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card mt-4">
                        <div class="header text-center mt-3">
                         
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="<?php echo e(route('secundario.update',$concepto->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                            <div class="row clearfix ">
                           
                                <div class="col-sm-4 m-auto">
                                    <label class="m-2">Codigo principal del contrato:</label>
                                    <select class="form-control show-tick text-center" name="id_codigo"  required>
                                        <option value="<?php echo e($conceptop->id); ?>" selected><?php echo e($conceptop->codigo); ?></option>
                                    </select>
                                </div>
                                
                                <div class="col-md-10 col-sm-12 p-2 m-4">       
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="codigo" value="<?php echo e($concepto->codigo); ?>" placeholder="codigo">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12 col-sm-12 p-2 m-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="1" class="form-control no-resize auto-growth" name="concepto" placeholder="Descripcion"><?php echo e($concepto->concepto); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                               
                                <div class="col-sm-12  d-flex justify-content-center">
                                    <button type="submit" class="btn btn-raised g-bg-blush2">Guardar</button>
                                    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-raised btn-default waves-effect">Cancelar</a>
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


<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/conceptos/editarsecundario.blade.php ENDPATH**/ ?>