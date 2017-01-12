@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Ingresa tus datos de inicio de sesión</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <!-- Userdata input  -->
                            <div class="form-group{{ $errors->has('User_data') ? ' has-error' : '' }}">
                                <label for="User_data" class="col-md-4 control-label">Correo o código UDG</label>
                                <div class="col-md-6">
                                    <input id="User_data" type="text" class="form-control" name="User_data"
                                           value="{{ old('User_data') }}" required autofocus>
                                    @if ($errors->has('User_data'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('User_data') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- / Userdata input  -->

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-5">
                                    <button type="submit" class="btn btn-primary">
                                        Iniciar sesión
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
