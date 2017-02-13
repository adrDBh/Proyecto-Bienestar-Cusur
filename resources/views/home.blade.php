<!-- Inherits from partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')
    <?php
    # DRY URLS
    $NurseryURL = url('nursery/create');
    $MedicsURL = url('medics/create');
    $SlpceURL = url('slpce/create');
    $NutURL = url('nutriology/create');
    $LabsURL = url('laboratory/create');
    $ReportsURL = url('reports/create');
    ?>
    <div class="container-fluid">
        {{-- FIRST ROW --}}
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ $NurseryURL }}" class="thumbnail">
                    <div class="frontpage_square">
                        <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div>
                </a>
                <center><a href="{{ $NurseryURL }}"
                           class="btn btn-large btn-primary text-center">Enfermería</a>
                </center>
                <br>
            </div>
            <div class="col-sm-4">
                <a href="{{ $MedicsURL }}" class="thumbnail">
                    <div class="frontpage_square">
                        <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div>
                </a>
                <center><a href="{{ $MedicsURL }}" class="btn btn-large btn-primary text-center">Médicos</a></center>
                <br>
            </div>
            <div class="col-sm-4">
                <a href="{{ $SlpceURL }}" class="thumbnail">
                    <div class="frontpage_square">
                        <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div>
                </a>
                <center><a href="{{ $SlpceURL }}" class="btn btn-large btn-primary text-center">SLPCE</a></center>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ $NutURL }}" class="thumbnail">
                    <div class="frontpage_square">
                        <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div>
                </a>
                <center><a href="{{ $NutURL }}" class="btn btn-large btn-primary text-center">Nutriología</a>
                </center>
                <br>
            </div>
            <div class="col-sm-4">
                <a href="{{ $LabsURL }}" class="thumbnail">
                    <div class="frontpage_square">
                        <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div>
                </a>
                <center><a href="{{ $LabsURL }}" class="btn btn-large btn-primary text-center">Laboratoriales</a>
                </center>
                <br>
            </div>
            <div class="col-sm-4">
                <a href="{{ $ReportsURL }}" class="thumbnail">
                    <div class="frontpage_square">
                        <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div>
                </a>
                <center><a href="{{ $ReportsURL }}" class="btn btn-large btn-primary text-center">Reportes</a></center>
                <br>
            </div>
        </div>
    </div>
@endsection
