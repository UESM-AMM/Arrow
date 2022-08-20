<?php $__env->startSection('title',':: Registrate ::'); ?>
<?php $__env->startSection('contenido'); ?>

    <div class="container">
        <?php if($errors->any()): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>!Revise los campos¡</strong>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span ><?php echo e($error); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <?php endif; ?>
        <div class="card-top"></div>
        <div class="card">
            <h1 class="title"><span>Arrow</span>Registrate </h1>
            <div class="col-sm-12">
                <form action="<?php echo e(route('register')); ?>" method="POST">      
                    <?php echo csrf_field(); ?>      
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name" placeholder="Nombre" required="" autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-email"></i>
                    </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required="">
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required="">
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirma password" required="">
                    </div>
                </div>

                
                <div class="form-group">
                    <input type="checkbox" name="terminos" id="terms" class="filled-in chk-col-pink">
                    <label for="terms">Acepto los <a href="">terminos y condiciones</a>.</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-raised g-bg-blush2 waves-effect" >Registrate</button>
                </div>
                <div class="m-t-10 m-b--5 align-center">
                    <a href="<?php echo e(route('login')); ?>">Ya tienes una cuenta?</a>
                </div>
            </form>
            </div>
        </div>  
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projectarrow/resources/views/auth/register.blade.php ENDPATH**/ ?>