{{-- Inherits from partial layout 'layouts' --}}
@extends('layouts.app')
{{-- Inherited layout --}}
@section('content')
    <h2 class="text-center">Evaluación antropométrica</h2>
    {!! Form::open(['action' => 'NutriologyController@store']) !!}
    {{-- TODO: There is no use having all the inputs from the mockup, since some of them can be automatically calculated
     But.. Ajax, Angular, JS, Jquery? --}}
    <div class="container-fluid">
        <div class="row">
            <h3 class="text-center text-info"><i>Primera parte del cuestionario</i></h3>
            <div class="col-md-offset-1 col-md-5">
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
                        Form::select('weight_category', [ 'Peso bajo' => 'Peso bajo', 'Peso normal' => 'Peso normal', 'Sobrepeso' => 'Sobrepeso'], null, ['class' => 'form-control','placeholder' => 'Elije una opción'])
                        }}
                    </div>
                    @if ($errors->has('weight_category'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('weight_category') }}</strong>
             </span>
                    @endif
                </div>
                <hr>
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
                <div class="form-group">
                    <label class="control-label" for="hip_circumference">Circunferencia de cadera</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::number('hip_circumference',
                        null,
                        ['placeholder' => 'Ingresa la circunferencia de cadera del paciente en centrímetros', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('hip_circumference'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('hip_circumference') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="waist_danger">Riesgo por cintura</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::select('waist_danger', [ 1 => 'Sí', 0 => 'No'],
                        null,
                        ['placeholder' => 'Elije una opción', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('waist_danger'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('waist_danger') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="waist_circumference">Circunferencia de cintura</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('waist_circumference', null, ['class' => 'form-control','placeholder' => 'Ingresa la circunferencia de cintura del paciente en centímetros'])
                        }}
                    </div>
                    @if ($errors->has('waist_circumference'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('waist_circumference') }}</strong>
             </span>
                    @endif
                </div>
                <hr>
            </div>

            <div class="col-md-6">
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
                <div class="form-group">
                    <label class="control-label" for="desnutrition_grade">Grado de desnutrición</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::select('desnutrition_grade', [ 1 => 'Leve', 2 => 'Moderada', 3 => 'Grave'], null, ['class' => 'form-control','placeholder' => 'Elije una opción'])
                        }}
                    </div>
                    @if ($errors->has('desnutrition_grade'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('desnutrition_grade') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="obesity_grade">Grado de obesidad</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::select('obesity_grade', [ 1 => 'Grado I', 2 => 'Grado II', 3 => 'Grado III'], null, ['class' => 'form-control','placeholder' => 'Elije una opción'])
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
                <div class="form-group">
                    <label class="control-label" for="hand_circunferency">Circunferencia de muñeca</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::number('hand_circunferency',
                        null,
                        ['placeholder' => 'Ingresa la circunferencia de la muñeca del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('hand_circunferency'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('hand_circunferency') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="icc">ICC</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::number('icc',
                        null,
                        ['placeholder' => 'Ingresa el ICC del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('icc'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('icc') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="mass_distribution">Distribución de masa</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::select('mass_distribution', ['Androide' => 'Androide', 'Prueba' => 'Prueba'],
                        null,
                        ['placeholder' => 'Elije una opción', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('mass_distribution'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('mass_distribution') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="complexity">Complexión</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::select('complexity', [ 1 => 'Pequeña', 2 => 'Mediana', 3 => 'Grande'], null, ['class' => 'form-control','placeholder' => 'Elije una opción'])
                        }}
                    </div>
                    @if ($errors->has('complexity'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('complexity') }}</strong>
             </span>
                    @endif
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <h3 class="text-center text-info"><i>Segunda parte del cuestionario</i></h3>
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label class="control-label" for="cmb">Circunferencia muscular del brazo / CMB</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::number('cmb',
                        null,
                        ['placeholder' => 'Ingresa el CMB del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('cmb'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('cmb') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="pcm">PCM {{-- << What does it mean? --}}</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('pcm',
                        null,
                        ['placeholder' => 'Ingresa el PCM del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('pcm'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('pcm') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="pct">PCT {{-- << What does it mean? --}}</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('pct',
                        null,
                        ['placeholder' => 'Ingresa el indice de masa corporal del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('pct'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('pct') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="pcse">PCSE {{-- << What does it mean? --}}</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('pcse',
                        null,
                        ['placeholder' => 'Ingresa el PCSE del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('pcse'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('pcse') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="pcsi">PCSI {{-- << What does it mean? --}}</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('pcsi',
                        null,
                        ['placeholder' => 'Ingresa el PCSI del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('pcsi'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('pcsi') }}</strong>
             </span>
                    @endif
                </div>
                <hr>
            </div>
            <div class="col-md-6">
                <h4 class="text-center">Impedancia bioeléctrica</h4>
                <div class="form-group">
                    <label class="control-label" for="grease_mass">Masa grasa</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('grease_mass',
                        null,
                        ['placeholder' => 'Ingresa la masa grasa del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('grease_mass'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('grease_mass') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="grease%">Porcentaje de grasa</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('grease%',
                        null,
                        ['placeholder' => 'Ingresa el porcentaje de grasa del paciente', 'class' => 'form-control', 'required', 'min' => '0', 'max' => '100', 'step' => 0.1 ])
                        }}
                    </div>
                    @if ($errors->has('grease%'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('grease%') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="GM">Grasa magra</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('GM',
                        null,
                        ['placeholder' => 'Ingresa la grasa magra del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('GM'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('GM') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="total_water">Agua total</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('total_water',
                        null,
                        ['placeholder' => 'Ingresa el agua total del paciente', 'class' => 'form-control', 'required'])
                        }}
                    </div>
                    @if ($errors->has('total_water'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('total_water') }}</strong>
             </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-md-11">
                <div class="form-group">
                    <label class="control-label" for="is_active">¿Realiza actividad física?</label>
                    <div class="input-group">
                        {{Form::radio('is_active',1)}} Sí
                        {{Form::radio('is_active',0)}} No
                    </div>
                    @if ($errors->has('is_active'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('is_active') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="exercise_intensity">Intensidad</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        form::select('exercise_intensity', [1 => 'Leve', 2 => 'Moderada', 3 => 'Mucha'],
                        null,
                        ['placeholder' => 'Elije una opción', 'class' => 'form-control'])
                        }}
                    </div>
                    @if ($errors->has('exercise_intensity'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('exercise_intensity') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="does_exercise">¿Realiza ejercicio?</label>
                    <div class="input-group">
                        {{Form::radio('does_exercise',1)}} Sí
                        {{Form::radio('does_exercise',0)}} No
                    </div>
                    @if ($errors->has('does_exercise'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('does_exercise') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="exercise_type">Tipo de ejercicio</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::text('exercise_type',
                        null,
                        ['placeholder' => 'Ingresa el tipo de ejercicio que realiza el paciente', 'class' => 'form-control'])
                        }}
                    </div>
                    @if ($errors->has('exercise_type'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('exercise_type') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="exercise_frecuency">Frecuencia</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::text('exercise_frecuency',
                        null,
                        ['placeholder' => 'Ingresa la frecuencia del ejercicio por semana del paciente', 'class' => 'form-control'])
                        }}
                    </div>
                    @if ($errors->has('exercise_frecuency'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('exercise_frecuency') }}</strong>
             </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label" for="exercise_duration">Duración por sesión</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        {{
                        Form::number('exercise_duration',
                        null,
                        ['placeholder' => 'Ingresa la duración de la sesión de ejercicio en minutos', 'class' => 'form-control' ])
                        }}
                    </div>
                    @if ($errors->has('exercise_duration'))
                        <span class="text-danger">
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <strong>{{ $errors->first('exercise_duration') }}</strong>
             </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{ Form::submit('Capturar', ['class' => 'btn btn-success'])  }}
    <a class="btn btn-success pull-right" href="{{ action('NutriologyController@index') }}">Ver registros</a>
    <div class="input-group input-group-md">
        {!! Form::close() !!}
    </div>
@endsection
