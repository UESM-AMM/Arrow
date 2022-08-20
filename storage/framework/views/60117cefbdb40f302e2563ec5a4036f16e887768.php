<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Reporte de usuarios operativos</title>
<link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>" type="image/x-icon">
<link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Custom Css -->


</head>
<body class="theme-blush">
    <h2>Reporte de usuarios operativos</h2>
    <br><br>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                <div class="body table-responsive">
                    <table class="table table-bordered  ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Rol</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($usuario->id); ?></td>
                                    <td><?php echo e($usuario->name); ?></td>
                                    <td><?php echo e($usuario->email); ?></td>
                                    <td><?php echo e($usuario->rol); ?></td>





                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Arrow\app\resources\views/operativos/pdf.blade.php ENDPATH**/ ?>