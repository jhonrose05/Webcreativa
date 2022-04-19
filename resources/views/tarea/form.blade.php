<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="display: none">
            {{ Form::label('idUsuario') }}
            {{ Form::text('idUsuario', auth()->user()->id, ['class' => 'form-control' . ($errors->has('idUsuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idUsuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                
            <div class="row">
                <div class="col">
                    {{ Form::label('nombre') }}
                    {{ Form::text('nombre', $tarea->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}                    
                </div>
                <div class="col">
                    
                </div>
            </div>
        </div>
        <p></p>
        <div class="row">
            <div class="col">
                <div class="form-group">
                            {{ Form::label('Fecha_Inicio') }}
                            {{ Form::date('Fecha_Inicio', $tarea->Fecha_Inicio, ['class' => 'form-control' . ($errors->has('Fecha_Inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
                            {!! $errors->first('Fecha_Inicio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('Fecha_Fin') }}
                    {{ Form::date('Fecha_Fin', $tarea->Fecha_Fin, ['class' => 'form-control' . ($errors->has('Fecha_Fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
                    {!! $errors->first('Fecha_Fin', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('Estado') }}
                    @if ($tarea->Estado == 'COMPLETADA')
                    {!! Form::select('Estado', $estado, $tarea->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opcion', 'disabled' => 'disabled', 'value' => '4']) !!} 
                    @else
                    {!! Form::select('Estado', $estado, $tarea->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opcion']) !!}
                    @endif
                    {{-- {{ Form::text('Estado', $tarea->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }} --}}
                        
                    {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <p>

    </p>
    <div class="box-footer mt20">
        @if ($tarea->Estado == 'COMPLETADA')
            <a class="btn btn-primary" href="{{ route('tareas.index') }}">Atras</a>
        @else
            <button type="submit" class="btn btn-primary">Guardar</button> 
        @endif

    </div>
</div>