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
                    <h2>Información</h2>

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
                                            <td><?php echo e($contratoUnion->amortizacion); ?></td>
                                            <td><?php echo e($contratoUnion->importe); ?></td>
                                            <td><?php echo e($contratoUnion->nombre_cliente); ?></td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 text-center">

                            <hr>
                            <a href="<?php echo e(route('contratosR.index')); ?>" class="btn btn-raised btn-success">Regresar</a>
                        </div>
                    </div>


                    <br>
                 
                    <br><br>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-concepto')): ?>
                    <div class="row clearfix">
                        <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="thumbnail card">
                                <div class="caption  body text-center">
                                <h3 class=""><img src="<?php echo e(asset('img/usuarios/'.$imagen->imagen)); ?>" width="140" alt="velonic"></h3>
                                <p><strong>Descripción: <strong> <?php echo e($imagen->descripcion); ?></p>
                                    <a href="<?php echo e(route('contratos.editarimagen',$imagen->id)); ?>" class="text-center btn btn-raised btn-sm btn-warning " >Editar</a>

                            <form action="" class=""  method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" style="cursor: pointer; background: transparent; border:0px;" class="btn btn-sm btn-raised btn-danger">Eliminar</button>
                              </form>
                                </div>
                            </div>

                        </div>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/contratosR/contratosver.blade.php ENDPATH**/ ?>