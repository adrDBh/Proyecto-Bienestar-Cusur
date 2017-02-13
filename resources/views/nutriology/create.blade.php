<!-- Inherits from partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')
    <h2 class="text-center">Evaluación antropométrica</h2>
    {!! Form::open(['action' => 'NutriologyController@store']) !!}
    <!-- TODO: There is no use having all the inputs from the mockup, since some of them can be automatically calculated -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label class="control-label" for="first_name">Talla</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::number('size',
                        null,
                        ['placeholder' => 'Ingresa la talla del paciente en centímetros', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('size'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('size') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="current_weight">Peso actual</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('current_weight',
                        null,
                        ['placeholder' => 'Ingresa el peso actual del paciente en Kilogramos', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('current_weight'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('current_weight') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="IMC">Indice de masa corporal / IMC</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::text('IMC',
                        null,
                        ['placeholder' => 'Ingresa el indice de masa corporal del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('IMC'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('IMC') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="weight_category">Categoría de peso</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::select('weight_category', [ 1 => 'Peso bajo', 2 => 'Peso normal', 3 => 'Sobrepeso'], null, ['class' => 'form-control','placeholder' => 'Elije una opción'])
                        }}
                    </div>
                    @if ($errors->has('weight_category'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('weight_category') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="obesity_grade">Grado de obesidad</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::select('obesity_grade', [ 1 => 'Uno', 2 => 'Dos', 3 => 'Tres'], null, ['class' => 'form-control','placeholder' => 'Elije una opción'])
                        }}
                    </div>
                    @if ($errors->has('obesity_grade'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('obesity_grade') }}</strong>
             </span>
                    @endif
                </div>
                <hr>
            </div>

            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label class="control-label" for="ideal_weight">Peso ideal / KG</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::number('ideal_weight',
                        null,
                        ['placeholder' => 'Ingresa el peso ideal del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('ideal_weight'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('ideal_weight') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="habitual_weight">Peso habitual / KG</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::number('habitual_weight',
                        null,
                        ['placeholder' => 'Ingresa el peso habitual del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('habitual_weight'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('habitual_weight') }}</strong>
             </span>
                    @endif
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
            </div>
        </div>
    </div>



    {{ Form::submit('Terminar captura', ['class' => 'btn btn-success'])  }}
    <a class="btn btn-success pull-right" href="{{ action('NutriologyController@index') }}">Ver registros</a>
    <div class="input-group input-group-md">
        {!! Form::close() !!}
    </div>
@endsection
