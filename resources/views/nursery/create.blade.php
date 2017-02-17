{{-- Inherits from partial layout 'layouts' --}}
@extends('layouts.app')
{{-- Inherited layout --}}
@section('content')

    <h2 class="text-center">Signos vitales</h2>

    {!! Form::open(['action' => 'NurseryController@store']) !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-md-offset-1">
                <div class="form-group">
                    <label class="control-label" for="first_name">Nombre del paciente</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
                        {{
                        form::text('first_name',
                        null,
                        ['placeholder' => 'Ingresa el nombre del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('first_name'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('first_name') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="first_lastname">Apellido paterno del paciente</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
                        {{
                        Form::text('first_lastname',
                        null,
                        ['placeholder' => 'Ingresa el apellido paterno del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('first_lastname'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('first_lastname') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="second_lastname">Apellido materno del paciente</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
                        {{
                        Form::text('second_lastname',
                        null,
                        ['placeholder' => 'Ingresa el apellido materno del cliente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('second_lastname'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('second_lastname') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="mmHG">Presión arterial / TA: mmHg</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
                        {{
                        Form::text('mmHG',
                        null,
                        ['placeholder' => 'Ingresa la presión arterial, Ej 120/80', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('mmHG'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('mmHG') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="FC">Frecuencia cardiaca / FC: Pulso</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-hand-paper-o" aria-hidden="true"></i></div>
                        {{
                        Form::text('FC',
                        null,
                        ['placeholder' => 'Ingresa la frecuencia cardiaca, Ej 70', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('FC'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('FC') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="FR">Frecuencia respiratoria / FR</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-fighter-jet" aria-hidden="true"></i></div>
                        {{
                        Form::text('FR',
                        null,
                        ['placeholder' => 'Ingresa la frecuencia respiratoria, Ej 19', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('FR'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('FR') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="Temp">Temperatura / C°</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-thermometer-empty" aria-hidden="true"></i></div>
                        {{
                        Form::text('Temp',
                        null,
                        ['placeholder' => 'Ingresa la temperatura, Ej 36.7', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('Temp'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('Temp') }}</strong>
             </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{ Form::submit('Capturar', ['class' => 'btn btn-success'])  }}
    <a class="btn btn-success pull-right" href="{{ action('NurseryController@index') }}">Ver registros</a>
    <div class="input-group input-group-md">
        {!! Form::close() !!}
    </div>
@endsection
