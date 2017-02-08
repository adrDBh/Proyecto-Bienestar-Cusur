<!-- Inherits from partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')
              <div class="container-fluid">
              {{-- FIRST ROW --}}
              <div class="row">
                <div class="col-sm-4">
                      <a href="{{url('nursery')}}" class="thumbnail">
                        <div class="frontpage_square">
                      <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div></a>
                    <center><a href="{{url('nursery')}}" class="btn btn-large btn-primary text-center">Enfermería</a></center><br>
                </div>
                <div class="col-sm-4">
                      <a href="{{url('medics')}}" class="thumbnail">
                        <div class="frontpage_square">
                      <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div></a>
                    <center><a href="{{url('medics')}}" class="btn btn-large btn-primary text-center">Médicos</a></center><br>
                </div>
                <div class="col-sm-4">
                      <a href="{{url('slpce')}}" class="thumbnail">
                        <div class="frontpage_square">
                      <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div></a>
                    <center><a href="{{url('slpce')}}" class="btn btn-large btn-primary text-center">SLPCE</a></center><br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                      <a href="{{url('nutriology')}}" class="thumbnail">
                        <div class="frontpage_square">
                      <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div></a>
                    <center><a href="{{url('nutriology')}}" class="btn btn-large btn-primary text-center">Nutriología</a></center><br>
                </div>
                <div class="col-sm-4">
                      <a href="{{url('labs')}}" class="thumbnail">
                        <div class="frontpage_square">
                      <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div></a>
                    <center><a href="{{url('labs')}}" class="btn btn-large btn-primary text-center">Laboratoriales</a></center><br>
                </div>
                <div class="col-sm-4">
                      <a href="{{url('reports')}}" class="thumbnail">
                        <div class="frontpage_square">
                      <img src="{{asset('img/no-img.png')}}" class="img img-responsive full-width"/></div></a>
                    <center><a href="{{url('reports')}}" class="btn btn-large btn-primary text-center">Reportes</a></center><br>
                </div>
              </div>
              </div>
@endsection
