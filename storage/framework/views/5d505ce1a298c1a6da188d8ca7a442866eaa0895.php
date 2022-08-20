<?php $__env->startSection('estilos'); ?>
    <!-- JQuery DataTable Css -->
    <link href="<?php echo e(asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

    <style type="text/css">
        #mapa {
          height: 50vh;
        }
      </style>
       
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>


<div class="container-fluid">
    <div class="block-header">

        <h2>Avance</h2>
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
        <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="card">
             
                                             
                
                <div class="header clearfix d-flex justify-content-center">
                    <a href="<?php echo e(route('conceptosec.show',$p)); ?>" class="btn btn-raised btn-light  " ><i class="material-icons">arrow_back</i></a>
                   
                    <h2 class="m-auto">Información</h2>
                  
                   <a class="btn btn-sm btn-raised btn-primary" href="<?php echo e(route('concepto.createPDF',$avancef->id)); ?>">Imprimir Reporte Concepto<i class="material-icons" style=" margin-bottom: 8px;">file_download</i> </a>
                    

                </div>
                
                <div class="body">
                    <div class="clearfix ">
                        <div class="row ">
                           
                        
                            <div class="col-4 ">
                                <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'. $imgco[0]->imagen)); ?>" alt="cargando"  width="200px" height="250px" >
                               
                            </div>

                            <div class="col-4  d-flex align-items-center justify-content-center">
                                <p style="font-size: 14px; text-transform: uppercase"><strong><?php echo e($avance->nombre_cliente); ?></strong></p>
                            </div>

                            <div class="col-4 ">
                                <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'. $imgco[1]->imagen)); ?>" alt="cargando"  width="200px" height="250px" >
                               
                             
                            </div>
                          

                        </div>
                         

                    </div>





                    <hr>
                    <div class="row ">
                        <div class="col-3  m-auto text-center">
                            <strong>Concepto:</strong>
                            <hr><br>
                            <strong><?php echo e($avance->codigo); ?></strong>
                        </div>

                        <div class="col-9  ">
                           <p><?php echo e($avance->nom_concepto); ?></p>
                        </div>
                  
                    </div> <br><hr>

                    <div class="col text-center">

                         <?php if($dato==0): ?> 
                        <a href="<?php echo e(route('registrar.datos',$avancef->id)); ?>" class="btn btn-raised btn-info m-auto">Datos</a><br><br>   
                         <?php endif; ?> 


                        <a href="<?php echo e(route('ver.avance',$avancef->id)); ?>" class="btn btn-raised btn-warning m-auto">Ver el registro avance</a>                          
                        <a href="<?php echo e(route('avances.agregarimagenubi',$avancef->id)); ?>" class="btn btn-raised btn-success m-auto"> Imagenes de avance</a>                          
                        <a href="<?php echo e(route('avancespdf.createPDFAvance',$avancef->id)); ?>" class="btn btn-raised g-bg-blush2 mt-4"> Imprimir avance</a> 

                        <br><br>
                        <p>Imagenes de avances</p>
                        <?php $__currentLoopData = $imagenesavances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imgavance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'.$imgavance->imagen)); ?>"  alt="cargando"  width="200px" height="250px" >
                        <p> <strong>Ubicación de la foto tomada</strong> <br>
                            <span>País:  <?php echo e($imgavance->country); ?></span><br>
                            <span>Código de la región:  <?php echo e($imgavance->regioncode); ?></span><br>
                            <span>Nombre de la ciudad:  <?php echo e($imgavance->cityname); ?></span><br>
                            <span>Descripción:  <?php echo e($imgavance->descripcion); ?></span>
                        </p>
                        <a href="<?php echo e(route('avances.editarimagen',$imgavance->id)); ?>" class="text-center btn btn-raised btn-sm btn-warning " >Editar</a>

                        <form action="<?php echo e(route('avances.eliminarimagen',$imgavance->id)); ?>" class=""  method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" style="cursor: pointer; background: transparent; border:0px;" class="btn btn-sm btn-raised btn-danger">Eliminar</button>
                        </form>
                    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>

                    
                  
          
                     



                    


                    


                    <br>
                    <div class="row">


                    </div>
                    <br><br>
                    <div class="container">
                        <div class="row">
                        
                    </div>


                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12 card ">
           <div class="row mt-2 p-1">
               <div class="col-12 text-center ">
                   <hr>
                   <p class="m-auto"><strong>Contratista: </strong><?php echo e($avance->nom_empresa); ?> 
                    <span style="color:red"> Fecha: </span><?php echo $fechaActual = date('d-m-Y ');?></p>
                    <hr> 

                    <p class="m-auto text-center"><strong>Ubicación: </strong><?php echo e($avance->ubicacion); ?> <p>
                        
                    <p class="m-auto"><strong>Contrato: </strong><?php echo e($avance->nom_contrato); ?> <strong>Importe: </strong> $<?php echo e($avance->conimporte); ?><p>
                    <hr>
               </div>

               <div class="col-12 ">
                   <div class="row  text-center">
                    <div class="col-6  text-center">
                        <p>Unidad:<br>
                      <strong><?php echo e($unidad->unidad_nombre); ?></strong>  </p>
                        
                    </div>
                    <div class="col-6 ">
                        <p>Periodo de ejecución</p>
                        <p>Inicio:</p>
                        <p><?php echo e($avancef->inicio); ?></p>
                     

                        <p>Fin:</p>
                        <p><?php echo e($avancef->fin); ?></p>
                      
                    </div>
                    <a href="<?php echo e(route('crearf',$avance->idc)); ?>" class="btn btn-raised btn-success m-auto">Ejecucion</a>
                   </div>
             
                               
               </div>

               <div class="col-12  mt-3"><hr>
                   <p class="text-center"><strong>CROQUIS DE LOCALIZACIÓN</strong></p><br>
                <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'. $imgc->imagen)); ?>" alt="cargando"  width="auto" height="auto" >
                               
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

    
    




    

    <script>

    // function mapainicio(){
    //     if(!!navigator.geolocation){

    //         var map;
    //         var OpcionesMapa = {
    //         zoom: 16,
    //         mapTypeId: 'roadmap'
    //         };

    //         map = new google.maps.Map(document.getElementById('mapa'), {
    //           OpcionesMapa
    //          });

           // map = new google.maps.Map(document.getElementById('mapa'), OpcionesMapa);
            

            // navigator.geolocation.getCurrentPosition(function(position){
            //     var geolocate= new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                
            //     var infoVentana = new google.maps.InfoWindow({
            //         map: map,
            //         position: geolocate,
            //         content: '<h1>Está es tú ubicación con Geolocalización </h1>'+
            //         '<p>Latitud: '+position.coords.latitude+' </p>'+ 
            //         '<p>Longitud: '+position.coords.longitude+' </p>'
                    
            //     });

            //     map.setCenter(geolocate);
            // });


           
           


        


    

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u205223607/domains/valvid.mx/public_html/arrow/resources/views/avances/show.blade.php ENDPATH**/ ?>