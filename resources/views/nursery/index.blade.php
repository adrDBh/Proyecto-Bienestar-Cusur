<!-- Inherits from partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')
<!-- TODO: Backend part -->
<h2 class="text-center">Signos vitales</h2>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del paciente</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos del paciente</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Presión</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Frecuencia</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Frecuencia respiratoria</label>
    <input type="text" class="form-control" id="">
  </div>
  <button type="submit" class="btn btn-default">Terminar captura</button>
</form>
@endsection
