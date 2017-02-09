<!-- Inherits from partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')

    <!-- TODO: Backend part -->
    <h2 class="text-center">Signos vitales</h2>

    {!! Form::open(['action' => 'NurseryController@store']) !!}

    <div class="form-group">
        <label class="control-label" for="p_name">Nombre del paciente</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
            {{
            form::text('p_nombre',
            null,
            ['placeholder' => 'Ingresa el nombre del paciente', 'class' => 'form-control', 'required'])
            }}
        </div>
        @if ($errors->has('p_nombre'))
            <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('p_nombre') }}</strong>
             </span>
        @endif
    </div>

    <div class="form-group">
        <label class="control-label" for="ln_1">Apellido paterno del paciente</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
            {{
            Form::text('ln_1',
            null,
            ['placeholder' => 'Ingresa el apellido paterno del paciente', 'class' => 'form-control', 'required'])
            }}
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="ln_2">Apellido materno del paciente</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
            {{
            Form::text('ln_2',
            null,
            ['placeholder' => 'Ingresa el apellido materno del cliente', 'class' => 'form-control', 'required'])
            }}
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="pressure">Presión arterial / TA: mmHg</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
            {{
            Form::text('pressure',
            null,
            ['placeholder' => 'Ingresa la presión arterial', 'class' => 'form-control', 'required'])
            }}
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="c_frecuency">Frecuencia cardiaca / FC: Pulso</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-hand-paper-o" aria-hidden="true"></i></div>
            {{
            Form::text('c_frecuency',
            null,
            ['placeholder' => 'Ingresa la frecuencia cardiaca', 'class' => 'form-control', 'required'])
            }}
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="b_frencuency">Frecuencia respiratoria / FR</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-fighter-jet" aria-hidden="true"></i></div>
            {{
            Form::text('b_frecuency',
            null,
            ['placeholder' => 'Ingresa la frecuencia respiratoria', 'class' => 'form-control', 'required'])
            }}
        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="b_frencuency">Temperatura / C°</label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-thermometer-empty" aria-hidden="true"></i></div>
            {{
            Form::text('temp',
            null,
            ['placeholder' => 'Ingresa la temperatura', 'class' => 'form-control', 'required'])
            }}
        </div>
        @if ($errors->has('temp'))
            <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('temp') }}</strong>
             </span>
        @endif
    </div>
    {{ Form::submit('Terminar captura', ['class' => 'btn btn-success'])  }}
    <div class="input-group input-group-md">

        {!! Form::close() !!}
    </div>
@endsection
