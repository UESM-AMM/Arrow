<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>


<div class="container-fluid">
    <div class="block-header">

        <h2>Detalle Contrato</h2>
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
                    <h2 class="text-center"><strong>Información</strong></h2>
                    <div class="float-left mt-20  ">
                        <address>
                            <span><strong>Firmantes</strong></span><br>
                    <?php $__currentLoopData = $firmantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $firmante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span><strong>Nombre: </strong> <?php echo e($firmante->nombre.' '.$firmante->paterno); ?> </span><br>
                        <span><strong>Cargo: </strong> <?php echo e($firmante->cargo); ?> </span><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </address>
                    </div>
                    

                </div>
                <div class="body">
                    <div class="clearfix">
                        <div class="float-left">


                        </div>
                        <div class="float-right">
                            <h4>Contrato # <br>
                                <strong><?php echo e($contratoUnion->contrato); ?></strong>
                            </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="float-left mt-20  text-center">
                                <address>
                                  <strong>Ubicación:</strong><br>
                                  <?php echo e($contratoUnion->ubicacion); ?><br>

                                  </address>
                                  <address>
                                    <strong>Responsable de obra:</strong><br>
                                    <?php echo e($contratoUnion->name); ?><br>

                                    </address>

                                    <address>
                                        <strong>Asistente de obra:</strong><br>
                                        <?php echo e($asistente->asistente_name); ?><br>

                                        </address>
                            </div>
                            <br>





                            <div class="float-right mt-20">
                                <p><strong>Fecha de alta contrato: </strong><?php echo e($contratoUnion->fecha_alta); ?></p>
                                <p><strong>Fecha de inicio: </strong><?php echo e($contratoUnion->fecha_inicio); ?></p>
                                <p><strong>Fecha de termino: </strong><?php echo e($contratoUnion->fecha_termino); ?></p>

                                <?php if($contratoUnion->estatus !=1): ?>
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
                                        <tr><th>Nombre de la obra</th>
                                        <th>Descripción</th>
                                        <th>Plazo dias</th>
                                        <th>Amortización</th>
                                        <th>Importe</th>
                                        <th>Cliente</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo e($contratoUnion->nombre_obra); ?></td>
                                            <td><?php echo e($contratoUnion->descripcion); ?></td>
                                            <td><?php echo e($contratoUnion->plazo_dias); ?></td>
                                            <td>$ <?php echo e($contratoUnion->amortizacion); ?></td>
                                            <td>$ <?php echo e($contratoUnion->importe); ?></td>
                                            <td><?php echo e($contratoUnion->nombre_cliente); ?></td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    


                    <br>
                    <div class="row">

                  
                    

                        <?php if($contratoUnion->estatus !=1): ?>
                        <div class="col-sm-12   d-flex ">

                            <hr>
                            <a href="javascript:window.print()" class="btn btn-raised btn-success m-auto"  ><i class="zmdi zmdi-print"></i></a>
                            <a href="<?php echo e(route('contratos.edit',$contratoUnion->contrato_id)); ?>"  class=" m-auto btn btn-raised btn-warning">Editar</a>

                            <a href="<?php echo e(route('contratos.imagen',$contratoUnion->contrato_id)); ?>" class="btn btn-raised btn-info">Agregar Imagen </a>
                            <a href="<?php echo e(route('contratos.index')); ?>" class="btn btn-raised btn-success m-auto" >Regresar</a>

                            <form action="<?php echo e(route('contratos.destroy',$contratoUnion->contrato_id)); ?>" class="m-auto text-center "  method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" style="cursor: pointer; background: transparent; border:0px;" class="btn btn-raised btn-danger">Eliminar</button>
                              </form>
                        </div>
                        <?php else: ?>
                        
                     
                        <a href="<?php echo e(route('contratos.activar',$contratoUnion->contrato_id)); ?>" class="btn btn-raised btn-info m-auto" >Activar Contrato</a>
                        <?php endif; ?>

                  

                    </div>

                    <div class="row">
                        <div class="col-12  text-center mt-4">
                            <a class="btn btn-sm btn-raised btn-primary m-auto mt-5"  href="<?php echo e(route('finaciero.createPDF',$contratoUnion->contrato_id)); ?>">Reporte Finaciero <i class="material-icons" style=" margin-bottom: 8px;">file_download</i> </a>
                        </div>

                    </div>
                    
                    <br><br>
                    <div class="container ">
                        <div class="row d-flex justify-content-aroud">

                        <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-2  ">
                                <h3 class=""><img src="<?php echo e(asset('img/usuarios/'.$imagen->imagen)); ?>" width="140px" height="100px" alt="velonic"></h3>
                                <p><strong>Descripción: </strong> <?php echo e($imagen->descripcion); ?></p>
                                    <a href="<?php echo e(route('contratos.editarimagen',$imagen->id)); ?>" class="text-center btn btn-raised btn-sm btn-warning " >Editar</a>

                                <form action="<?php echo e(route('contratos.eliminarimagen',$imagen->id)); ?>" class=""  method="post">
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

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/contratos/show.blade.php ENDPATH**/ ?>