@extends('layouts.panel')
@section('estilos')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection
@section('contenido')
    <div class="container-fluid">
        <div class="block-header">
          
            <h2>Unidades Registradas</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            @if (session('mensaje'))
            <div class="alert alert-success" role="alert">
              {{session('mensaje')}}
            </div>
            @endif
            @if (session('mensaje_alerta'))
            <div class="alert alert-danger" role="alert">
              {{session('mensaje_alerta')}}
            </div>
            @endif
            <div>
                @can('crear-unidad')
                <a href="{{ route('unidades.create') }}" class="btn btn-raised btn-success">Agregar Unidad</a>
                @endcan
                @if ($inactivos !=0)
                <a href="{{route('unidades.baja')}}" class="btn btn-raised btn-warning">Unidades Eliminadas</a>
                @endif

            </div>
        </div>

        {{-- <div class="row clearfix">
            @foreach ($empleados as $empleado)
            <div class="col-lg-4 col-md-6 col-sm-12">
               
                <div class="card all-patients">
                    <div class="body">
                        <div class="row d-flex justify-content-center" >
                         

                            <div class="col-lg-8 col-md-12 m-b-0">
                            <div class="bg-info d-flex justify-content-between">
                                <h5 class=""> Nombre: {{$empleado->nombre}} </h5>


                                 
                          
                          
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        
        </div> --}}

        <div class="row clearfix">
            <div class="col-lg-11 col-md-12 col-sm-12 m-auto">
                <div class="card">
                    <div class="header">
                        <h4 class="text-center">Unidades</h4>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Descripcion</th>
                                    {{-- <th>Estatus</th> --}}
                                   
                                    <th class="text-center">Acciones</th>
                                  
                                </tr>
                            </thead>                            
                            <tbody>
                                @foreach ($unidades as $unidad)
                                <tr class="text-center">
                                    <td> {{$unidad->nombre}}</td>
                                    <td>{{$unidad->descripcion}}</td>
                          
                                  
                                       
                                  <td class="d-flex justify-content-around">
                                    @can('editar-unidad')
                                    <a href="{{route('unidades.edit',$unidad->id)}}" class="edit"><i class="zmdi zmdi-edit text-warning"></i></a>
                                    @endcan
                                    @can('borrar-unidad')
                                   <form action="{{route('unidades.destroy',$unidad->id)}}"   method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i></button>
                                  </form>
                                  @endcan

                           
                                </td>
                                </tr>
                                @endforeach
                             
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

  



    </div>
    

@endsection

