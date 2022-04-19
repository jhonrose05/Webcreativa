@extends('layouts.app')

@section('template_title')
    {{ $tarea->name ?? 'Show Tarea' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $tarea->idUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tarea->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $tarea->Fecha_Inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $tarea->Fecha_Fin }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tarea->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
