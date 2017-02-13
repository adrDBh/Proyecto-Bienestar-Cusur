<!-- Inherits from partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')
    <h2 class="text-center">Registros</h2>
    <br>
    @if(count($records) == 0)
        <h3 class="text-center">No hay registros aún..</h3>
        <!-- FILL OUT TABLE  -->
    @else
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Apellido paterno</th>
                <th class="text-center">Apellido materno</th>
                <th class="text-center">Presión / mmHG</th>
                <th class="text-center">Frecuencia cardiaca / FC</th>
                <th class="text-center">Frecuencia respiratoria / FR</th>
                <th class="text-center">Temperatura / °C</th>
                <th class="text-center">Capturado el</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $patient)
                @foreach($patient->VitalSigns as $item)
                    <tr>
                        <td class="text-center">{{count($records)}}</td>
                        <td class="text-center">{{$patient->first_name}}</td>
                        <td class="text-center">{{$patient->first_lastname}}</td>
                        <td class="text-center">{{$patient->second_lastname}}</td>
                        <td class="text-center">{{$item->mmHG}}</td>
                        <td class="text-center">{{$item->FC}}</td>
                        <td class="text-center">{{$item->FR}}</td>
                        <td class="text-center">{{$item->Temp}}</td>
                        <td class="text-center">{{$patient->created_at}}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{url('nursery/create')}}" class="btn btn-success">Capturar nuevo</a>

@endsection
