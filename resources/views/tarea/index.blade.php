@extends('layouts.app')

@section('template_title')
    Tarea
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mis Tarea') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tareas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Tarea') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-header">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                
                                            <span id="card_title">
                                                {{ __('Reporte de Tareas') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover">
                                                        <thead class="thead">
                                                            <tr>
                                                                <th>ESTADO</th>
                                                                <th>TOTAL</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($totales as $total)
                                                                <tr>
                                                                    <td>{{ $total->Estado }}</td>
                                                                    <td>{{ $total->total }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <p></p>

                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
        
                                    <span id="card_title">
                                        {{ __('Lista de Tareas') }}
                                    </span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>No</th>
                                                
                                                {{-- <th>Idusuario</th> --}}
                                                <th>Nombre</th>
                                                <th>Fecha Inicio</th>
                                                <th>Fecha Fin</th>
                                                <th>Estado</th>
                                                <th>Accion</th>
        
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tareas as $tarea)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
                                                    {{-- <td>{{ $tarea->idUsuario }}</td> --}}
                                                    <td>{{ $tarea->nombre }}</td>
                                                    <td>{{ $tarea->Fecha_Inicio }}</td>
                                                    <td>{{ $tarea->Fecha_Fin }}</td>
                                                    <td>{{ $tarea->Estado }}</td>
        
                                                    <td>
                                                        <form action="{{ route('tareas.destroy',$tarea->id) }}" method="POST">
                                                            {{-- <a class="btn btn-sm btn-primary " href="{{ route('tareas.show',$tarea->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                            <a class="btn btn-sm btn-success" href="{{ route('tareas.edit',$tarea->id) }}"><i class="fa fa-fw fa-edit"></i> Modificar</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                        </form>
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
                {!! $tareas->links() !!}
            </div>
        </div>
    </div>
@endsection
