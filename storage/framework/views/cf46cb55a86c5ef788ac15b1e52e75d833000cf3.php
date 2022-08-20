<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(public_path('/plugins/bootstrap/css/bootstrap.min.css')); ?>" />
    <title>Avance</title>

    <style type="text/css">
        table {
            border-collapse: collapse;
            border: 1 #000000 solid;
          
         
        }
        table td {
            border: 1 #000000 solid;
            
        }

        table thead{
            border: 1 #000000 solid;
        }

        .clearfix{
            float: none;
            clear: both;
        }


        #padre{
           
            width: 100%;
            height: 140px;
          
           
        }

        .hija{
          
            width: 30%;
            margin: 5px;
            height: auto;
            float: left;
           
          
        }

        .general1{
          
            height: 180px;
            /* background: red; */
            
        }

        .secundario{
           
            float: right;
          
           
        }  
        
        .tercero{
            background-color: rgb(71, 249, 255);
            
        }
       

       

        
    </style>
    
  
</head>
<body>

    <div  id="padre" >
        
        <div class="hija" >
            <img  src="<?php echo e(asset('img/usuarios/'. $imgco[0]->imagen)); ?>" alt="cargando" style="margin-left: 60px; max-width: 120px;" > 
        </div>

        <div class="hija" style="margin-top: 50px; text-align: center">
            <p style="font-size: 14px; text-transform: uppercase"><strong><?php echo e($avance->nombre_cliente); ?></strong></p>
        </div>

        <div class="hija">
            <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'. $imgco[1]->imagen)); ?>" alt="cargando" style="margin-left: 120px;  max-width: 150px;" >
                               
        </div>


       
    </div>
 

    <div class="general1" style="width: 100%;" >

        <div class="secundario " style="width: 50%; ">
          
            <p class="text-center"><strong>Contratista: </strong><?php echo e($avance->nom_empresa); ?> 
             <span style="color:red"> Fecha: </span><?php echo $fechaActual = date('d-m-Y ');?></p>
             <hr> 

             <p class="m-auto text-center"><strong>Ubicación: </strong><?php echo e($avance->ubicacion); ?> <p>
                 
             <p class="m-auto text-center"><strong>Contrato: </strong><?php echo e($avance->nom_contrato); ?> <strong>Importe: </strong> $<?php echo e($avance->conimporte); ?><p>
            
        </div>

        <div class="secundario" style="width: 50%;  display: inline-block ">
            
            <div class="codigo" style="width:20%; display:inline-block; margin-top: 20px" >
                <strong><?php echo e($avance->codigo); ?></strong>
       </div>
       <div class="descripcion " style="width:75%; float: right;">
           <p><?php echo e($avance->nom_concepto); ?></p>
       </div>
                
            
        </div>



    </div>

 
        <div class="ejecucionp" style="width: 100%; height: 80px; margin: auto;"  >

            <div class="ejecucion" style="width: 30%;  float: left; margin-left: 180px;">Unidad: <strong><?php echo e($unidad->unidad_nombre); ?></strong>  </div>
            <div class="ejecucion" style="width: 60%;  float: left;">Periodo de ejecucion: <span style="color:red"> Inicio: </span><?php echo e($avancef->inicio); ?> <span style="color:red"> Fin: </span>:<?php echo e($avancef->fin); ?></div>
          
      
           
         </div>

         
         
  
                    
    



    <div class="row " style="width: 100%">
        <div class="body">
                    
            <div class="mt-40"></div><br>
            <div class="row">
               <div class="col-md-12">
                   <div class="table-responsive">
                       <table class="table table-striped">
                           <thead>

                               <?php $total_estimado=0; $total_estimado1=0;  $total_estimado2=0; $total_pieza=0; $total_pieza1=0; $total_estimado3=0;
                               $total_estimado4=0; $vt=0; $vta=0; $totalp=0;  $est=0?>

                               <?php if($pie==1 && $l!=1 ): ?>
                               <th  class="text-center bg-info">Posicion</th>
                               <?php endif; ?>

                               <?php if($an==1 && $l!=1 ): ?>
                               <th  class="text-center bg-info">Posicion</th>
                               <?php endif; ?>

                          
                               <?php if($l==1): ?>
                               <tr>
                                   <th  class="text-center bg-info">Posicion</th>
                                   <th  class="text-center ">Localización
                                   <div class="bg-info" style="display:flex; width: 100%; justify-content: space-around; margin-left:60px">
                                        <div style=" display:inline-block;  width:20%; margin-top:20px " >
                                         DE
                                        </div>
                                        <div style=" text-align: center;width:80%; display: inline-block;  margin-top:20px"  >
                                         A
                                        </div>
                                   </div>
                                                                 
                               </th>
                               <th class="text-center " style="background-color: rgb(190, 191, 192)">Longitud</th>
                               <?php endif; ?>

                                    
                            <?php if( $l==1  && $are!=1 && $vt!=1 && $pie!=1 && $es!=1 && $ap!=1 && $an!=1  && $al!=1 && $ap!=1): ?>  
                            <th class="text-center">Total</th>
                            <?php endif; ?>
                              
                               <?php if($an==1): ?>
                               <th  class="text-center">Ancho 1</th>
                               <th class="text-center">Ancho 2</th>
                               <th  class="text-center" style="background-color: rgb(190, 191, 192)">Ancho Promedio </th>
                               <?php endif; ?>

                               

                               <?php if($an==1 && $are!=1 && $vt!=1 && $pie!=1 && $es!=1  ): ?>
                               <th  class="text-center">Total</th>
                               <?php endif; ?>
                               <?php if($ap==1): ?>
                                
                               <th class="text-center">Ancho</th>
                               <?php endif; ?>

                                
                               <?php if($ap==1 && $l==1  && $are!=1 && $vt!=1 && $pie!=1 && $es!=1 && $al!=1 ): ?>  
                               <th class="text-center">Total</th>
                               <?php endif; ?>

                               <?php if($are==1): ?>
                               <th  class="text-center" style="background-color: rgb(190, 191, 192)">Area</th>
                               <?php endif; ?>


                               <?php if($al==1): ?>
                               <th class="text-center">Altura</th>
                               <?php endif; ?>

                                  
                                  <?php if($ap==1 && $l==1  && $are!=1 && $vt!=1 && $pie!=1 && $es!=1 && $al==1 ): ?>  
                                  <th class="text-center">Total</th>
                                  <?php endif; ?>

                        


                               <?php if($vtt==1): ?>     
                               <th  class="text-center" style="background-color: rgb(190, 191, 192)">Volumen total</th>
                               <?php endif; ?>


                               

                               <?php if($l==1 && $an==1 && $ap!=1 && $are==1 && $vtt!=1 && $pie!=1 && $es!=1 && $al!=1  ): ?>
                               <th  class="text-center">Total</th>
                               <?php endif; ?>

                       
                               <?php if($pie==1): ?>     
                               <th  class="text-center" style="background-color: rgb(190, 191, 192)">Pieza</th>
                               <?php endif; ?>

                               

                               <?php if($pie==1 && $l!=1 && $es!=1  ): ?>
                               <th  class="text-center">Total</th>

                               <?php endif; ?>

                               
                               <?php if($pie==1 && $l==1 && $es!=1  ): ?>
                               <th  class="text-center">Total</th>
                               <?php endif; ?>


     

                               <?php if($es==1): ?>     
                               <th  class="text-center" style="background-color: rgb(190, 191, 192)">Espesor</th>
                               <?php endif; ?>

                                
                                <?php if($l==1 && $an==1 && $ap!=1 && $are!=1 && $vt!=1 && $pie==1 && $es==1  ): ?>
                                <th  class="text-center">Total</th>
                                <?php endif; ?>


                             
                           </tr></thead>

                           <tbody>

                               
                                        
                                        <?php $__currentLoopData = $datosG; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                          
                                      <td class="text-center bg-info"><?php echo e($key); ?></td>

                           
                                        <?php if($l==1): ?>
                                        
                                       <td class="d-flex">

                                        <td class="">
                                            <div class="bg-info" style="display:flex; width: 100%; justify-content: space-around; margin-left:60px">
                                                <div style=" display:inline-block;  width:20%;" >
                                                    <?php echo e($dato->hombro_derecho1); ?>

                                                </div>
                                                <div style=" text-align: center;width:80%; display: inline-block;"  >
                                                    <?php echo e($dato->hombro_derecho2); ?>

                                                </div>
                                           </div>
                                        </td>
                                        
                                        
                                       <td class=" text-center" style="background-color: rgb(190, 191, 192)"><?php echo e($dato->hombro_derecho2-$dato->hombro_derecho1); ?></td>
                                        <?php endif; ?>  

                                       
                                    
                                    </td>

                                    

                                  

                                     
                                     <?php if( $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 && $ap!=1 && $an!=1  && $al!=1 && $ap!=1): ?>  
                                     <td class="text-center"><?php echo e($dato->hombro_derecho2-$dato->hombro_derecho1); ?></td>
                                     <?php  $total_estimado2+= $dato->hombro_derecho2-$dato->hombro_derecho1;?>
                                     

                                     <?php endif; ?>
                                     

                                     <?php if($an==1): ?>
                                     <td class="text-center"><?php echo e($dato->ancho1); ?></td>
                                       <td class="text-center"><?php echo e($dato->ancho2); ?></td>
                                       <td class="text-center"  style="background-color: rgb(190, 191, 192)"><?php echo e(($dato->ancho1+$dato->ancho2)/2); ?></td>
                                     <?php endif; ?>

                                       

                                    <?php if($pie==1): ?>
                                    <td class=" text-center" style="background-color: rgb(190, 191, 192)"><?php echo e($dato->pieza); ?></td>
                                    
                                <?php endif; ?>
                                     <?php if($are==1): ?>
                                     <td class="text-center" style="background-color: rgb(190, 191, 192)"><?php echo e(($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2)); ?></td>
                                     <?php endif; ?>
                                     
                                        
                                        <?php if($an==1 && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1  ): ?>
                                        <td  class="text-center"><?php echo e(($dato->ancho1+$dato->ancho2)/2); ?></td>
                                        <?php $total_estimado3+=($dato->ancho1+$dato->ancho2)/2;?>
                                        <?php endif; ?>

                     
                                    
                                    <?php if($ap==1): ?>
                                    <td  class="text-center"><?php echo e($dato->anchot); ?></td>
                                    <?php endif; ?>

                                    <?php if($al==1): ?>
                                    <td  class="text-center"><?php echo e($dato->altura); ?></td>
                                    <?php endif; ?>

                                    <?php if($vtt==1 && $al==1): ?>
                                    <td  class="text-center" style="background-color: rgb(190, 191, 192)"><?php echo e((($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2)*$dato->altura)); ?></td>
                                    <?php $vt+=(($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2)*$dato->altura); ?>
                                    <?php endif; ?>

                                    <?php if($vtt==1 && $al!=1): ?>
                                    <td  class="text-center" style="background-color: rgb(190, 191, 192)"><?php echo e(($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2)); ?></td>
                                    <?php $vta+=($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2); ?>
                                    <?php endif; ?>


                                    <?php if($es==1): ?>
                                    <td  class="text-center" style="background-color: rgb(190, 191, 192)"><?php echo e($dato->espesor); ?></td>
                                   
                                    <?php endif; ?>



                                      
                                      <?php if($ap==1 && $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 && $al==1 ): ?>  
                                      <td class="text-center"><?php echo e((($dato->hombro_derecho2-$dato->hombro_derecho1)*($dato->altura)*($dato->anchot))); ?></td>
                                      <?php  $total_estimado1+= (($dato->hombro_derecho2-$dato->hombro_derecho1)*($dato->altura)*($dato->anchot)); ?>
                                      <?php endif; ?>


                                    
                                    <?php if($ap==1 && $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 &&  $al!=1): ?>  
                                    <td class="text-center"><?php echo e(($dato->hombro_derecho2-$dato->hombro_derecho1)*$dato->anchot); ?></td>
                                    <?php  $total_estimado+= ($dato->hombro_derecho2-$dato->hombro_derecho1)*$dato->anchot; ?>
                                    <?php endif; ?>
                                    

                            
                                       
                                         
                                     

                                     <?php if($pie==1 && $l!=1 && $es!=1  ): ?>       
                                      <td class="text-center "><?php echo e($dato->pieza); ?></td>
                                     <?php $total_pieza1+= $dato->pieza;?>
                               

                                    
                                     <?php endif; ?>
                                       

                                       
                               
                                       <?php if($pie==1 && $l==1 && $es!=1 && $an!=1  ): ?>
                                       <td class="text-center "><?php echo e($dato->pieza); ?></td>
                                       <?php $total_pieza+= $dato->pieza;?>
                                       <?php endif; ?>

                                          
                                        
                                          <?php if($pie==1 && $l==1 && $es!=1 && $an==1 && $are!=1  ): ?>
                                          <td class="text-center "><?php echo e(($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2)); ?></td>
                                          <?php $totalp+=($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2); ?>
                                     
                                          <?php endif; ?>

                                        
                                        <?php if($l==1 && $an==1 && $ap!=1 && $are==1 && $vtt!=1 && $pie!=1 && $es!=1  ): ?>
                                        <th  class="text-center"><?php echo e(($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2)); ?></th>
                                        <?php $total_estimado4+=($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2); ?>
                                        <?php endif; ?>



                                          

                                          <?php if($l==1 && $an==1 && $ap!=1 && $are!=1 && $vtt!=1 && $pie==1 && $es==1  ): ?>
                                          <?php echo e($total=($dato->hombro_derecho2-$dato->hombro_derecho1)*(($dato->ancho1+$dato->ancho2)/2)*($dato->espesor)); ?>

                                            <th class="text-center"><?php  echo number_format($total, 2, '.', ','); ?></th>
                                            <?php $est+=$total ?>
                                          <?php endif; ?>
  
                                    
  
                         


                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php if($l!=1 && $pie==1  ): ?>

      

                                <?php endif; ?>
                                 <tr>
                                    <td colspan="10"  class="text-center bg-success"><strong>Hombro Izquierdo</strong><td>
                                </tr>
                                <tr>
                                <th  class="text-center bg-info">Posicion</th>
                            </tr>
                                <tbody>
                                   
                                    <?php $__currentLoopData = $datosD; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>  $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td class="text-center bg-info"><?php echo e($key); ?></td>
                                    <?php if($l==1): ?>


                                     <td class="">
                                        <div class="bg-info" style="display:flex; width: 100%; justify-content: space-around; margin-left:60px">
                                            <div style=" display:inline-block;  width:20%;" >
                                                <?php echo e($dato->hombro_izquierdo1); ?>

                                            </div>
                                            <div style=" text-align: center;width:80%; display: inline-block;"  >
                                                <?php echo e($dato->hombro_izquierdo2); ?>

                                            </div>
                                       </div>
                                    </td>

                                    <td class=" text-center" style="background-color: rgb(190, 191, 192)"><?php echo e($dato->hombro_izquierdo2-$dato->hombro_izquierdo1); ?></td>
                                     <?php endif; ?>  
                                 </td>


                                  
                                  <?php if( $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 && $ap!=1 && $an!=1  && $al!=1 && $ap!=1): ?>  
                                  <td class="text-center"><?php echo e($dato->hombro_izquierdo2-$dato->hombro_izquierdo1); ?></td>
                                  <?php  $total_estimado2+= $dato->hombro_izquierdo2-$dato->hombro_izquierdo1;?>
                                  <?php endif; ?>
                                  

                                  <?php if($an==1): ?>
                                  <td class="text-center"><?php echo e($dato->ancho1); ?></td>
                                    <td class="text-center"><?php echo e($dato->ancho2); ?></td>
                                    <td class="text-center"  style="background-color: rgb(190, 191, 192)"><?php echo e(($dato->ancho1+$dato->ancho2)/2); ?></td>
                                  <?php endif; ?>

                                    

                                 <?php if($pie==1): ?>
                                 <td class=" text-center" style="background-color: rgb(190, 191, 192)"><?php echo e($dato->pieza); ?></td>
                                 
                             <?php endif; ?>
                                  <?php if($are==1): ?>
                                  <td class="text-center" style="background-color: rgb(190, 191, 192)"><?php echo e(($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2)); ?></td>
                                  <?php endif; ?>
                                  
                                     
                                     <?php if($an==1 && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1  ): ?>
                                     <td  class="text-center"><?php echo e(($dato->ancho1+$dato->ancho2)/2); ?></td>
                                     <?php $total_estimado3+=($dato->ancho1+$dato->ancho2)/2?>
                                     <?php endif; ?>

                  
                                 
                                 <?php if($ap==1): ?>
                                 <td  class="text-center"><?php echo e($dato->anchot); ?></td>
                                 <?php endif; ?>

                                 <?php if($al==1): ?>
                                 <td  class="text-center"><?php echo e($dato->altura); ?></td>
                                 <?php endif; ?>

                                 <?php if($vtt==1 && $al==1): ?>
                                 <td  class="text-center" style="background-color: rgb(190, 191, 192)"><?php echo e((($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2)*$dato->altura)); ?></td>
                                 <?php $vt+=(($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2)*$dato->altura); ?>
                                 <?php endif; ?>


                                 <?php if($vtt==1 && $al!=1): ?>
                                 <td  class="text-center" style="background-color: rgb(190, 191, 192)"><?php echo e(($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2)); ?></td>
                                 <?php $vta+=($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2); ?>
                                 <?php endif; ?>


                                 <?php if($es==1): ?>
                                 <td  class="text-center" style="background-color: rgb(190, 191, 192)"><?php echo e($dato->espesor); ?></td>
                                 <?php endif; ?>



                                   
                                   <?php if($ap==1 && $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 && $al==1 ): ?>  
                                   <td class="text-center"><?php echo e((($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*($dato->altura)*($dato->anchot))); ?></td>
                                   <?php  $total_estimado1+= (($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*($dato->altura)*($dato->anchot)); ?>
                                   <?php endif; ?>


                                 
                                 <?php if($ap==1 && $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 &&  $al!=1): ?>  
                                 <td class="text-center"><?php echo e(( $dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*$dato->anchot); ?></td>
                                 <?php  $total_estimado+= ( $dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*$dato->anchot; ?>

                                 <?php endif; ?>
                                 

                          


                                    
                                      
                                  

                                  <?php if($pie==1 && $l!=1 && $es!=1  ): ?>
                                   <td class="text-center " ><?php echo e($dato->pieza); ?></td>
                                   <?php $total_pieza1+= $dato->pieza;?>
                               
                                  
                                  <?php endif; ?>
                                    

                                    
                                    <?php if($pie==1 && $l==1 && $es!=1   && $an!=1  ): ?>
                                    <td class="text-center"><?php echo e($dato->pieza); ?></td>
                                    <?php $total_pieza+= $dato->pieza;?>
                                    <?php endif; ?>


                                      
                                        
                                        <?php if($pie==1 && $l==1 && $es!=1 && $an==1 && $are!=1  ): ?>
                                        <td class="text-center "><?php echo e(($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2)); ?></td>
                                        <?php $totalp+=($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2); ?>
                                   
                                        <?php endif; ?>

                                    
                                     


                                     

                                     <?php if($l==1 && $an==1 && $ap!=1 && $are==1 && $vtt!=1 && $pie!=1 && $es!=1  ): ?>
                                     <th  class="text-center"><?php echo e(($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2)); ?></th>
                                     <?php $total_estimado4+=($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2); ?>
                                     <?php endif; ?>



                                       

                                       <?php if($l==1 && $an==1 && $ap!=1 && $are!=1 && $vtt!=1 && $pie==1 && $es==1  ): ?>
                                       <?php echo e($total=($dato->hombro_izquierdo2-$dato->hombro_izquierdo1)*(($dato->ancho1+$dato->ancho2)/2)*($dato->espesor)); ?>

                                         <th class="text-center"><?php  echo number_format($total, 2, '.', ','); ?></th>
                                         <?php $est+=$total ?>
                                         <?php endif; ?>
                                 
                                  
                                   
                                   
                                    

                             </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php if($ap==1 && $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 &&  $al!=1): ?> 
                             <tr>

                                <td class="text-center" colspan="4"><strong>Total Estimado: </strong></td>
                                <td class="bg-info text-white text-center" ><?php echo $total_estimado?></td>
                             </tr>
                             <tr>
                              <td class="text-center" colspan="4"><strong>Volumen Contratado: </strong></td>
                              <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                           </tr>
                              <tr>
                                <td class="text-center" colspan="4"><strong>Volumen Excedente: </strong></td>
                                <td class="bg-info text-white text-center" ><?php if($total_estimado>$concepto->cantidad){ echo  $total_estimado-$concepto->cantidad;}else{echo 0;}  ?></td>
                            </tr>
                            <tr>
                              <td class="text-center" colspan="4"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                              <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                          </tr>
                          

                          
                             <?php endif; ?>
                             <?php if($ap==1 && $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 && $al==1 ): ?>  
                             <tr>

                                <td class="text-center" colspan="5"><strong>Total Estimado: </strong></td>
                                <td class="bg-info text-white text-center" ><?php echo number_format( $total_estimado1, 2, '.', ',');  ?></td>
                          
                             </tr>

                             <tr>
                              <td class="text-center" colspan="5"><strong>Volumen Contratado: </strong></td>
                              <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                           </tr>
                              <tr>
                                <td class="text-center" colspan="5"><strong>Volumen Excedente: </strong></td>
                                <td class="bg-info text-white text-center" ><?php if($total_estimado1>$concepto->cantidad){ echo number_format($total_estimado1-$concepto->cantidad,2,'.','.');}else{echo 0;}  ?></td>
                            </tr>
                            <tr>
                              <td class="text-center" colspan="5"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                              <td class="bg-info text-white text-center" ><?php if($total_estimado1>$concepto->cantidad){echo number_format($concepto->cantidad,2,'.','.');}else{echo number_format( $total_estimado1, 2, '.', ','); }?></td>
                          </tr>
                             <?php endif; ?>

                             

                             
                             
                             <?php if( $l==1  && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1 && $ap!=1 && $an!=1  && $al!=1 && $ap!=1): ?>  
                             <tr>

                                <td class="text-center" colspan="3"><strong>Total Estimado: </strong></td>
                                <td class="bg-info text-white text-center" ><?php echo number_format( $total_estimado2, 2, '.', ',');  ?></td>
                          
                             </tr>
                             <tr>
                              <td class="text-center" colspan="3"><strong>Volumen Contratado: </strong></td>
                              <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                              </tr>
                              <tr>
                                <td class="text-center" colspan="3"><strong>Volumen Excedente: </strong></td>
                                <td class="bg-info text-white text-center" ><?php if($total_estimado2>$concepto->cantidad){ echo number_format($total_estimado2-$concepto->cantidad,2,'.','.');}else{echo 0;}  ?></td>
                               </tr>
                               <tr>
                              <td class="text-center" colspan="3"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                              <td class="bg-info text-white text-center" ><?php echo number_format( $total_estimado2, 2, '.', ',');?></td>
                              </tr>
                             <?php endif; ?>

                              
                              
                              
                              <?php if( $pie==1 && $l==1 && $es!=1 && $an!=1  ): ?>   
                              <tr>
 
                                 <td class="text-center" colspan="4"><strong>Total Estimado: </strong></td>
                                 <td class="bg-info text-white text-center" ><?php echo number_format( $total_pieza, 0, '.', ',');  ?></td>
                           
                              </tr>

                              <tr>
                                <td class="text-center" colspan="4"><strong>Volumen Contratado: </strong></td>
                                <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                              </tr>
                              <tr>
                                  <td class="text-center" colspan="4"><strong>Volumen Excedente: </strong></td>
                                  <td class="bg-info text-white text-center" ><?php if($total_pieza>$concepto->cantidad){ echo number_format($total_pieza-$concepto->cantidad,0,'.','.');}else{echo 0;}  ?></td>
                               </tr>
                               <tr>
                                  <td class="text-center" colspan="4"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                                  <td class="bg-info text-white text-center" ><?php if($total_pieza>$concepto->cantidad){echo $concepto->cantidad;}else{echo $total_pieza;} ?></td>
                              </tr>
                              <?php endif; ?>
                      

                              

                                
                                <?php if( $pie==1 && $l!=1 && $es!=1  ): ?>   
                                <tr>
   
                                   <td class="text-center" colspan="2"><strong>Total Estimado: </strong></td>
                                   <td class="bg-info text-white text-center" ><?php echo number_format( $total_pieza1, 0, '.', ',');  ?></td>
                             
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="2"><strong>Volumen Contratado: </strong></td>
                                    <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                                  </tr>
                                  <tr>
                                      <td class="text-center" colspan="2"><strong>Volumen Excedente: </strong></td>
                                      <td class="bg-info text-white text-center" ><?php if($total_pieza1>$concepto->cantidad){ echo number_format($total_pieza1-$concepto->cantidad,2,'.','.');}else{echo 0;}  ?></td>
                                   </tr>
                                   <tr>
                                      <td class="text-center" colspan="2"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                                      <td class="bg-info text-white text-center" ><?php if($total_pieza1>$concepto->cantidad){echo $concepto->cantidad;}else{echo $total_pieza1;} ?></td>
                                  </tr>
                                <?php endif; ?>

                                 
                                 <?php if( $l!=1 && $ap==1 &&  $an==1 && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1): ?>   
                                 <tr>
    
                                    <td class="text-center" colspan="4"><strong>Total Estimado: </strong></td>
                                    <td class="bg-info text-white text-center" ><?php echo number_format( $total_estimado3*10, 2, '.', ',');  ?></td>
                              
                                 </tr>
                                 <?php endif; ?>


                                      
                                  <?php if( $l==1 && $an==1 && $ap!=1 && $are==1 && $vtt!=1 && $pie!=1 && $es!=1  ): ?>   
                                  <tr>
     
                                     <td class="text-center" colspan="7"><strong>Total Estimado: </strong></td>
                                     <td class="bg-info text-white text-center" ><?php echo number_format( $total_estimado4, 2, '.', ',');  ?></td>
                               
                                  </tr>

                                  <tr>
                                    <td class="text-center" colspan="7"><strong>Volumen Contratado: </strong></td>
                                    <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                                 </tr>
                                    <tr>
                                      <td class="text-center" colspan="7"><strong>Volumen Excedente: </strong></td>
                                      <td class="bg-info text-white text-center" ><?php if($total_estimado4>$concepto->cantidad){ echo number_format($total_estimado4-$concepto->cantidad,2,'.','.');}else{echo 0;}  ?></td>
                                  </tr>
                                  <tr>
                                    <td class="text-center" colspan="7"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                                    <td class="bg-info text-white text-center" ><?php if($total_estimado4>$concepto->cantidad){echo number_format($concepto->cantidad,2,'.','.');}else{echo number_format( $total_estimado4, 2, '.', ','); }?></td>
                                </tr>
                                  <?php endif; ?>

                                  

                                        
                                        <?php if( $l==1 && $an==1 && $ap!=1 && $are==1 && $vtt==1 &&$al==1 && $pie!=1 && $es!=1  ): ?>   
                                        <tr>
           
                                           <td class="text-center" colspan="8"><strong>Total Estimado: </strong></td>
                                           <td class="bg-info text-white text-center" ><?php echo number_format( $vt, 2, '.', ',');  ?></td>
                                     
                                        </tr>
                                        <tr>
                                          <td class="text-center" colspan="8"><strong>Volumen Contratado: </strong></td>
                                          <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                                       </tr>
                                          <tr>
                                            <td class="text-center" colspan="8"><strong>Volumen Excedente: </strong></td>
                                            <td class="bg-info text-white text-center" ><?php if($vt>$concepto->cantidad){ echo number_format($vt-$concepto->cantidad,2,'.','.');}else{echo 0;}  ?></td>
                                        </tr>
                                        <tr>
                                          <td class="text-center" colspan="8"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                                          <td class="bg-info text-white text-center" ><?php if($vt>$concepto->cantidad){echo number_format($concepto->cantidad,2,'.','.');}else{echo number_format( $vt, 2, '.', ','); }?></td>
                                      </tr>



                                        <?php endif; ?>
                                  
                                        
                                       <?php if( $l==1 && $an==1 && $ap!=1 && $are==1 && $vtt==1 &&$al!=1 && $pie!=1 && $es!=1  ): ?>   
                                         <tr>
                                  
                                     <td class="text-center" colspan="7"><strong>Total Estimado: </strong></td>
                                       <td class="bg-info text-white text-center" ><?php echo number_format( $vta, 2, '.', ',');  ?></td>
                                                            
                                       </tr>

                                       <tr>
                                        <td class="text-center" colspan="7"><strong>Volumen Contratado: </strong></td>
                                        <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                                     </tr>
                                        <tr>
                                          <td class="text-center" colspan="7"><strong>Volumen Excedente: </strong></td>
                                          <td class="bg-info text-white text-center" ><?php if($vta>$concepto->cantidad){ echo number_format($vt-$concepto->cantidad,2,'.','.');}else{echo 0;}  ?></td>
                                      </tr>
                                      <tr>
                                        <td class="text-center" colspan="7"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                                        <td class="bg-info text-white text-center" ><?php if($vta>$concepto->cantidad){echo number_format($concepto->cantidad,2,'.','.');}else{echo number_format( $vta, 2, '.', ','); }?></td>
                                    </tr>

                                      <?php endif; ?> 


                                           
                                        
                                        <?php if($l==1 && $an==1 && $ap!=1 && $are!=1 && $vt!=1 && $pie==1 && $es==1 ): ?>
                                        <tr>
                                 
                                    <td class="text-center" colspan="8"><strong>Total Estimado: </strong></td>
                                      <td class="bg-info text-white text-center" ><?php echo number_format( $est, 2, '.', ',');  ?></td>
                                                           
                                      </tr>


                                     <tr>
                                      <td class="text-center" colspan="8"><strong>Volumen Contratado: </strong></td>
                                      <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                                   </tr>
                                      <tr>
                                        <td class="text-center" colspan="8"><strong>Volumen Excedente: </strong></td>
                                        <td class="bg-info text-white text-center" ><?php if($est>$concepto->cantidad){ echo number_format($est-$concepto->cantidad,2,'.','.');}else{echo 0;}  ?></td>
                                    </tr>
                                    <tr>
                                      <td class="text-center" colspan="8"><strong>Volumen Normal por cobrar en esta estimacion: </strong></td>
                                      <td class="bg-info text-white text-center" ><?php if($est>$concepto->cantidad){echo number_format($concepto->cantidad,2,'.','.');}else{echo number_format( $est, 2, '.', ','); }?></td>
                                  </tr>

                                     <?php endif; ?> 

                                
                                     
                                     <?php if( $l==1 && $ap!=1&& $an==1 && $are!=1 && $vtt!=1 && $pie!=1 && $es!=1): ?>   
                                     <tr>
        
                                        <td class="text-center" colspan="6"><strong>Total Estimado: </strong></td>
                                        <td class="bg-info text-white text-center" ><?php echo number_format( $total_estimado3*10, 2, '.', ',');  ?></td>
                                  
                                     </tr>

                                     <tr>
                                      <td class="text-center" colspan="6"><strong>Volumen Contratado: </strong></td>
                                      <td class="bg-info text-white text-center" ><?php echo e($concepto->cantidad); ?></td>
                                   </tr>
                                      <tr>
                                        <td class="text-center" colspan="6"><strong>Volumen Excedente: </strong></td>
                                        <td class="bg-info text-white text-center" ><?php if($total_estimado3*10>$concepto->cantidad){ echo number_format($total_estimado3*10-$concepto->cantidad,2,'.','.');}else{echo 0;}  ?></td>
                                    </tr>
                                    <tr>
                                      <td class="text-center" colspan="6"><strong>Volumen Normal por cobrar en esta estimación: </strong></td>
                                      <td class="bg-info text-white text-center" ><?php if($total_estimado3*10>$concepto->cantidad){echo number_format($concepto->cantidad,2,'.','.');}else{echo number_format( $total_estimado3*10, 2, '.', ','); }?></td>
                                  </tr>
                                     <?php endif; ?>

                                    

                                     
                              
                                        <?php if( $pie==1 && $l==1 && $es!=1 && $an==1  ): ?>   
                                        <tr>
          
                                          <td class="text-center" colspan="7"><strong>Total Estimado: </strong></td>
                                          <td class="bg-info text-white text-center" ><?php echo number_format( $totalp, 2, '.', ',');  ?></td>
                                    
                                        </tr>
                                        <?php endif; ?>

                            
                               
                              


                          
                         
                          </tbody>
         
                               
                         
                          
          
          </table>

        </div>
    </div>
</div>  








</div>

</div>
</div>
</div>


</div>


</div>
       

        


    </div>
        </div>
        </div>
    </div>


    <div class="" style="width: 100%; height: 250px;">
        <p class="text-center" style="float: left; margin-left:230px; margin-top:140px; align-items: center"><strong>CROQUIS DE LOCALIZACIÓN</strong></p><br>
        <img  class="text-center" src="<?php echo e(asset('img/usuarios/'.$imgc->imagen)); ?>" alt="cargando" style="margin-left: 60px; width: 320px;  height: 260px; float: right;" > 

    </div><br><br>


    <div class="" style="width: 100%; height: 300px;">
        <p class="text-center" style="margin-bottom: 45px; "><strong>FIRMANTES</strong></p>
        <div >
            <?php $__currentLoopData = $firmantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $firmante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="width: 20%; float: left; text-align: center" >
                <p>Cargo: <strong><?php echo e($firmante->cargo); ?><strong></p><br><br>
                <hr style="height: 2px; width: 100%; background-color: black">
                <p>Nombre: <span style="text-transform: uppercase"><?php echo e($firmante->nombre); ?></span></p>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        

        </div>
    </div><br><br>

    

        
         
  
                    

    


   
    
   

    

    
   
    
   
</body>
</html><?php /**PATH /var/www/projectarrow/resources/views/avances/pdf.blade.php ENDPATH**/ ?>