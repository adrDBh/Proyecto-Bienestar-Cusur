<!-- Inherits from partial layout 'layouts' -->
@extends('layouts.app')
<!-- Inherited layout -->
@section('content')
<!-- TODO: Backend part -->
<h2 class="text-center">Signos vitales</h2>
<form class="" action="<?php #algo aquí ?>" method="post">

  <div class="form-group">
  <label class="control-label" for="p_name">Nombre del paciente</label>
  <div class="input-group">
    <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
    <input class="form-control" name="p_name" type="text" placeholder="Ingresa el nombre del paciente"/>
  </div>
</div>

<div class="form-group">
<label class="control-label" for="ln_1">Apellido paterno del paciente</label>
<div class="input-group">
  <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
  <input class="form-control" name="ln_1" type="text" placeholder="Ingresa el apellido paterno del paciente"/>
</div>
</div>

<div class="form-group">
<label class="control-label" for="ln_2">Apellido materno del paciente</label>
<div class="input-group">
  <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></div>
  <input class="form-control" name="ln_2" type="text" placeholder="Ingresa el apellido materno del paciente"/>
</div>
</div>

<div class="form-group">
<label class="control-label" for="pressure">Presión arterial</label>
<div class="input-group">
  <div class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
  <input class="form-control" name="pressure" type="text" placeholder="Ingresa la presión arterial"/>
</div>
</div>

<div class="form-group">
<label class="control-label" for="c_frecuency">Frecuencia cardiaca</label>
<div class="input-group">
  <div class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
  <input class="form-control" name="c_frecuency" type="text" placeholder="Ingresa la frecuencia cardiaca"/>
</div>
</div>

<div class="form-group">
<label class="control-label" for="b_frencuency">Frecuencia respiratoria</label>
<div class="input-group">
  <div class="input-group-addon"><i class="fa fa-fighter-jet" aria-hidden="true"></i></div>
  <input class="form-control" name="b_frencuency" type="text" placeholder="Ingresa la frecuencia respiratoria"/>
</div>
</div>
  <button type="submit" class="btn btn-success">Terminar captura</button>
  <div class="input-group input-group-md">
</form>
@endsection
