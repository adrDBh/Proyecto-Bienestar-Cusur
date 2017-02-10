<!-- Inherits from partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')
    <h2 class="text-center">Registros</h2>
    <!-- FILL OUT TABLE  -->
    @foreach($records as $patient)
        @foreach($patient->VitalSigns as $item)
        @endforeach
    @endforeach

@endsection
