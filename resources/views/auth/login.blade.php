@extends('layouts.auth')

@section('content')
    <div class="container-fluid">
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">Datos de inicio de sesión</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                                        <label for="login" class="col-md-4 control-label">Correo o código
                                            UDG</label>

                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"
                                                                                  aria-hidden="true"></i>
                                                </div>
                                                <input id="login" type="text" class="form-control" name="login"
                                                       value="{{ old('login') }}" required
                                                       autofocus>
                                            </div>
                                            @if ($errors->has('login'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('login') }}</strong>
                                                    </span> @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Contraseña</label>

                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-key"
                                                                                  aria-hidden="true"></i></div>
                                                <input id="password" type="password" class="form-control"
                                                       name="password" required>
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span> @endif

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"
                                                           name="remember" {{ old( 'remember') ? 'checked' : ''}}>
                                                    Recordarme
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Iniciar sesión
                                            </button>
                                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection