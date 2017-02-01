<!-- Inherits frmo partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')

    <div class="col-md-4">
        @include('layouts.sidebar-menu')
    </div>
    <div class="col-md-8">
        {{-- TODO
        @role('Registrado')
        <p>No tienes acceso al panel administrativo porque tu cuenta no ha sido activada aún, contacta a el
            administrador</p>
        @endrole
        --}}

        {{--@permission('access-panel')--}}
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">Iniciaste sesión.</div>
        </div>
    </div>
    {{-- @endpermission --}}
@endsection
