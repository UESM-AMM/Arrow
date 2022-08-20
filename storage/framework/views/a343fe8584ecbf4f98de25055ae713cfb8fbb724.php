<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>

    <?php echo $__env->yieldContent('title'); ?>


</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
<link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo e(asset('css/themes/all-themes.css')); ?>"/>
</head>
<body class="login-page authentication">

<?php echo $__env->yieldContent('contenido'); ?>


<div class="theme-bg"></div>
<!-- Jquery Core Js --> 
<script src="<?php echo e(asset('bundles/libscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo e(asset('bundles/vendorscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo e(asset('bundles/mainscripts.bundle.js')); ?>"></script><!-- Custom Js --> 
</body>

</html><?php /**PATH /var/www/projectarrow/resources/views/layouts/sesion.blade.php ENDPATH**/ ?>