<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>


<div class="container-fluid">
    <div class="block-header">

        <h2>Detalle Concepto</h2>
        <small class="text-muted">Bienvenido a la aplicación ARROW</small>
        <?php if(session('mensaje')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo e(session('mensaje')); ?>

        </div>
        <?php endif; ?>
        <div>

        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>Información</h2>

                </div>
                <div class="body p-4">
                    <div class="clearfix">
                     
                        <div class="float-left">
                            <h4>Concepto:
                                <strong><?php echo e($concepto->codigo); ?></strong>
                            </h4>
                            <strong>Descripcion:</strong><br>
                            <?php echo e($concepto->concepto); ?><br>
                        </div>
                    </div>
                    <hr>
                    <div class="row ">
                        <div class="col-md-12 ">
                            <div class="float-left ">
                               
                                <?php if($concepto->estatus !=1): ?>
                                <p class="m-t-10"><strong>Status: </strong> <span class="badge bg-green">Activo</span></p>
                                <?php else: ?>
                                <p class="m-t-10"><strong>Status: </strong> <span class="badge bg-red">Inactivo</span></p>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="mt-40"></div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><th>Unidad</th>
                                        <th>cantidad</th>
                                        <th>Precio unitario</th>
                                        <th>Precio en letra</th>
                                        <th>Importe</th>
                                        <th>Porcentaje</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo e($concepto->nombre_unidad); ?></td>
                                            <td><?php echo e($concepto->cantidad); ?></td>
                                            <td><?php echo e($concepto->punitario); ?></td>
                                            <td><?php echo e($concepto->precio_letra); ?></td>
                                            <td><?php echo e($concepto->importe); ?></td>
                                            <td><?php echo e($concepto->porcentaje); ?> %</td> 
                                            
                                           

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 text-center">

                            <hr>
                       
                            <?php if($concepto->estatus !=1): ?>
                            <div class="col-sm-12   d-flex ">
    
                                <hr>
                                <a href="javascript:window.print()" class="btn btn-raised btn-success m-auto"  ><i class="zmdi zmdi-print"></i></a>
                                <a href="<?php echo e(route('conceptosec.edit',$concepto->id)); ?>"  class=" m-auto btn btn-raised btn-warning">Editar</a>
    
                                <a href="<?php echo e(route('conceptosec.imagen',$concepto->id)); ?>" class="btn btn-raised btn-info">Agregar Imagen </a>
                                <a href="<?php echo e(route('conceptosec.show',$concepto->id_codigo)); ?>" class="btn btn-raised btn-success m-auto" >Regresar</a>
    
                              
                            </div>
                            <?php else: ?>
    
                            
                            <a href="<?php echo e(route('conceptosec.activar',$concepto->id)); ?>" class="btn btn-raised btn-info m-auto" >Activar Concepto</a>
                            <?php endif; ?>
                        </div>
                    </div>


                    <br>
                 
                    <br><br>
                    
                    <div class="container">
                        <div class="row">
                        <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="col-4">
                                <h3 class=""><img src="<?php echo e(asset('img/usuarios/'.$imagen->imagen)); ?>" width="140px" height="100px" alt="velonic"></h3>
                                <p><strong>Descripción: </strong> <?php echo e($imagen->descripcion); ?></p>
                                
                                    <a href="<?php echo e(route('conceptosec.editarimagen',$imagen->id)); ?>" class="text-center btn btn-raised btn-sm btn-warning " >Editar</a>
                                
                                <form action="<?php echo e(route('conceptosec.eliminarimagen',$imagen->id)); ?>" class=""  method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" style="cursor: pointer; background: transparent; border:0px;" class="btn btn-sm btn-raised btn-danger">Eliminar</button>
                                </form>
                            </div>
                       

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u205223607/domains/valvid.mx/public_html/arrow/resources/views/conceptos/show.blade.php ENDPATH**/ ?>