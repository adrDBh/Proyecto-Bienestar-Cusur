{{-- Inherits from partial layout 'layouts' --}}
@extends('layouts.app')
{{-- Inherited layout --}}
@section('content')

    <h2 class="text-center">Título</h2>

    {!! Form::open(['action' => 'NurseryController@store']) !!}



    {{ Form::submit('Capturar', ['class' => 'btn btn-success'])  }}
    <a class="btn btn-success pull-right" href="{{ action('NurseryController@index') }}">Ver registros</a>
    <div class="input-group input-group-md">
        {!! Form::close() !!}
    </div>
@endsection
