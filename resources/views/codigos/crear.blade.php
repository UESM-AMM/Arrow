@extends('layouts.panel')
@section('estilos')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection
@section('contenido')
    <div class="container-fluid">
        <div class="block-header">
          
            <h2>Codigo de la obra</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            @if (session('mensaje'))
            <div class="alert alert-success" role="alert">
              {{session('mensaje')}}
            </div>
            @endif
          
        </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card mt-4">
                        <div class="header text-center mt-3">
                            <h2 class="mt-4">Codigo principal de la obra</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
        
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    {{-- <form action="{{route('codigos.store')}}" method="POST"> --}}
                                        {!! Form::open(array('route' => 'codigos.store','method' => 'POST', 'file' => true, 'enctype' => 'multipart/form-data' )) !!}
                                        @csrf

                                        <div class="col-sm-6">
                                            <select class="form-control show-tick" id="empresa" name="id_contrato"  required>
                                                <option value="{{$contrato->id}}" selected>{{$contrato->contrato}}</option>
                                            </select>
                                        </div>
        


                                    <div class="form-group p-3">
                                        <div class="form-line ">
                                            <input type="text" class="form-control" name="codigo" placeholder="Codigo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 p-3">
                                    <div class="form-group p-3">
                                        <div class="form-line">
                                            <textarea rows="1" class="form-control no-resize auto-growth" name="concepto" placeholder="Descripcion"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 m-2">
                                    <label class="mb-3"><strong>Imagen  del croquis</strong></label><br>
                                <input type="file" name="croquis"   accept="image/*" />
       
                        </div>
                            
                            <div class="row clearfix">
                               
                                <div class="col-sm-12  d-flex justify-content-center">
                                    <button type="submit" class="btn btn-raised g-bg-blush2">Guardar</button>
                                    <button type="submit" class="btn btn-raised btn-default">Cancelar</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

    



    </div>
    

@endsection

