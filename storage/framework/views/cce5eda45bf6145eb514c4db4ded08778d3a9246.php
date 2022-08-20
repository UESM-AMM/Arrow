
<?php $__env->startSection('styles'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="block-header">
            <h3 style="font-size: 15px;">¡ Bienvenido <strong> <?php echo e(Auth::user()->name); ?> </strong> al sistema ARROW !</h3>
          <?php
               use App\Models\User;
               use Illuminate\Support\Facades\DB;
               use Illuminate\Support\Facades\Auth;
               use Spatie\Permission\Models\Role;

                    $id=Auth::id();
                    $validacion=User::select('confirmed')->where('id','=',$id)->first();


                    $rol=DB::table('users')->join('model_has_roles','users.id','=','model_has_roles.model_id')
                    ->join('roles','roles.id','=','model_has_roles.role_id')
                    ->select('roles.name')
                    ->where('users.id','=',$id)->first();

                $cant_usuarios=DB::table('users')
                ->select(DB::raw('count(*) as cantidad_usuarios'))
                ->where('id_tenant','=',$id)
                ->first();

                
                //checar mañana
                // $cant_usuarios_operativos=DB::table('users')->join('model_has_roles','users.id','=','model_has_roles.model_id')
                //     ->join('roles','roles.id','=','model_has_roles.role_id')
                //     ->select(DB::raw('count(users.id) as cantidad_usuarios_operativos'))
                //     ->whereIn('roles.name','=',"Responsable de obra")
                //     ->where('users.id','=',$id)->count();

                $id_roltenant=Role::select('id')->where('name','=','Tenant')->first();
                $id_responsable=Role::select('id')->where('name','=','Responsable de empresa')->first();

               // $id=User::select('id_tenant','empresa')->where('id','=',$id)->first();

               $empresa=DB::table('users')->select('empresa')->where('id','=',$id)->first();
            
               $usuario=DB::table('users')->select('id_tenant')->where('id','=',$id)
                ->first();

            
                $cant_usuarios_operativos=DB::table('users')
                ->join('empresas', 'users.empresa', '=', 'empresas.id')
                ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                ->join('roles','roles.id','=','model_has_roles.role_id')
                ->where('users.id_tenant',$usuario->id_tenant)
                ->whereNotIn('role_id', [$id_roltenant->id, $id_responsable->id,])
                ->where('empresas.id','=',$empresa->empresa)
                ->count();


           

                $afianzadoras=DB::table('afianzadoras')
                ->select(DB::raw('count(*) as cantidad_afianzadoras'))
                ->where('id_empresa','=',$empresa->empresa)
                ->first();

                

                $clientes=DB::table('clientes')
                ->select(DB::raw('count(*) as cantidad_clientes'))
                ->where('id_tenant','=',$usuario->id_tenant)->first();

                $contratos=DB::table('contratos')
                ->select(DB::raw('count(*) as cantidad_contratos'))
                ->where('id_empresa','=',$empresa->empresa)->first();

                $cargos=DB::table('cargos')
                ->select(DB::raw('count(*) as cantidad_cargos'))
                ->where('id_empresa','=',$empresa->empresa)->first();

                $unidades=DB::table('unidad')
                ->select(DB::raw('count(*) as cantidad_unidades'))
                ->where('id_empresa','=',$empresa->empresa)->first();

                $contratos_asignados=DB::table('contratos')
                ->select(DB::raw('count(*) as cantidad_asignados'))
                ->where('id_responsable','=',$id)->first();

                $contratos_asignados_asistente=DB::table('contratos')
                ->select(DB::raw('count(*) as cantidad_asistentes'))
                ->where('id_asistente','=',$id)->first();

                $cant_empresas=DB::table('empresas')
                ->select(DB::raw('count(*) as cantidad_empresas'))
                ->where('id_tenant','=',$id)->first();

                

          ?>  
        </div>
        <?php if($validacion->confirmed==1): ?>
        <div class="row clearfix">
            <?php if($rol->name=="Tenant"): ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3> <i class="zmdi zmdi-account"></i> Usuarios:  <strong><?php echo e($cant_usuarios->cantidad_usuarios); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="material-icons">business</i> Empresas:  <strong><?php echo e($cant_empresas->cantidad_empresas); ?></strong></h3>
                        
                        
                    </div>
                </div>
            </div>

            <?php elseif($rol->name=="Responsable de empresa"): ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="zmdi zmdi-account"></i> Operativos:  <strong><?php echo e($cant_usuarios_operativos); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="material-icons">next_week</i> Afianzadoras:  <strong><?php echo e($afianzadoras->cantidad_afianzadoras); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="material-icons">supervisor_account</i> Clientes:  <strong><?php echo e($clientes->cantidad_clientes); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="material-icons">assignment</i> Contratos:  <strong><?php echo e($contratos->cantidad_contratos); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3> <i class="material-icons">business_center</i> Cargos:  <strong><?php echo e($cargos->cantidad_cargos); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="material-icons">format_shapes</i> Unidades:  <strong><?php echo e($unidades->cantidad_unidades); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            <?php elseif($rol->name=="Responsable de obra"): ?>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="material-icons">assignment</i> Contratos asignados:  <strong><?php echo e($contratos_asignados->cantidad_asignados); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="material-icons">format_shapes</i> Unidades:  <strong><?php echo e($unidades->cantidad_unidades); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            <?php elseif($rol->name=="Asistente de obra"): ?>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3> <i class="material-icons">assignment</i> Contratos asignados:  <strong><?php echo e($contratos_asignados_asistente->cantidad_asistentes); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        
                        <h3><i class="material-icons">format_shapes</i> Unidades:  <strong><?php echo e($unidades->cantidad_unidades); ?></strong></h3>
                    </div>
                        
                        
                        
                </div>
            </div>
            <?php endif; ?>
            
            
            
            
        </div>
        <?php elseif($validacion->confirmed==0): ?>
        <div class="row clearfix">
            <div class="col-sm-12" >
                <div class="card" style="height: 250px;">
                    <div class="body text-center">
                       <h3 style="color:#dd5e89;">¡Por favor, debe de verificar su correo electrónico, para poder tener acceso al sistema!</h3>
                                
                                    <blockquote class="blockquote">
                                        <p>Debe revisar su bandeja de correo, y dar clic en el enlace para poder activar su cuenta.</p>
                                        <span style="font-size: 17px;"><strong>"Puede ser que el correo se encuentre en la bandeja de spam o correo no deseado."</strong></span>
                                    </blockquote>
                                     
                </div>
            </div>
        
        </div>
        <?php endif; ?>
        
    </div>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH A:\Documentos\UTN\Estadia Ingenieria\Proyecto\Arrow\app\resources\views/home.blade.php ENDPATH**/ ?>