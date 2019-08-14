@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2></h2>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    @if(session('status'))
                    <div class="alert bg-green alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                        {{session('status')}}
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="alert bg-red alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h2>
                        Inventario
                    </h2>
                    <button type="button" data-tooltip="tooltip" data-placement="top" title="Nuevo estudiante" class="btn bg-green btn-circle waves-effect waves-circle waves-float right" data-toggle="modal" data-target="#createModal">
                        <i class="material-icons">add</i>
                    </button>
                </div>
                <div class="body">
                    <table id="dataTable" class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <th>Número de control</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Grado y Grupo</th>
                                <th>Maestro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('tools.create')
    @include('tools.delete')
</div>
@endsection