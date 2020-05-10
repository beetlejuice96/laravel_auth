@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-warning">
                Registro de usuario administrador
            </div>

            <div class="card">
                <div class="card-header">{{ __('Registro por primera vez') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Nombre usuario') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username')
                                    is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password')
                                    is-invalid @enderror" name="password" required autocomplete="new-password" minlength="6">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Las passwords ingresadas deben coincidir y tener min. 6 caracteres</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        @include('admin.personas.inputs-create')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="Registrarse">
                            </div>
                        </div>
                    </form>


{{--                        <div class="form-group row">--}}
{{--                            <label for="descr" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="descr" type="text" class="form-control" name="descr" value="{{ old('descr') }}" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="nombresPersona" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="nombresPersona" type="text" class="form-control" name="nombresPersona" value="{{ old('nombresPersona') }}" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="form-group row">--}}
{{--                            <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="fechaNac" class="col-md-4 col-form-label text-md-right">{{ __('Fecha nacimiento') }}</label>--}}


                        <!--<div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>
                            </div>
                        </div>-->


{{--                            <div class="col-md-6">--}}
{{--                                <input id="fechaNac" type="date" class="form-control" name="fechaNac" value="{{ old('fechaNac') }}" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}




{{--                        <div class="form-group row">--}}
{{--                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="tel" type="tel" class="form-control" name="tel" value="{{ old('tel') }}" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="tipoDoc" class="col-md-4 col-form-label text-md-right">Tipo Documento</label>--}}
{{--                           <div class="col-md-6">--}}
{{--                                <select name="tipoDoc" id="tipoDoc" class="form-control" value="{{ old('tipoDoc') }}">--}}
{{--                                    <option value="DNI">DNI</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="nroDocumento" class="col-md-4 col-form-label text-md-right">{{ __('Nro Documento') }}</label>--}}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
