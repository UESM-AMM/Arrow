<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(public_path('/plugins/bootstrap/css/bootstrap.min.css')); ?>" />
    <title>Avance</title>

    <style type="text/css">

  
        body{border: 0.4px solid black; padding: 2px}

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
            <img  src="<?php echo e(asset('img/usuarios/'. $imgco[0]->imagen)); ?>" alt="cargando" style="margin-top: 4px; margin-left: 60px; max-width: 120px;" > 
        </div>

        <div class="hija" style="margin-top: 50px; text-align: center">
            <p style="font-size: 14px; text-transform: uppercase"><strong><?php echo e($avance->nombre_cliente); ?></strong></p>
        </div>

        <div class="hija">
            <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'. $imgco[1]->imagen)); ?>" alt="cargando" style="margin-top: 4px; margin-left: 60px;  max-width: 120px;" >
                               
        </div>


       
    </div>
 

    <div class="general1" style="width: 100%;" >

        <div class="secundario " style="width: 50%; ">
          
            <p class="text-center"><strong>Contratista: </strong><?php echo e($avance->nom_empresa); ?> 
             <span style="color:red"> Fecha: </span><?php echo $fechaActual = date('d-m-Y ');?></p>
             <hr> 

             <p class="m-auto text-center"><strong>Ubicación: </strong><?php echo e($avance->ubicacion); ?> <p>
                 
             <p class="m-auto text-center"><strong>Contrato: </strong><?php echo e($avance->nom_contrato); ?><br> <strong>Importe: </strong> $<?php echo e($avance->conimporte); ?><p>
            
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

            <div class="ejecucion" style="width: 30%;  float: left; margin-left: 30px;">Unidad: <strong><?php echo e($unidad->unidad_nombre); ?></strong>  </div>
            <div class="ejecucion" style="width: 60%;  float: left;">Periodo de ejecucion: <span style="color:red"> Inicio: </span><?php echo e($avancef->inicio); ?> <span style="color:red"> Fin: </span>:<?php echo e($avancef->fin); ?></div>
          
      
           
         </div>

         <div class="ejecucionp" style="width: 100%; height: 80px; margin: auto;"  >

            <p class="text-center" style="margin-bottom: 10px; "><strong>Localizacion</strong></p>
            <hr>

            <div class="" style="width: 100%; height: 140px; ">
                <div style="width: 100%; height: 100px; ">
                    <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'. $conceptosimg[0]->imagen)); ?>" alt="Plano 1" style="width: 100%; height: 100%" >
           
                </div>
                <div style="width: 50%; float: left;">
                    <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'. $conceptosimg[1]->imagen)); ?>" alt="Plano 2" style="width: 100%; height: 100%" >
                </div>
                <div style="width: 50%; float: left;">
                    <img class="img-fluid" src="<?php echo e(asset('img/usuarios/'. $conceptosimg[2]->imagen)); ?>" alt="Plano 3" style="width: 100%; height: 100%" >
                </div>
            </div>
           
         </div>
        

         <div class="" style="width: 100%; height: 80px;">
            <p class="text-center" style="margin-bottom: 5px; "></p>
           
            
            <div >
                <p style="text-align: center; margin-right: 320px"><strong>FIRMANTES</strong></p>
                <hr>
                <?php $__currentLoopData = $firmantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $firmante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="width: 25%; float: left; margin-left: 15px; text-align: center" >
                    <p>Cargo: <strong><?php echo e($firmante->cargo); ?><strong></p><br>
                    <hr style="height: 2px; width: 100%; background-color: black">
                    <p>Nombre: <span style="text-transform: uppercase"><?php echo e($firmante->nombre); ?> <?php echo e($firmante->paterno); ?></span></p>
    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            
    
            </div>
        </div><br><br>
         
  
                    

    


   
    
   

    

    
   
    
   
</body>
</html>

<script type="text/php">
    if (isset($pdf))
      {
        
      }
  </script><?php /**PATH /home/u205223607/domains/valvid.mx/public_html/arrow/resources/views/avances/pdf2.blade.php ENDPATH**/ ?>