<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
          
            <h2>Unidades Eliminadas</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <?php if(session('mensaje')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('mensaje')); ?>

            </div>
            <?php endif; ?>
            <div>
                <a href="<?php echo e(route('unidades.create')); ?>" class="btn btn-raised btn-success">Agregar Unidad</a>

            

            </div>
        </div>

        

        <div class="row clearfix">
            <div class="col-lg-11 col-md-12 col-sm-12 m-auto">
                <div class="card">
                    <div class="header">
                        <h4 class="text-center">Unidades Eliminadas</h4>
                    </div>
                    <div class="body table-responsive">
                     
                      
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
 
                            <thead>
                                <tr>
                                    
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Descripcion</th>
                                    
                                   
                                    <th class="text-center">Activar</th>
                                  
                                </tr>
                            </thead>                            
                            <tbody>
                               
                                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center">
                                    <td> <?php echo e($unidad->nombre); ?></td>
                                    <td><?php echo e($unidad->descripcion); ?></td>
                          
                                  
                                       
                                  <td class="d-flex justify-content-around">

                                  
                                    <a href="<?php echo e(route('unidades.activas',$unidad->id)); ?>" class="btn btn-raised btn-info waves-effect">Activar</a>
                       

                           
                                </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                               
                            </tbody>
      
                        
  
                        </table>
                      
                  
                    </div>
                </div>
            </div>
        </div>

  



    </div>
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/unidades/eliminadas.blade.php ENDPATH**/ ?>