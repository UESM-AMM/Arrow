@extends('layouts.panel')
@section('contenido')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Agregar Clientes</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">

					</div>
					<div class="body">
                        <div class="row clearfix">
                            @if ($errors->any())
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>!Revise los campos¡</strong>
                                            @foreach ($errors->all() as $error)
                                                <span >{{ $error }}</span>
                                            @endforeach
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-12">
                            <form action="{{ route('clientes.store') }}" method="POST">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Nombre </strong>
                                            <input type="text" class="form-control"  id="nombre" name="nombre" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Teléfono </strong>
                                            <input type="text" class="form-control"  id="telefono" name="telefono" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <strong> Correo </strong>
                                            <input type="email" class="form-control"  id="email" name="email" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 " >
                                <strong> Empresa </strong>
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="id_empresa" id="id_empresa">
                                        @foreach ($empresas as $empresa)
                                        <option  value="{{$empresa->id}}">{{$empresa->nombre}}</option>
                                        @endforeach   
                                    </select>
                                </div>  
                                <br/>
                                <br/>
                                <div class="col-sm-12">
                                    <center>
                                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Guardar</button>
                                    <a href="{{ route('clientes.index')}}" class="btn btn-raised btn-default waves-effect">Cancelar</a>
                                    </center>
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
